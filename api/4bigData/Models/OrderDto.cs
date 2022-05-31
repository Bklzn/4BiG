using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4bigData.Models
{
    public class OrderDto
    {
        public long OrderId { get; set; }
        public string Email { get; set; }
        public string PhoneNumber { get; set; }
        public string FirstName { get; set; }
        public string LastName { get; set; }
        public string StreetName { get; set; }
        public string BuildingNum { get; set; }
        public string ApartmentNum { get; set; }
        public string ZipCode { get; set; }
        public string City { get; set; }
        public string Nip { get; set; }
        public string Pickup { get; set; }

        public UserDto User { get; set; }
        public List<CookieDto> Cookies { get; set; }
    }
}
