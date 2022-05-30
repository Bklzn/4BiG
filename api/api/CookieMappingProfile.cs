using _4bigData.Entities;
using _4bigData.Models;
using AutoMapper;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4big
{
    public class _4bigMappingProfile : Profile
    {
        public _4bigMappingProfile()
        {
            CreateMap<NutritionalValues, NutritionalValuesDto>();
            CreateMap<NutritionalValuesDto, NutritionalValues>();

            CreateMap<Property, SavePropertyDto>();
            CreateMap<SavePropertyDto, Property>();

            CreateMap<Product, ProductDto>()
                .ForMember(m => m.Properties, c => c.MapFrom(s => s.ProductProperties.Select(x => x.Property).ToList()));

            CreateMap<SaveProductDto, Product>();

            CreateMap<User, UserDto>();
            CreateMap<UserDto, User>();

            CreateMap<Order, OrderDto>()
                .ForMember(m => m.Cookies, c => c.MapFrom(s => s.CookieOrders.Select(x => x.Cookie).ToList()));
            CreateMap<OrderDto, Order>();
            CreateMap<SaveOrderDto, Order>();

            CreateMap<SaveCookieDto, Cookie>();
            CreateMap<Cookie, CookieDto>()
                .ForMember(m => m.Products, c => c.MapFrom(s => s.CookieProducts.Select(x => x.Product).ToList()));
        }
    }
}
