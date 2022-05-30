using _4bigData.Entities.ModelConfigurations;
using Microsoft.EntityFrameworkCore;
using Npgsql;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4bigData.Entities
{
    public class CookieDbContext : DbContext
    {
        public DbSet<Product> Products { get; set; }
        public DbSet<Property> Properties { get; set; }
        public DbSet<ProductProperty> ProductProperties { get; set; }
        public DbSet<User> Users { get; set; }
        public DbSet<Order> Orders { get; set; }
        public DbSet<Cookie> Cookies { get; set; }
        public DbSet<CookieProduct> CookieProducts { get; set; }
        public DbSet<CookieOrder> CookieOrders { get; set; }

        public CookieDbContext(DbContextOptions<CookieDbContext> options)
            : base(options)
        {

        }

        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            modelBuilder.ApplyConfiguration(new ProductConfiguration());
            modelBuilder.ApplyConfiguration(new NutritionalValuesConfiguration());
            modelBuilder.ApplyConfiguration(new PropertyConfiguration());
            modelBuilder.ApplyConfiguration(new ProductPropertyConfiguration());
            modelBuilder.ApplyConfiguration(new UserConfiguration());
            modelBuilder.ApplyConfiguration(new OrderConfiguration());
            modelBuilder.ApplyConfiguration(new CookieConfiguration());
            modelBuilder.ApplyConfiguration(new CookieProductConfiguration());
            modelBuilder.ApplyConfiguration(new CookieOrderConfiguration());
        }
    }
}
