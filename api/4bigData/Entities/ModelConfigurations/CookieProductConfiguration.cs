using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Metadata.Builders;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4bigData.Entities.ModelConfigurations
{
    public class CookieProductConfiguration : IEntityTypeConfiguration<CookieProduct>
    {
        public void Configure(EntityTypeBuilder<CookieProduct> builder)
        {
            builder.HasKey(cp => new { cp.CookieId, cp.ProductId });

            builder.HasOne(cp => cp.Cookie)
                .WithMany(p => p.CookieProducts)
                .HasForeignKey(cp => cp.CookieId);

            builder.HasOne(cp => cp.Product)
                .WithMany(p => p.CookieProducts)
                .HasForeignKey(cp => cp.ProductId);
        }
    }
}
