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
    public interface IOrderService
    {
        Order GetById(int id);
        List<Order> GetAll();
        int Create(int? userId, OrderDto dto);
        bool Delete(int id);
        Order Update(int id, Order dto);
    }
    public class OrderService : IOrderService
    {
        private readonly IConfiguration _configuration;
        private readonly string sqlDataSource;

        public OrderService(IConfiguration configuration)
        {
            _configuration = configuration;

            sqlDataSource = _configuration.GetConnectionString("CookieAppCon");
        }

        public int Create(int? userId, OrderDto dto)
        {
            string query = @"
                INSERT INTO public.""Order""(
                ""ID"", ""User_ID"", first_name, last_name, street_name, building_num, apartament_num, zip_code, city, packed_date, send_date, received_date, ""e-mail"")
	            VALUES(DEFAULT, @id, @fName, @lName, @streetName, @buildingNum, @apartNum, @zipCode, @city, null, null, null, @email) RETURNING ""ID"";
                ";

            DataTable table = new();
            NpgsqlDataReader myReader;

            using (NpgsqlConnection myCon = new(sqlDataSource))
            {
                myCon.Open();

                using NpgsqlCommand orders = new(query, myCon);

                orders.Parameters.AddWithValue("@id", ((object)userId) ?? DBNull.Value);
                orders.Parameters.AddWithValue("@fName", dto.FirstName);
                orders.Parameters.AddWithValue("@lName", dto.LastName);
                orders.Parameters.AddWithValue("@streetName", dto.StreetName);
                orders.Parameters.AddWithValue("@buildingNum", dto.BuildingNum);
                orders.Parameters.AddWithValue("@apartNum", dto.ApartmentNum);
                orders.Parameters.AddWithValue("@zipCode", dto.ZipCode);
                orders.Parameters.AddWithValue("@city", dto.City);
                orders.Parameters.AddWithValue("@email", dto.Email);
                myReader = orders.ExecuteReader();

                table.Load(myReader);

                myReader.Close();
                myCon.Close();
            }

            return table.Rows[0].Field<int>("ID");
        }

        public bool Delete(int id)
        {
            string query = @"
                DELETE FROM public.""Order""
                WHERE ""ID"" = @id;
            ";

            using (NpgsqlConnection myCon = new(sqlDataSource))
            {
                myCon.Open();

                using NpgsqlCommand orders = new(query, myCon);

                orders.Parameters.AddWithValue("@id", id);
                orders.ExecuteReader();

                myCon.Close();
            }

            return true;
        }

        public Order GetById(int id)
        {
            string query = @"
                SELECT *
                FROM public.""Order""
                WHERE ""ID"" = @id;
                ";

            DataTable table = new();
            NpgsqlDataReader myReader;

            Order order;

            using (NpgsqlConnection myCon = new(sqlDataSource))
            {
                myCon.Open();

                using NpgsqlCommand orders = new(query, myCon);

                orders.Parameters.AddWithValue("@id", id);
                myReader = orders.ExecuteReader();

                if (!myReader.HasRows) return null;

                table.Load(myReader);
                order = new()
                {
                    Id = table.Rows[0].Field<int>("ID"),
                    Email = table.Rows[0].Field<string>("e-mail"),
                    FirstName = table.Rows[0].Field<string>("first_name"),
                    LastName = table.Rows[0].Field<string>("last_name"),
                    StreetName = table.Rows[0].Field<string>("street_name"),
                    BuildingNum = table.Rows[0].Field<string>("building_num"),
                    ApartmentNum = table.Rows[0].Field<string>("apartament_num"),
                    ZipCode = table.Rows[0].Field<string>("zip_code"),
                    City = table.Rows[0].Field<string>("city"),
                    PackedDate = table.Rows[0].Field<DateTime?>("packed_date"),
                    SendDate = table.Rows[0].Field<DateTime?>("send_date"),
                    RecivedDate = table.Rows[0].Field<DateTime?>("received_date")
                };

                myCon.Close();
            }

            return order;
        }

        public List<Order> GetAll()
        {
            string query = @"
                SELECT *
                FROM public.""Order"";
                ";

            DataTable table = new();
            NpgsqlDataReader myReader;

            List<Order> ordersList = new();

            using (NpgsqlConnection myCon = new(sqlDataSource))
            {
                myCon.Open();

                using NpgsqlCommand orders = new(query, myCon);

                myReader = orders.ExecuteReader();

                table.Load(myReader);

                foreach(DataRow row in table.Rows)
                {
                    Order order = new()
                    {
                        Id = row.Field<int>("ID"),
                        Email = row.Field<string>("e-mail"),
                        FirstName = row.Field<string>("first_name"),
                        LastName = row.Field<string>("last_name"),
                        StreetName = row.Field<string>("street_name"),
                        BuildingNum = row.Field<string>("building_num"),
                        ApartmentNum = row.Field<string>("apartament_num"),
                        ZipCode = row.Field<string>("zip_code"),
                        City = row.Field<string>("city"),
                        PackedDate = row.Field<DateTime?>("packed_date"),
                        SendDate = row.Field<DateTime?>("send_date"),
                        RecivedDate = row.Field<DateTime?>("received_date")
                    };

                    ordersList.Add(order);
                }

                myCon.Close();
            }

            return ordersList;
        }

        public Order Update(int id, Order order)
        {
            string query = @"
                UPDATE public.""Order""
                SET first_name = @fName, last_name = @lName, street_name = @streetName, building_num = @buildingNum, apartament_num = @apartNum, zip_code = @zipCode, city = @city, packed_date = @packedDate, send_date = @sendDate, received_date = @recivedDate, ""e-mail"" = @email
                WHERE ""ID"" = @id;
            ";

            using (NpgsqlConnection myCon = new(sqlDataSource))
            {
                myCon.Open();

                using NpgsqlCommand orders = new(query, myCon);

                orders.Parameters.AddWithValue("@id", id);
                orders.Parameters.AddWithValue("@fName", order.FirstName);
                orders.Parameters.AddWithValue("@lName", order.LastName);
                orders.Parameters.AddWithValue("@streetName", order.StreetName);
                orders.Parameters.AddWithValue("@buildingNum", order.BuildingNum);
                orders.Parameters.AddWithValue("@apartNum", order.ApartmentNum);
                orders.Parameters.AddWithValue("@zipCode", order.ZipCode);
                orders.Parameters.AddWithValue("@city", order.City);
                orders.Parameters.AddWithValue("@packedDate", ((object)order.PackedDate) ?? DBNull.Value);
                orders.Parameters.AddWithValue("@sendDate", ((object)order.SendDate) ?? DBNull.Value);
                orders.Parameters.AddWithValue("@recivedDate", ((object)order.RecivedDate) ?? DBNull.Value);
                orders.Parameters.AddWithValue("@email", order.Email);
                orders.ExecuteReader();

                myCon.Close();
            }

            return GetById(id);
        }
    }
}
