using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace _4big.Models
{
    public class NutritionalValues
    {
        public long Id { get; set; }
        public int Energy { get; set; }
        public float FatTotal { get; set; }
        public float SaturatedFat { get; set; }
        public float Carbohydrate { get; set; }
        public float Sugars { get; set; }
        public float Fibre { get; set; }
        public float Protein { get; set; }
        public float Salt { get; set; }
    }
}
