using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace _4big.Models
{
    public class ProductDto
    { 
        public string Name { get; set; }
        public float Weight { get; set; }
        public string Category { get; set; }
        public decimal Price { get; set; }
        public string SVGModelPath { get; set; }
        public string ThreeDModelPath { get; set; }
        public virtual NutritionalValuesDto NutritionsTable { get; set; }
    }
}
