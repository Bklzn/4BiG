using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4bigData.Models
{
    public class SaveProductDto
    {
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
    }
}
