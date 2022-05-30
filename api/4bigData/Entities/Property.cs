using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4bigData.Entities
{
    [Table("Property")]
    public class Property
    {
        [Column("ID")]
        public long PropertyId { get; set; }
        [Column("name")]
        public string Name { get; set; }
        [Column("svg_model")]
        public string SVGModelPath { get; set; }

        public virtual IList<ProductProperty> ProductProperties { get; set; }
    }
}
