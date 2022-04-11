using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace _4big.Models
{
    public class Cookie
    {
        public long Id { get; set; }
        public string Name { get; set; }
        public List<Product> Products { get; set; }
        public List<Order> Orders { get; set; }

    }
}
