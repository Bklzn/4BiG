using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Metadata.Builders;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4bigData.Entities.ModelConfigurations
{
    public class NutritionalValuesConfiguration : IEntityTypeConfiguration<NutritionalValues>
    {
        public void Configure(EntityTypeBuilder<NutritionalValues> builder)
        {
            builder.HasKey(n => n.ProductId);

            builder.HasOne(n => n.Product)
                .WithOne(p => p.NutritionalValues);

            builder.Property(x => x.Energy)
                .IsRequired();

            builder.Property(x => x.FatTotal)
                .IsRequired();

            builder.Property(x => x.SaturatedFat)
                .IsRequired(); 
            
            builder.Property(x => x.Carbohydrate)
                .IsRequired();
            
            builder.Property(x => x.Sugars)
                .IsRequired();
            
            builder.Property(x => x.Fibre)
                .IsRequired();
            
            builder.Property(x => x.Protein)
                .IsRequired();
            
            builder.Property(x => x.Salt)
                .IsRequired();
        }
    }
}
