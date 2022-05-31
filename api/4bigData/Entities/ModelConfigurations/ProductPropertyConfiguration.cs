using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Metadata.Builders;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4bigData.Entities.ModelConfigurations
{
    public class ProductPropertyConfiguration : IEntityTypeConfiguration<ProductProperty>
    {
        public void Configure(EntityTypeBuilder<ProductProperty> builder)
        {
            builder.HasKey(p => new {p.ProductId, p.PropertyId});

            builder.HasOne(pp => pp.Product)
                .WithMany(p => p.ProductProperties)
                .HasForeignKey(pp => pp.ProductId);

            builder.HasOne(pp => pp.Property)
                .WithMany(p => p.ProductProperties)
                .HasForeignKey(pp => pp.PropertyId);
        }
    }
}
