using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4bigData.Entities
{
    [Table("Cookie_order")]
    public class CookieOrder
    {
        [Column("Cook_ID")]
        public long CookieId { get; set; }
        [Column("Orde_ID")]
        public long OrderId { get; set; }

        public virtual Cookie Cookie { get; set; }
        public virtual Order Order { get; set; }
    }
}
