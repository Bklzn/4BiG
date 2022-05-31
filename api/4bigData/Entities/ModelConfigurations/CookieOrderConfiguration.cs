using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Metadata.Builders;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4bigData.Entities.ModelConfigurations
{
    public class CookieOrderConfiguration : IEntityTypeConfiguration<CookieOrder>
    {
        public void Configure(EntityTypeBuilder<CookieOrder> builder)
        {
            builder.HasKey(co => new { co.CookieId, co.OrderId });

            builder.HasOne(co => co.Cookie)
                .WithMany(o => o.CookieOrders)
                .HasForeignKey(co => co.CookieId);

            builder.HasOne(co => co.Order)
                .WithMany(p => p.CookieOrders)
                .HasForeignKey(cp => cp.OrderId);
        }
    }
}
