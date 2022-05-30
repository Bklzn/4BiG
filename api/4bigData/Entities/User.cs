using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4bigData.Entities
{
    public enum Permission
    {
        client,
        employee,
        administrator
    }

    [Table("User")]
    public class User
    {
        [Column("ID")]
        public long Id { get; set; }
        [Column("e-mail")]
        public string Email { get; set; }
        [Column("passw")]
        public string Password { get; set; }
        [Column("nick")]
        public string Nickname { get; set; }
        [Column("permission")]
        public Permission UserPermission { get; set; }

        [NotMapped]
        public string Permission
        {
            get
            {
                return UserPermission.ToString();
            }
            set
            {
                UserPermission = Enum.Parse<Permission>(value);
            }
        }

        public virtual IList<Cookie> Cookies { get; set; }
        public virtual IList<Order> Orders { get; set; }
    }
}
