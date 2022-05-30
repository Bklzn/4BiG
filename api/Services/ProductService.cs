using _4bigData.Entities;
using _4bigData.Models;
using AutoMapper;
using Microsoft.EntityFrameworkCore;
using Microsoft.Extensions.Configuration;
using Npgsql;
using NpgsqlTypes;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Threading.Tasks;

namespace _4big.Services
{
    public interface IProductService
    {
        long Create(SaveProductDto dto);
        IEnumerable<ProductDto> GetByCategory(string category);
        Product Update(long id, SaveProductDto dto);
        bool Delete(long id);
        public bool AddProperty(long productId, long propertyId);
        public bool DeleteProperty(long productId, long propertyId);
    }
    public class ProductService : IProductService
    {
        
        private readonly CookieDbContext _dbContext;
        private readonly IMapper _mapper;

        public ProductService(CookieDbContext dbContext, IMapper mapper)
        {
            _dbContext = dbContext;
            _mapper = mapper;
        }

        public long Create(SaveProductDto dto)
        {
            var product = _mapper.Map<Product>(dto);
            _dbContext.Products.Add(product);
            _dbContext.SaveChanges();

            return product.Id;
        }

        public IEnumerable<ProductDto> GetByCategory(string category)
        {
            var products = _dbContext
                .Products
                .Include(p => p.NutritionalValues)
                .Include("ProductProperties.Property")
                .Where(p => p.ProductCategory == Enum.Parse<ProductCategory>(category))
                .ToList();

            if (products is null) return null;

            var productsDtos = _mapper.Map<List<ProductDto>>(products);

            return productsDtos;
        }

        public Product Update(long id, SaveProductDto dto)
        {
            var product = _dbContext
                .Products
                .Include(p => p.NutritionalValues)
                .FirstOrDefault(p => p.Id == id);

            if (product == null) return null;

            product.Name = dto.Name;
            product.Weight = dto.Weight;
            product.Category = dto.Category;
            product.Subname = dto.Subname;
            product.Description = dto.Description;
            product.Ingredients = dto.Ingredients;
            product.Price = dto.Price;
            product.SVGModelPath = dto.SVGModelPath;
            product.ThreeDModelPath = dto.ThreeDModelPath;

            product.NutritionalValues.Energy = dto.NutritionalValues.Energy;
            product.NutritionalValues.FatTotal = dto.NutritionalValues.FatTotal;
            product.NutritionalValues.SaturatedFat = dto.NutritionalValues.SaturatedFat;
            product.NutritionalValues.Carbohydrate = dto.NutritionalValues.Carbohydrate;
            product.NutritionalValues.Sugars = dto.NutritionalValues.Sugars;
            product.NutritionalValues.Fibre = dto.NutritionalValues.Fibre;
            product.NutritionalValues.Protein = dto.NutritionalValues.Protein;
            product.NutritionalValues.Salt = dto.NutritionalValues.Salt;

            _dbContext.SaveChanges();

            return product;
        }

        public bool Delete(long id)
        {
            var product = _dbContext
                .Products
                .FirstOrDefault(p => p.Id == id);

            if (product is null) return false;

            _dbContext.Products.Remove(product);
            _dbContext.SaveChanges();

            return true;
        }

        public bool AddProperty(long productId, long propertyId)
        {
            var product = _dbContext
                .Products
                .FirstOrDefault(p => p.Id == productId);

            var property = _dbContext
                .Properties
                .FirstOrDefault(p => p.PropertyId == propertyId);

            var productProperty = _dbContext
                .ProductProperties
                .FirstOrDefault(pp => (pp.ProductId == productId && pp.PropertyId == propertyId));

            if (product is null || property is null || productProperty is not null) return false;

            _dbContext.ProductProperties.Add(new ProductProperty()
            {
                ProductId = productId,
                PropertyId = propertyId
            });
            _dbContext.SaveChanges();

            return true;
        }

        public bool DeleteProperty(long productId, long propertyId)
        {
            var productProperty = _dbContext
                .ProductProperties
                .FirstOrDefault(pp => (pp.ProductId == productId && pp.PropertyId == propertyId));

            if (productProperty is null) return false;

            _dbContext.ProductProperties.Remove(productProperty);
            _dbContext.SaveChanges();

            return true;
        }
    }
}
