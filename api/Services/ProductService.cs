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
        private readonly INutritionService _nutritionService;
        private readonly string sqlDataSource;

        public ProductService(IConfiguration configuration, INutritionService nutritionService)
        {
            _configuration = configuration;
            _nutritionService = nutritionService;

            sqlDataSource = _configuration.GetConnectionString("CookieAppCon");
        }

        public Product GetById(int id)
        {
            Product p;

            string query = @"
                SELECT *
                FROM public.""Product""
                WHERE ""ID"" = @id
                ";

            DataTable table = new();
            NpgsqlDataReader myReader;

            using (NpgsqlConnection myCon = new(sqlDataSource))
            {
                myCon.Open();

                using NpgsqlCommand products = new(query, myCon);
                products.Parameters.AddWithValue("@id", id);
                myReader = products.ExecuteReader();

                table.Load(myReader);

                p = new();

                p.Id = table.Rows[0].Field<int>("ID");
                p.Name = table.Rows[0].Field<string>("name");
                p.Weight = table.Rows[0].Field<float>("weight");
                p.Category = table.Rows[0].Field<string>("category");
                p.Price = table.Rows[0].Field<decimal>("price");
                p.ThreeDModelPath = table.Rows[0].Field<string>("threeD_model");
                p.SVGModelPath = table.Rows[0].Field<string>("svg_model");
                p.NutritionsTable = _nutritionService.GetById(table.Rows[0].Field<int>("Nutr_ID"));

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
                    int nutrId = _nutritionService.Create(dto.NutritionsTable);
                    products.Parameters.AddWithValue("@nutr_id", nutrId);
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

            return table.Rows[0].Field<int>("ID");
        }

        public bool Delete(int id)
        {
            string query = @"
                DELETE FROM public.""Product""
                WHERE ""ID"" = @id;
            ";


            string nutrIdQuery = @"
                SELECT ""Nutr_ID"" 
                FROM public.""Product"" 
                WHERE ""ID"" = @id;
                ";

            NpgsqlDataReader myReader;
            DataTable table = new();

            using (NpgsqlConnection myCon = new(sqlDataSource))
            {
                myCon.Open();

                using NpgsqlCommand nutrIDCommand = new(nutrIdQuery, myCon);
                nutrIDCommand.Parameters.AddWithValue("@id", id);
                myReader = nutrIDCommand.ExecuteReader();
                table.Load(myReader);

                using NpgsqlCommand products = new(query, myCon);
                products.Parameters.AddWithValue("@id", id);
                myReader = products.ExecuteReader();

                _nutritionService.Delete(table.Rows[0].Field<int>("Nutr_ID"));

                myReader.Close();
                myCon.Close();
            }

            return true;
        }

        public Product Update(int id, ProductDto dto)
        {
            string query = @"
                UPDATE public.""Product""
                SET name = @name, weight = @weight, price = @price, category = @category, ""threeD_model"" = @threeD, svg_model = @svg
                WHERE ""ID"" = @id RETURNING ""Nutr_ID"";
            ";

            NpgsqlDataReader myReader;
            DataTable table = new();

            using (NpgsqlConnection myCon = new(sqlDataSource))
            {
                myCon.Open();

                using (NpgsqlCommand products = new(query, myCon))
                {
                    try
                    {
                        products.Parameters.AddWithValue("@id", id);
                        products.Parameters.AddWithValue("@name", dto.Name);
                        products.Parameters.AddWithValue("@weight", dto.Weight);
                        products.Parameters.AddWithValue("@price", dto.Price);
                        products.Parameters.AddWithValue("@threeD", dto.ThreeDModelPath);
                        products.Parameters.AddWithValue("@svg", dto.SVGModelPath);
                        products.Parameters.AddWithValue("@category", Enum.Parse(typeof(Product_category), dto.Category));
                        myReader = products.ExecuteReader();
                        table.Load(myReader);

                        _nutritionService.Update(table.Rows[0].Field<int>("Nutr_ID"), dto.NutritionsTable);
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
