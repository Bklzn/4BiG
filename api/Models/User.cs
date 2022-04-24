using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace _4big.Models
{
    public class User
    {
        public long Id { get; set; }
        public string Email { get; set; }
        public string Password { get; set; }
        public string Nickname { get; set; }
        public string Permission { get; set; }
        public virtual List<Order> Orders { get; set; }

    }
}
