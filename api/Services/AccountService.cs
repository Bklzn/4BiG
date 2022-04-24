using _4big.Models;
using Microsoft.AspNetCore.Identity;
using Microsoft.Extensions.Configuration;
using Microsoft.IdentityModel.Tokens;
using Npgsql;
using NpgsqlTypes;
using System;
using System.Collections.Generic;
using System.Data;
using System.IdentityModel.Tokens.Jwt;
using System.Security.Claims;
using System.Text;

namespace _4big.Services
{
    public interface IAccountService
    {
        int RegisterUser(RegisterUserDto dto);
        string GenerateJwt(LoginDto dto);

    }
    public class AccountService : IAccountService
    {
        public enum position
        {
            [PgName("client")]
            client,
            [PgName("employee")]
            employee,
            [PgName("administrator")]
            administrator
        }

        private readonly IConfiguration _configuration;
        private readonly IPasswordHasher<User> _passwordHasher;
        private readonly AuthenticationSettings _authenticationSettings;
        private readonly string sqlDataSource;

        public AccountService(IConfiguration configuration, IPasswordHasher<User> passwordHasher, AuthenticationSettings authenticationSettings)
        {
            _configuration = configuration;
            _passwordHasher = passwordHasher;
            _authenticationSettings = authenticationSettings;

            sqlDataSource = _configuration.GetConnectionString("CookieAppCon");
        }

        public int RegisterUser(RegisterUserDto dto)
        {
            string query = @"
                INSERT INTO public.""User""(
                ""ID"", ""e-mail"", passw, nick, permission)
	            VALUES(DEFAULT, @email, @passwd, @nick, @permission) RETURNING ""ID"";
            ";

            string queryEmail = @"
                SELECT ""e-mail""
                FROM public.""User""
                WHERE ""e-mail"" = @email
                ";

            DataTable table = new();
            NpgsqlDataReader myReader;

            using (NpgsqlConnection myCon = new(sqlDataSource))
            {
                myCon.Open();

                using NpgsqlCommand users = new(query, myCon);
                using NpgsqlCommand email = new(queryEmail, myCon);

                if (dto.Password != dto.PasswordConfirmed) return -2;

                email.Parameters.AddWithValue("@email", dto.Email);
                myReader = email.ExecuteReader();
                if (myReader.HasRows) return -3;
                myReader.Close();

                try
                {
                    User user = new()
                    {
                        Email = dto.Email,
                        Password = dto.Password,
                        Nickname = dto.Nickname,
                        Permission = dto.Permission,
                        Orders = null
                    };
                    string hashedPassword = _passwordHasher.HashPassword(user, user.Password);
                    users.Parameters.AddWithValue("@passwd", hashedPassword);
                    users.Parameters.AddWithValue("@email", dto.Email);
                    users.Parameters.AddWithValue("@nick", dto.Nickname);
                    users.Parameters.AddWithValue("@permission", Enum.Parse(typeof(position), dto.Permission));
                    myReader = users.ExecuteReader();
                }
                catch (System.ArgumentException)
                {
                    return -1;
                }

                table.Load(myReader);

                myReader.Close();
                myCon.Close();
            }

            return table.Rows[0].Field<int>("ID");
        }

        public string GenerateJwt(LoginDto dto)
        {
            string query = @"
                SELECT * 
                FROM public.""User""
                WHERE ""e-mail"" = @email
                ";

            DataTable table = new();
            NpgsqlDataReader myReader;

            using (NpgsqlConnection myCon = new(sqlDataSource))
            {
                myCon.Open();

                using NpgsqlCommand users = new(query, myCon);

                users.Parameters.AddWithValue("@email", dto.Email);
                myReader = users.ExecuteReader();

                if (!myReader.HasRows) throw new Exception("Invalid username or password");
                table.Load(myReader);

                User user = new()
                {
                    Email = dto.Email,
                    Password = table.Rows[0].Field<string>("passw").ToString(),
                    Nickname = table.Rows[0].Field<string>("nick").ToString(),
                    Permission = table.Rows[0].Field<string>("permission").ToString(),
                    Orders = null
                };

                var result = _passwordHasher.VerifyHashedPassword(user, user.Password, dto.Password);
                if (result == PasswordVerificationResult.Failed)
                {
                    throw new Exception("Invalid username or password");
                }

                myReader.Close();
                myCon.Close();
            }

            List<Claim> claims = new() 
            { 
                new Claim(ClaimTypes.NameIdentifier, table.Rows[0].Field<int>("id").ToString()),
                new Claim(ClaimTypes.Email, table.Rows[0].Field<string>("e-mail").ToString()),
                new Claim(ClaimTypes.Name, table.Rows[0].Field<string>("nick").ToString()),
                new Claim(ClaimTypes.Role, table.Rows[0].Field<string>("permission").ToString()),
            };

            var key = new SymmetricSecurityKey(Encoding.UTF8.GetBytes(_authenticationSettings.JwtKey));
            var cred = new SigningCredentials(key, SecurityAlgorithms.HmacSha256);
            var expires = DateTime.Now.AddDays(_authenticationSettings.JwtExpireDays);

            var token = new JwtSecurityToken(_authenticationSettings.JwtIssuer, 
                _authenticationSettings.JwtIssuer, 
                claims,
                expires: expires,
                signingCredentials: cred);

            var tokenHendler = new JwtSecurityTokenHandler();
            return tokenHendler.WriteToken(token);
        }
    }
}
