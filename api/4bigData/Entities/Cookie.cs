using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4bigData.Entities
{
    [Table("Cookie")]
    public class Cookie
    {
        [Column("ID")]
        public long CookieId { get; set; }
        [Column("name")]
        public string Name { get; set; }
        [Column("description")]
        public string Description { get; set; }

        [Column("User_ID")]
        [ForeignKey("User")]
        public long? UserId { get; set; }
        public virtual User User { get; set; }
        public virtual IList<CookieProduct> CookieProducts { get; set; }
        public virtual IList<CookieOrder> CookieOrders { get; set; }
    }
}
