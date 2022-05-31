using _4big.Exceptions;
using _4bigData.Entities;
using _4bigData.Models;
using AutoMapper;
using Microsoft.AspNetCore.Identity;
using Microsoft.Extensions.Configuration;
using Microsoft.IdentityModel.Tokens;
using Npgsql;
using NpgsqlTypes;
using System;
using System.Collections.Generic;
using System.Data;
using System.IdentityModel.Tokens.Jwt;
using System.Linq;
using System.Security.Claims;
using System.Text;

namespace _4big.Services
{
    public interface IAccountService
    {
        void RegisterUser(RegisterUserDto dto);
        LoggedDataDto GenerateJwt(LoginDto dto);
        UserDto GetUserData(long id);
        void UpdateUserData(long id, RegisterUserDto dto);
    }
    public class AccountService : IAccountService
    {
        private readonly CookieDbContext _dbContext;
        private readonly IPasswordHasher<User> _passwordHasher;
        private readonly AuthenticationSettings _authenticationSettings;
        private readonly IMapper _mapper;

        public AccountService(CookieDbContext dbContext, IPasswordHasher<User> passwordHasher, AuthenticationSettings authenticationSettings, IMapper mapper)
        {
            _dbContext = dbContext;
            _passwordHasher = passwordHasher;
            _authenticationSettings = authenticationSettings;
            _mapper = mapper;
        }

        public void RegisterUser(RegisterUserDto dto)
        {
            var newUser = new User()
            {
                Email = dto.Email,
                Password = dto.Password,
                Nickname = dto.Nickname,
                Permission = dto.Permission
            };

            var hashedPassword = _passwordHasher.HashPassword(newUser, dto.Password);
            newUser.Password = hashedPassword;

            _dbContext.Users.Add(newUser);
            _dbContext.SaveChanges();
        }

        public LoggedDataDto GenerateJwt(LoginDto dto)
        {
            var user = _dbContext
                .Users
                .FirstOrDefault(x => x.Email == dto.Email);

            if(user is null)
            {
                throw new BadRequestException("Invalid email or password");
            }

            var result = _passwordHasher.VerifyHashedPassword(user, user.Password, dto.Password);
            if(result == PasswordVerificationResult.Failed)
            {
                throw new BadRequestException("Invalid email or password");
            }

            List<Claim> claims = new()
            {
                new Claim(ClaimTypes.NameIdentifier, user.Id.ToString()),
                new Claim(ClaimTypes.Email, user.Email),
                new Claim(ClaimTypes.Name, user.Nickname),
                new Claim(ClaimTypes.Role, user.Permission),
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

            var loginResult = new LoggedDataDto(){ 
                UserId = user.Id, 
                Token = tokenHendler.WriteToken(token)
            };

            return loginResult;
        }

        public UserDto GetUserData(long id)
        {
            var user = _dbContext
                .Users
                .FirstOrDefault(u => u.Id == id);

            if (user == null) throw new NotFoundException("User do not exist!");

            var userDto = _mapper.Map<UserDto>(user);

            return userDto;
        }

        public void UpdateUserData(long id, RegisterUserDto dto)
        {
            var user = _dbContext
                .Users
                .FirstOrDefault(u => u.Id == id);

            if (user == null) throw new NotFoundException("User do not exist!");

            user.Email = dto.Email;
            user.Password = dto.Password;

            _dbContext.SaveChanges();
        }
    }
}
