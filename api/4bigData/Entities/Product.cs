using NpgsqlTypes;
using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4bigData.Entities
{
    public enum ProductCategory
    {
        package,
        cookie_base,
        upgraded_base,
        fruits,
        nuts,
        chocolate
    }

    [Table("Product")]
    public class Product
    {
        [Column("ID")]
        public long Id { get; set; }
        [Column("name")]
        public string Name { get; set; }
        [Column("weight")]
        public float Weight { get; set; }
        [Column("category")]
        public ProductCategory ProductCategory { get; set; }
        [Column("subname")]
        public string Subname { get; set; }
        [Column("description")]
        public string Description { get; set; }
        [Column("ingredients")]
        public string Ingredients { get; set; }
        [Column("price")]
        public decimal Price { get; set; }
        [Column("svg_model")]
        public string SVGModelPath { get; set; }
        [Column("threeD_model")]
        public string ThreeDModelPath { get; set; }

        [NotMapped]
        public string Category { 
            get 
            { 
                return ProductCategory.ToString(); 
            } 
            set 
            {
                ProductCategory = Enum.Parse<ProductCategory>(value);
            } 
        }

        public virtual NutritionalValues NutritionalValues { get; set; }
        public virtual IList<ProductProperty> ProductProperties { get; set; }
        public virtual IList<CookieProduct> CookieProducts { get; set; }
    }
}
