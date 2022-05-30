using _4bigData.Entities;
using _4bigData.Models;
using AutoMapper;
using System.Collections.Generic;
using System.Linq;

namespace _4big.Services
{
    public interface IPropertyService
    {
        public long Create(SavePropertyDto dto);
        public List<Property> GetAll();
        public Property Update(long id, SavePropertyDto dto);
        public bool Delete(long id);
    }
    public class PropertyService : IPropertyService
    {
        private readonly CookieDbContext _dbContext;
        private readonly IMapper _mapper;
        public PropertyService(CookieDbContext dbContext, IMapper mapper)
        {
            _dbContext = dbContext;
            _mapper = mapper;
        }

        public long Create(SavePropertyDto dto)
        {
            var property = _mapper.Map<Property>(dto);
            _dbContext.Properties.Add(property);
            _dbContext.SaveChanges();

            return property.PropertyId;
        }

        public List<Property> GetAll()
        {
            var properties = _dbContext
                .Properties
                .ToList();

            return properties;
        }

        public Property Update(long id, SavePropertyDto dto)
        {
            var property = _dbContext
                .Properties
                .FirstOrDefault(p => p.PropertyId == id);

            if (property == null) return null;

            property.Name = dto.Name;
            property.SVGModelPath = dto.SVGModelPath;

            _dbContext.SaveChanges();

            return property;
        }

        public bool Delete(long id)
        {
            var property = _dbContext
                .Properties
                .FirstOrDefault(p => p.PropertyId == id);

            if (property is null) return false;

            _dbContext.Properties.Remove(property);
            _dbContext.SaveChanges();

            return true;
        }
    }
}
