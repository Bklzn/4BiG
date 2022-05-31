using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Metadata.Builders;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4bigData.Entities.ModelConfigurations
{
    public class ProductConfiguration : IEntityTypeConfiguration<Product>
    {
        public void Configure(EntityTypeBuilder<Product> builder)
        {
            builder.HasOne(p => p.NutritionalValues)
                .WithOne(n => n.Product)
                .HasForeignKey<NutritionalValues>(n => n.ProductId);

            builder.Property(x => x.Name)
                .IsRequired();

            builder.Property(x => x.Weight)
                .IsRequired();

            builder.Property(x => x.ProductCategory)
                .HasConversion<string>()
                .IsRequired();

            builder.Property(x => x.Price)
                .IsRequired();
        }
    }
}
