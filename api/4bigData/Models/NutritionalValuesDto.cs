﻿using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4bigData.Models
{
    public class NutritionalValuesDto
    {
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
