using _4big.Models;
using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Configuration;
using Npgsql;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Threading.Tasks;

namespace _4big.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class CookieController : ControllerBase
    {
        private readonly IConfiguration _configuration;

        public CookieController(IConfiguration configuration)
        {
            _configuration = configuration;
        }

        [HttpGet]
        public ActionResult Get()
        {
            Cookie c;
            Product p;
            Order o;

            List<Cookie> cookieList = new();
            List<Product> productList = new();
            List<Order> orderList = new();

            string cookiesQuery = @"
                SELECT *
                FROM public.""Cookie""
                ";

            string productQuery = @"
                SELECT ""Product"".*
                FROM public.""Product""
                INNER JOIN ""Cookie_product"" ON ""Product"".""ID"" = ""Prod_ID""
                WHERE ""Cook_ID"" = @id
                ";

            string orderQuery = @"
                SELECT ""Order"".*
                FROM public.""Order""
                INNER JOIN ""Cookie_order"" ON ""Order"".""ID"" = ""Orde_ID""
                WHERE ""Cook_ID"" = @id
                ";


            DataTable cookieTable = new();
            DataTable productTable = new();
            DataTable orderTable = new();

            string sqlDataSource = _configuration.GetConnectionString("CookieAppCon");

            NpgsqlDataReader myReader;

            using (NpgsqlConnection myCon = new(sqlDataSource))
            {
                myCon.Open();

                using NpgsqlCommand cookies = new(cookiesQuery, myCon);
                myReader = cookies.ExecuteReader();
                cookieTable.Load(myReader);

                foreach (DataRow cookie in cookieTable.Rows)
                {
                    c = new();

                    c.Id = cookieTable.Rows[0].Field<int>("ID");
                    c.Name = cookieTable.Rows[0].Field<string>("name");

                    using (NpgsqlCommand products = new(productQuery, myCon))
                    {
                        products.Parameters.AddWithValue("@id", c.Id);
                        myReader = products.ExecuteReader();
                        productTable.Load(myReader);

                        foreach (DataRow product in productTable.Rows)
                        {
                            p = new();

                            p.Id = product.Field<int>("ID");
                            p.Name = product.Field<string>("name");
                            p.Weight = product.Field<float>("weight");
                            p.Category = product.Field<string>("category");
                            p.Price = product.Field<decimal>("price");

                            productList.Add(p);
                        }

                        c.Products = productList;
                    }


                    using (NpgsqlCommand orders = new(orderQuery, myCon))
                    {
                        orders.Parameters.AddWithValue("@id", c.Id);
                        myReader = orders.ExecuteReader();
                        orderTable.Load(myReader);

                        foreach (DataRow order in orderTable.Rows)
                        {

                            o = new();

                            o.Id = order.Field<int>("ID");
                            //o.List<Cookie> Cookies
                            //o.User User
                            o.Email = order.Field<string>("email");
                            o.FirstName = order.Field<string>("first_name");
                            o.LastName = order.Field<string>("last_name");
                            o.StreetName = order.Field<string>("street_name");
                            o.BuildingNum = order.Field<string>("buliding_num");
                            o.ApartmentNum = order.Field<string>("apartament_num");
                            o.ZipCode = order.Field<string>("zip_code");
                            o.City = order.Field<string>("city");
                            o.PackedDate = order.Field<DateTime>("packed_date");
                            o.SendDate = order.Field<DateTime>("send_date");
                            o.RecivedDate = order.Field<DateTime>("recived");

                            orderList.Add(o);
                        }

                        c.Orders = orderList;
                    }

                    cookieList.Add(c);
                }

                myReader.Close();
                myCon.Close();
            }

            return Ok(cookieList);
        }
    }
}

