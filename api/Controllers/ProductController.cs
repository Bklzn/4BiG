using _4big.Models;
using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Configuration;
using Npgsql;
using NpgsqlTypes;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Threading.Tasks;

namespace _4big.Controllers
{
    [Route("api/[controller]")]

    [ApiController]

    public class ProductController : ControllerBase
    {

        public enum product_category
        {
            [PgName("fruits")]
            fruits
        }

        private readonly IConfiguration _configuration;

        public ProductController(IConfiguration configuration)
        {
            _configuration = configuration;
        }

        [HttpGet]

        public ActionResult Get([FromBody]string category)
        {
            Product p;

            List<Product> productsList = new List<Product>();

            string productQuery = @"
                SELECT *
                FROM public.""Product""
                WHERE ""Product"".""category"" = @category
                ";

            string nutritionQuery = @"
                SELECT *
                FROM ""Nutrition_label"" WHERE ""Nutrition_label"".""ID"" = @id
                ";

            DataTable productTable = new DataTable();
            DataTable nutritionalValuesTable = new DataTable();

            string sqlDataSource = _configuration.GetConnectionString("CookieAppCon");

            NpgsqlDataReader myReader;

            using (NpgsqlConnection myCon = new NpgsqlConnection(sqlDataSource))
            {

                myCon.Open();


                using (NpgsqlCommand products = new NpgsqlCommand(productQuery, myCon))
                {
                    try
                    {
                        products.Parameters.AddWithValue("@category", Enum.Parse(typeof(product_category), category));
                        myReader = products.ExecuteReader();
                    } catch(System.ArgumentException)
                    {
                        return BadRequest();
                    }
                    
                    productTable.Load(myReader);
                   

                    foreach(DataRow product in productTable.Rows) 
                    {
                        p = new Product();

                        p.Id = productTable.Rows[0].Field<int>("ID");
                        p.Name = productTable.Rows[0].Field<string>("name");
                        p.Weight = productTable.Rows[0].Field<float>("weight");
                        p.Category = productTable.Rows[0].Field<string>("category");
                        p.Price = productTable.Rows[0].Field<decimal>("price");

                        using (NpgsqlCommand nutritionLabel = new NpgsqlCommand(nutritionQuery, myCon))
                        {
                            nutritionLabel.Parameters.AddWithValue("@id", product.Field<int>("Nutr_ID"));
                            myReader = nutritionLabel.ExecuteReader();
                            nutritionalValuesTable.Load(myReader);

                            NutritionalValues nl = new NutritionalValues();

                            nl.Id = nutritionalValuesTable.Rows[0].Field<int>("ID");
                            nl.Energy = nutritionalValuesTable.Rows[0].Field<int>("energy");
                            nl.FatTotal = nutritionalValuesTable.Rows[0].Field<float>("fat_total");
                            nl.SaturatedFat = nutritionalValuesTable.Rows[0].Field<float>("f_saturated");
                            nl.Carbohydrate = nutritionalValuesTable.Rows[0].Field<float>("carbohydrate");
                            nl.Sugars = nutritionalValuesTable.Rows[0].Field<float>("c_sugars");
                            nl.Fibre = nutritionalValuesTable.Rows[0].Field<float>("fibre");
                            nl.Protein = nutritionalValuesTable.Rows[0].Field<float>("protein");
                            nl.Salt = nutritionalValuesTable.Rows[0].Field<float>("salt");

                            p.NutritionsTable = nl;
                        }

                        productsList.Add(p);

                    }

                    myReader.Close();
                    myCon.Close();

                }
            }

            return Ok(productsList);

        }
    }
    
}
