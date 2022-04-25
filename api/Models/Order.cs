using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace _4big.Models
{
    public class Order
    {
        public long Id { get; set; }
        public virtual List<Cookie> Cookies { get; set; }
        public string Email { get; set; }
        public string FirstName { get; set; }
        public string LastName { get; set; }
        public string StreetName { get; set; }
        public string BuildingNum { get; set; }
        public string ApartmentNum { get; set; }
        public string ZipCode { get; set; }
        public string City { get; set; }
        public DateTime? PackedDate { get; set; }
        public DateTime? SendDate { get; set; }
        public DateTime? RecivedDate { get; set; }

    }
}
