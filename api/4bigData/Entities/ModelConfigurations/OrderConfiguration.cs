using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Metadata.Builders;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4bigData.Entities.ModelConfigurations
{
    public class OrderConfiguration : IEntityTypeConfiguration<Order>
    {
        public void Configure(EntityTypeBuilder<Order> builder)
        {
            builder.Property(o => o.Email)
                .IsRequired();

            builder.Property(o => o.PhoneNumber)
                .IsRequired();

            builder.Property(o => o.FirstName)
                .IsRequired();

            builder.Property(o => o.LastName)
                .IsRequired();

            builder.Property(o => o.StreetName)
                .IsRequired();

            builder.Property(o => o.BuildingNum)
                .IsRequired();

            builder.Property(o => o.ApartmentNum);

            builder.Property(o => o.ZipCode)
                .IsRequired();

            builder.Property(o => o.City)
                .IsRequired();

            builder.Property(o => o.Nip);

            builder.Property(o => o.PackageNum);

            builder.Property(o => o.Pickup);

            builder.Property(o => o.Packed);

            builder.Property(o => o.Send);

            builder.Property(o => o.Received);

            builder.Property(o => o.UserId);
        }
    }
}
