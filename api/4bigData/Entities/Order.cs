using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4bigData.Entities
{
    [Table("Order")]
    public class Order
    {
        [Column("ID")]
        public long OrderId { get; set; }
        [Column("e-mail")]
        public string Email { get; set; }
        [Column("phone_num")]
        public string PhoneNumber { get; set; }
        [Column("first_name")]
        public string FirstName { get; set; }
        [Column("last_name")]
        public string LastName { get; set; }
        [Column("street_name")]
        public string StreetName { get; set; }
        [Column("building_num")]
        public string BuildingNum { get; set; }
        [Column("apartament_num")]
        public string ApartmentNum { get; set; }
        [Column("zip_code")]
        public string ZipCode { get; set; }
        [Column("city")]
        public string City { get; set; }
        [Column("nip")]
        public string Nip { get; set; }
        [Column("pickup")]
        public string Pickup { get; set; }
        [Column("package_num")]
        public string PackageNum { get; set; }
        [Column("packed_date")]
        public DateTime? Packed { get; set; }
        [Column("send_date")]
        public DateTime? Send { get; set; }
        [Column("received_date")]
        public DateTime? Received { get; set; }

        [NotMapped]
        public string PackedDate
        {
            get {
                if (Packed is null) return null;
                return ((DateTime)Packed).ToString("d"); 
            }
            set {
                if (value is null) Packed = null;
                else Packed = Convert.ToDateTime(value);
            }
        }
        [NotMapped]
        public string SendDate
        {
            get
            {
                if (Send is null) return null;
                return ((DateTime)Send).ToString("d");
            }
            set
            {
                if (value is null) Send = null;
                else Send = Convert.ToDateTime(value);
            }
        }
        [NotMapped]
        public string ReceivedDate
        {
            get
            {
                if (Received is null) return null;
                return ((DateTime)Received).ToString("d");
            }
            set
            {
                if (value is null) Received = null;
                else Received = Convert.ToDateTime(value);
            }
        }

        [Column("User_ID")]
        [ForeignKey("User")]
        public long? UserId { get; set; }
        public virtual User User { get; set; }
        public virtual IList<CookieOrder> CookieOrders { get; set; }
    }
}
