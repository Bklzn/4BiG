using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4bigData.Entities
{
    [Table("Property_product")]
    public class ProductProperty
    {
        [Column("Prod_ID")]
        public long ProductId { get; set; }
        [Column("Prop_ID")]
        public long PropertyId { get; set; }

        public virtual Product Product { get; set; }
        public virtual Property Property { get; set; }
    }
}
