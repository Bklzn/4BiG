using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4bigData.Models
{
    public class UserDto
    {
        public string Email { get; set; }
        public string Nickname { get; set; }
        public string Permission { get; set; }

        public List<OrderDto> Orders { get; set; }
    }
}
