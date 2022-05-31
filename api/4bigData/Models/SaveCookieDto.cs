using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4bigData.Models
{
    public class SaveCookieDto
    {
        public string Name { get; set; }
        public string Description { get; set; }
        public bool Favorite { get; set; } = false;
        public List<long> ProductsIds { get; set; }
    }
}
