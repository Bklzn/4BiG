using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Metadata.Builders;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4bigData.Entities.ModelConfigurations
{
    public class CookieConfiguration : IEntityTypeConfiguration<Cookie>
    {
        public void Configure(EntityTypeBuilder<Cookie> builder)
        {
            builder.Property(c => c.Name);

            builder.Property(c => c.Description);
        }
    }
}
