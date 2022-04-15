using _4big.Models;
using Microsoft.Extensions.Configuration;
using Npgsql;
using NpgsqlTypes;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Threading.Tasks;

namespace _4big.Services
{
    public interface IProductService
    {
        IEnumerable<Product> GetByCategory(string category);
        Product GetById(int id);
        int Create(ProductDto dto);
        bool Delete(int id);
        Product Update(int id, ProductDto dto);
    }
    public class ProductService : IProductService
    {
        public enum Product_category
        {
            [PgName("package")]
            package,
            [PgName("base")]
            cookie_base,
            [PgName("upgraded_base")]
            upgraded_base,
            [PgName("fruits")]
            fruits,
            [PgName("nuts")]
            nuts,
            [PgName("chocolate")]
            chocolate,
        }
        private readonly IConfiguration _configuration;
        private readonly string sqlDataSource;

        public ProductService(IConfiguration configuration)
        {
            _configuration = configuration;
            sqlDataSource = _configuration.GetConnectionString("CookieAppCon");
        }

        public Product GetById(int id)
        {
            Product p;

            string productQuery = @"
                SELECT *
                FROM public.""Product""
                WHERE ""ID"" = @id
                ";

            string nutritionQuery = @"
                SELECT *
                FROM ""Nutrition_label"" 
                WHERE ""Nutrition_label"".""ID"" = @id
                ";

            DataTable productTable = new();
            DataTable nutritionalValuesTable = new();
            NpgsqlDataReader myReader;

            using (NpgsqlConnection myCon = new(sqlDataSource))
            {
                myCon.Open();

                using NpgsqlCommand products = new(productQuery, myCon);
                products.Parameters.AddWithValue("@id", id);
                myReader = products.ExecuteReader();

                productTable.Load(myReader);

                p = new();

                p.Id = productTable.Rows[0].Field<int>("ID");
                p.Name = productTable.Rows[0].Field<string>("name");
                p.Weight = productTable.Rows[0].Field<float>("weight");
                p.Category = productTable.Rows[0].Field<string>("category");
                p.Price = productTable.Rows[0].Field<decimal>("price");
                p.ThreeDModelPath = productTable.Rows[0].Field<string>("threeD_model");
                p.SVGModelPath = productTable.Rows[0].Field<string>("svg_model");

                using (NpgsqlCommand nutritionLabel = new(nutritionQuery, myCon))
                {
                    nutritionLabel.Parameters.AddWithValue("@id", productTable.Rows[0].Field<int>("Nutr_ID"));
                    myReader = nutritionLabel.ExecuteReader();
                    nutritionalValuesTable.Load(myReader);

                    NutritionalValues nl = new();

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

                myReader.Close();
                myCon.Close();
            }

            return p;
        }

        public IEnumerable<Product> GetByCategory(string category)
        {
            List<Product> productsList = new();

            string productQuery = @"
                SELECT ""ID""
                FROM public.""Product""
                WHERE ""Product"".""category"" = @category
                ";

            DataTable table = new();
            NpgsqlDataReader myReader;

            using (NpgsqlConnection myCon = new(sqlDataSource))
            {
                myCon.Open();

                using NpgsqlCommand products = new(productQuery, myCon);
                try
                {
                    products.Parameters.AddWithValue("@category", Enum.Parse(typeof(Product_category), category));
                    myReader = products.ExecuteReader();
                }
                catch (System.ArgumentException)
                {
                    return null;
                }

                table.Load(myReader);


                foreach (DataRow product in table.Rows)
                {
                    productsList.Add(GetById(product.Field<int>("ID")));
                }

                myReader.Close();
                myCon.Close();
            }

            return productsList;
        }

        public int Create(ProductDto dto)
        {
            string query = @"
                INSERT INTO public.""Product""(
                ""ID"", ""Nutr_ID"", name, weight, price, ""threeD_model"", svg_model, category)
	            VALUES(DEFAULT, @nutr_id, @name, @weight, @price, @threeD, @svg, @category) RETURNING ""ID"";
            ";

            DataTable table = new();
            NpgsqlDataReader myReader;

            using (NpgsqlConnection myCon = new(sqlDataSource))
            {
                myCon.Open();

                using NpgsqlCommand products = new(query, myCon);
                try
                {
                    products.Parameters.AddWithValue("@nutr_id", dto.NutrId);
                    products.Parameters.AddWithValue("@name", dto.Name);
                    products.Parameters.AddWithValue("@weight", dto.Weight);
                    products.Parameters.AddWithValue("@price", dto.Price);
                    products.Parameters.AddWithValue("@threeD", dto.ThreeDModelPath);
                    products.Parameters.AddWithValue("@svg", dto.SVGModelPath);
                    products.Parameters.AddWithValue("@category", Enum.Parse(typeof(Product_category), dto.Category));
                    myReader = products.ExecuteReader();
                }
                catch (System.ArgumentException)
                {
                    return -1;
                }

                table.Load(myReader);

                myReader.Close();
                myCon.Close();
            }

            return (int)table.Rows[0]["ID"];
        }

        public bool Delete(int id)
        {
            string query = @"
                DELETE FROM public.""Product""
                WHERE ""ID"" = @id;
            ";

            NpgsqlDataReader myReader;

            using (NpgsqlConnection myCon = new(sqlDataSource))
            {
                myCon.Open();

                using NpgsqlCommand products = new(query, myCon);
                products.Parameters.AddWithValue("@id", id);
                myReader = products.ExecuteReader();

                myReader.Close();
                myCon.Close();
            }

            return true;
        }

        public Product Update(int id, ProductDto dto)
        {
            string query = @"
                UPDATE public.""Product""
                SET ""Nutr_ID"" = @nutr_id, name = @name, weight = @weight, price = @price, category = @category, ""threeD_model"" = @threeD, svg_model = @svg
                WHERE ""ID"" = @id;
            ";

            NpgsqlDataReader myReader;

            using (NpgsqlConnection myCon = new(sqlDataSource))
            {
                myCon.Open();

                using (NpgsqlCommand products = new(query, myCon))
                {
                    try
                    {
                        products.Parameters.AddWithValue("@id", id);
                        products.Parameters.AddWithValue("@nutr_id", dto.NutrId);
                        products.Parameters.AddWithValue("@name", dto.Name);
                        products.Parameters.AddWithValue("@weight", dto.Weight);
                        products.Parameters.AddWithValue("@price", dto.Price);
                        products.Parameters.AddWithValue("@threeD", dto.ThreeDModelPath);
                        products.Parameters.AddWithValue("@svg", dto.SVGModelPath);
                        products.Parameters.AddWithValue("@category", Enum.Parse(typeof(Product_category), dto.Category));
                        myReader = products.ExecuteReader();
                    }
                    catch (System.ArgumentException)
                    {
                        return null;
                    }
                }

                myReader.Close();
                myCon.Close();
            }

            return GetById(id);
        }
    }
}
