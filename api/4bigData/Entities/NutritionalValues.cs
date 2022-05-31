using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4bigData.Entities
{
    [Table("Nutrition_label")]
    public class NutritionalValues
    {
        [Column("energy")]
        public int Energy { get; set; }
        [Column("fat_total")]
        public float FatTotal { get; set; }
        [Column("f_saturated")]
        public float SaturatedFat { get; set; }
        [Column("carbohydrate")]
        public float Carbohydrate { get; set; }
        [Column("c_sugars")]
        public float Sugars { get; set; }
        [Column("fibre")]
        public float Fibre { get; set; }
        [Column("protein")]
        public float Protein { get; set; }
        [Column("salt")]
        public float Salt { get; set; }
        
        [Column("Prod_ID")]
        [ForeignKey("Product")]
        public long ProductId { get; set; }
        public virtual Product Product { get; set; }
    }
}
