using _4big.Exceptions;
using _4bigData.Entities;
using _4bigData.Models;
using AutoMapper;
using Microsoft.AspNetCore.Http;
using Microsoft.EntityFrameworkCore;
using System.Collections.Generic;
using System.Linq;
using System.Security.Claims;

namespace _4big.Services
{
    public interface ICookieService
    {
        public long CreateCookie(SaveCookieDto dto, long? userId);
        public CookieDto GetById(long id);
        public List<CookieDto> GetByOrderId(long id);
        public List<CookieDto> GetByUserId(long id);
        public void UpdateCookie(long cookieId, SaveCookieDto dto, long? userId, string userRole);
        public void DeleteCookie(long id);
    }
    public class CookieService : ICookieService
    {
        private readonly CookieDbContext _dbContext;
        private readonly IMapper _mapper;
        public CookieService(CookieDbContext dbContext, IMapper mapper)
        {
            _dbContext = dbContext;
            _mapper = mapper;
        }
        public long CreateCookie(SaveCookieDto dto, long? userId)
        {
            var cookie = _mapper.Map<Cookie>(dto);
            if(userId is not null) cookie.UserId = userId;

            _dbContext.Cookies.Add(cookie);
            _dbContext.SaveChanges();

            var cookieId = cookie.CookieId;
            var productsIds = dto.ProductsIds;
            List<CookieProduct> cookieProducts = new();

            productsIds.ForEach(pId => cookieProducts.Add(new CookieProduct()
            {
                CookieId = cookieId,
                ProductId = pId
            }));

            _dbContext.CookieProducts.AddRange(cookieProducts);
            _dbContext.SaveChanges();

            return cookieId;
        }

        public CookieDto GetById(long id)
        {
            var cookie = _dbContext
                .Cookies
                .Include("CookieProducts.Product")
                .Include("CookieProducts.Product.NutritionalValues")
                .Include("CookieProducts.Product.ProductProperties.Property")
                .FirstOrDefault(c => c.CookieId == id);

            if (cookie is null) throw new NotFoundException("Order not found!");

            var dto = _mapper.Map<CookieDto>(cookie);

            return dto;
        }

        public List<CookieDto> GetByOrderId(long id)
        {
            var cookies = _dbContext
                .Cookies
                .Include(c => c.CookieOrders)
                .Include("CookieProducts.Product")
                .Include("CookieProducts.Product.NutritionalValues")
                .Include("CookieProducts.Product.ProductProperties.Property")
                .ToList();

            cookies.RemoveAll(c => {
                if(c.CookieOrders is null) return true;

                foreach(CookieOrder co in c.CookieOrders)
                {
                    if (co.OrderId == id) return false;
                }

                return true;
            });

            var cookiesDtos = _mapper.Map<List<CookieDto>>(cookies);

            return cookiesDtos;
        }
        public List<CookieDto> GetByUserId(long id)
        {
            var cookies = _dbContext
                .Cookies
                .Where(c => c.UserId == id)
                .Include(c => c.User)
                .Include("CookieProducts.Product")
                .Include("CookieProducts.Product.NutritionalValues")
                .Include("CookieProducts.Product.ProductProperties.Property")
                .ToList();

            var cookiesDtos = _mapper.Map<List<CookieDto>>(cookies);

            return cookiesDtos;
        }

        public void UpdateCookie(long cookieId, SaveCookieDto dto, long? userId, string userRole)
        { 
            var cookie = _dbContext
                .Cookies
                .FirstOrDefault(c => c.CookieId == cookieId);

            if (cookie is null) throw new NotFoundException("Order not found!");

            if (cookie.UserId is null && userRole == "client") throw new UnauthorizedException("Cookie cannot be changed by client");
            
            if(userId is null) cookie.UserId = null;
            else if (userRole == "client" && cookie.UserId != userId) 
                throw new UnauthorizedException("Cookie is not favorite for this client");

            cookie.Name = dto.Name;
            cookie.Description = dto.Description;

            /* Update tabeli Cookie_product */
            var oldCookieProducts = _dbContext
                .CookieProducts
                .Where(co => co.CookieId == cookieId)
                .ToList();

            var productsIds = dto.ProductsIds;
            List<CookieProduct> newCookieProducts = new();

            productsIds.ForEach(pId => newCookieProducts.Add(new CookieProduct()
            {
                CookieId = cookieId,
                ProductId = pId
            }));

            _dbContext.CookieProducts.RemoveRange(oldCookieProducts);
            _dbContext.CookieProducts.AddRange(newCookieProducts);
            _dbContext.SaveChanges();
        }
        public void DeleteCookie(long id)
        {
            var cookie = _dbContext
                .Cookies
                .FirstOrDefault(c => c.CookieId == id);

            var cookieProducts = _dbContext
                .CookieProducts
                .Where(c => c.CookieId == id)
                .ToList();

            _dbContext.CookieProducts.RemoveRange(cookieProducts);
            _dbContext.Cookies.Remove(cookie);
            _dbContext.SaveChanges();
        }
    }
}
