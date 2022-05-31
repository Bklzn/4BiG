using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4bigData.Entities
{
    [Table("Cookie_product")]
    public class CookieProduct
    {
        [Column("Cook_ID")]
        public long CookieId { get; set; }
        [Column("Prod_ID")]
        public long ProductId { get; set; }

        public virtual Cookie Cookie { get; set; }
        public virtual Product Product { get; set; }
    }
}
