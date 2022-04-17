using _4big.Models;
using Microsoft.Extensions.Configuration;
using Npgsql;
using System.Data;

namespace _4big.Services
{
    public interface INutritionService
    {
        NutritionalValues GetById(int id);
        int Create(NutritionalValuesDto nl);
        bool Delete(int id);
        NutritionalValues Update(int id, NutritionalValuesDto nl);
    }
    public class NutritionService : INutritionService
    {

        private readonly IConfiguration _configuration;
        private readonly string sqlDataSource;

        public NutritionService(IConfiguration configuration)
        {
            _configuration = configuration;
            sqlDataSource = _configuration.GetConnectionString("CookieAppCon");
        }

        public NutritionalValues GetById(int id)
        {
            NutritionalValues nl;

            string query = @"
                SELECT *
                FROM ""Nutrition_label"" 
                WHERE ""Nutrition_label"".""ID"" = @id
                ";

            DataTable table = new();
            NpgsqlDataReader myReader;

            using (NpgsqlConnection myCon = new(sqlDataSource))
            {
                myCon.Open();

                using NpgsqlCommand nutritionLabel = new(query, myCon);
                nutritionLabel.Parameters.AddWithValue("@id", id);
                myReader = nutritionLabel.ExecuteReader();
                table.Load(myReader);

                nl = new();
                nl.Id = table.Rows[0].Field<int>("ID");
                nl.Energy = table.Rows[0].Field<int>("energy");
                nl.FatTotal = table.Rows[0].Field<float>("fat_total");
                nl.SaturatedFat = table.Rows[0].Field<float>("f_saturated");
                nl.Carbohydrate = table.Rows[0].Field<float>("carbohydrate");
                nl.Sugars = table.Rows[0].Field<float>("c_sugars");
                nl.Fibre = table.Rows[0].Field<float>("fibre");
                nl.Protein = table.Rows[0].Field<float>("protein");
                nl.Salt = table.Rows[0].Field<float>("salt");

                myReader.Close();
                myCon.Close();
            }

            return nl;
        }

        public int Create(NutritionalValuesDto dto)
        {
            string query = @"
                INSERT INTO public.""Nutrition_label""(
                ""ID"", energy, fat_total, f_saturated, carbohydrate, c_sugars, fibre, protein, salt)
	            VALUES(DEFAULT, @energy, @fat_total, @f_saturated, @carbohydrate, @c_sugars, @fibre, @protein, @salt) RETURNING ""ID"";
            ";

            DataTable table = new();
            NpgsqlDataReader myReader;

            using (NpgsqlConnection myCon = new(sqlDataSource))
            {
                myCon.Open();

                using NpgsqlCommand nutritionLabel = new(query, myCon);
                nutritionLabel.Parameters.AddWithValue("@energy", dto.Energy);
                nutritionLabel.Parameters.AddWithValue("@fat_total", dto.FatTotal);
                nutritionLabel.Parameters.AddWithValue("@f_saturated", dto.SaturatedFat);
                nutritionLabel.Parameters.AddWithValue("@carbohydrate", dto.Carbohydrate);
                nutritionLabel.Parameters.AddWithValue("@c_sugars", dto.Sugars);
                nutritionLabel.Parameters.AddWithValue("@fibre", dto.Fibre);
                nutritionLabel.Parameters.AddWithValue("@protein", dto.Protein);
                nutritionLabel.Parameters.AddWithValue("@salt", dto.Salt);
                myReader = nutritionLabel.ExecuteReader();

                table.Load(myReader);

                myReader.Close();
                myCon.Close();
            }

            return table.Rows[0].Field<int>("ID");
        }

        public bool Delete(int id)
        {
            string query = @"
                DELETE FROM public.""Nutrition_label""
                WHERE ""ID"" = @id;
                ";

            NpgsqlDataReader myReader;

            using (NpgsqlConnection myCon = new(sqlDataSource))
            {
                myCon.Open();

                using NpgsqlCommand nutritionLabel = new(query, myCon);
                nutritionLabel.Parameters.AddWithValue("@id", id);
                myReader = nutritionLabel.ExecuteReader();

                myReader.Close();
                myCon.Close();
            }

            return true;
        }

        public NutritionalValues Update(int id, NutritionalValuesDto dto)
        {
            string query = @"
                UPDATE public.""Nutrition_label""
                SET energy = @energy, fat_total = @fat_total, f_saturated = @f_saturated, carbohydrate = @carbohydrate, c_sugars = @c_sugars, fibre = @fibre, protein = @protein, salt = @salt
                WHERE ""ID"" = @id;
            ";

            NpgsqlDataReader myReader;

            using (NpgsqlConnection myCon = new(sqlDataSource))
            {
                myCon.Open();

                using (NpgsqlCommand nutritionLabel = new(query, myCon))
                {
                    nutritionLabel.Parameters.AddWithValue("@id", id);
                    nutritionLabel.Parameters.AddWithValue("@energy", dto.Energy);
                    nutritionLabel.Parameters.AddWithValue("@fat_total", dto.FatTotal);
                    nutritionLabel.Parameters.AddWithValue("@f_saturated", dto.SaturatedFat);
                    nutritionLabel.Parameters.AddWithValue("@carbohydrate", dto.Carbohydrate);
                    nutritionLabel.Parameters.AddWithValue("@c_sugars", dto.Sugars);
                    nutritionLabel.Parameters.AddWithValue("@fibre", dto.Fibre);
                    nutritionLabel.Parameters.AddWithValue("@protein", dto.Protein);
                    nutritionLabel.Parameters.AddWithValue("@salt", dto.Salt);
                    myReader = nutritionLabel.ExecuteReader();
                }

                myReader.Close();
                myCon.Close();
            }

            return GetById(id);
        }
    }
}
