using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4bigData.Models
{
    public class CookieDto
    {
        public long CookieId { get; set; }
        public string Name { get; set; }
        public string Description { get; set; }

        public List<ProductDto> Products { get; set; }
    }
}
