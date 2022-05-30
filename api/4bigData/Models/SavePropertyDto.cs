using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4bigData.Models
{
    public class SavePropertyDto
    {
        public long PropertyId { get; set; }
        public string Name { get; set; }
        public string SVGModelPath { get; set; }
    }
}
