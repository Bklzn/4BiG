using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4bigData.Models
{
    public class ProductDto
    {
        public long Id { get; set; }
        public string Name { get; set; }
        public float Weight { get; set; }
        public string Category { get; set; }
        public string Subname { get; set; }
        public string Description { get; set; }
        public string Ingredients { get; set; }
        public decimal Price { get; set; }
        public string SVGModelPath { get; set; }
        public string ThreeDModelPath { get; set; }
        public NutritionalValuesDto NutritionalValues { get; set; }
        public List<SavePropertyDto> Properties { get; set; }
    }
}
