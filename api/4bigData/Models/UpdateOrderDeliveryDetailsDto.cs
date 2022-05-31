using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4bigData.Models
{
    public class UpdateOrderDeliveryDetailsDto
    {
        public string PackageNum { get; set; }
        public string PackedDate { get; set; }
        public string SendDate { get; set; }
        public string ReceivedDate { get; set; }
    }
}
