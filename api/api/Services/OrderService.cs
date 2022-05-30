using _4big.Exceptions;
using _4bigData.Entities;
using _4bigData.Models;
using AutoMapper;
using Microsoft.AspNetCore.Identity;
using Microsoft.EntityFrameworkCore;
using Microsoft.Extensions.Configuration;
using Microsoft.IdentityModel.Tokens;
using Npgsql;
using NpgsqlTypes;
using System;
using System.Collections.Generic;
using System.Data;
using System.IdentityModel.Tokens.Jwt;
using System.Linq;
using System.Security.Claims;
using System.Text;

namespace _4big.Services
{
    public interface IOrderService
    {
        long Create(long? userId, SaveOrderDto dto);
        OrderDto GetById(long id);
        List<OrderDto> GetByUserId(long id);
        List<OrderDto> GetAll();
        void UpdateClientData(long id, SaveOrderDto dto);
        void UpdateDeliveryDetails(long id, UpdateOrderDeliveryDetailsDto dto);
        void Delete(long id);
    }
    public class OrderService : IOrderService
    {
        private readonly CookieDbContext _dbContext;
        private readonly IMapper _mapper;

        public OrderService(CookieDbContext dbContext, IMapper mapper)
        {
            _dbContext = dbContext;
            _mapper = mapper;
        }

        public long Create(long? userId, SaveOrderDto dto)
        {
            var order = _mapper.Map<Order>(dto);

            if(userId is not null) order.UserId = (long)userId;

            _dbContext.Orders.Add(order);
            _dbContext.SaveChanges();

            var orderId = order.OrderId;
            var cookiesIds = dto.CookiesIds;
            List<CookieOrder> cookieOrders = new();

            cookiesIds.ForEach(cId => cookieOrders.Add(new CookieOrder()
            {
                CookieId = cId,
                OrderId = orderId
            }));

            _dbContext.CookieOrders.AddRange(cookieOrders);
            _dbContext.SaveChanges();

            return order.OrderId;
        }


        public OrderDto GetById(long id)
        {
            var order = _dbContext
                .Orders
                .FirstOrDefault(o => o.OrderId == id);

            if (order is null) throw new NotFoundException("Order not found!");

            var dto = _mapper.Map<OrderDto>(order);

            return dto;
        }

        public List<OrderDto> GetByUserId(long id)
        {
            var orders = _dbContext
                .Orders
                .Where(o => o.UserId == id)
                .ToList();

            var dtos = _mapper.Map<List<OrderDto>>(orders);

            return dtos;
        }

        public List<OrderDto> GetAll()
        {
            var orders = _dbContext
                .Orders
                .Include(o => o.User)
                .ToList();

            var dtos = _mapper.Map<List<OrderDto>>(orders);

            return dtos;
        }

        public void UpdateClientData(long id, SaveOrderDto dto)
        {
            var order = _dbContext
                .Orders
                .FirstOrDefault(o => o.OrderId == id);

            if (order is null) throw new NotFoundException("Order not found!");

            order.Email = dto.Email;
            order.PhoneNumber = dto.PhoneNumber;
            order.FirstName = dto.FirstName;
            order.LastName = dto.LastName;
            order.StreetName = dto.StreetName;
            order.BuildingNum = dto.BuildingNum;
            order.ApartmentNum = dto.ApartmentNum;
            order.ZipCode = dto.ZipCode;
            order.City = dto.City;
            order.Nip = dto.Nip;
            order.Pickup = dto.Pickup;

            /* Update tabeli Cookie_order */
            var oldcookieOrders = _dbContext
                .CookieOrders
                .Where(co => co.OrderId == id)
                .ToList();

            var orderId = order.OrderId;
            var cookiesIds = dto.CookiesIds;
            List<CookieOrder> newcookieOrders = new();

            cookiesIds.ForEach(cId => newcookieOrders.Add(new CookieOrder()
            {
                CookieId = cId,
                OrderId = orderId
            }));

            _dbContext.CookieOrders.RemoveRange(oldcookieOrders);
            _dbContext.CookieOrders.AddRange(newcookieOrders);
            _dbContext.SaveChanges();
        }

        public void UpdateDeliveryDetails(long id, UpdateOrderDeliveryDetailsDto dto)
        {
            var order = _dbContext
                .Orders
                .FirstOrDefault(o => o.OrderId == id);

            if (order is null) throw new NotFoundException("Order not found!");

            order.PackageNum = dto.PackageNum;
            order.PackedDate = dto.PackedDate;
            order.SendDate = dto.SendDate;
            order.ReceivedDate = dto.ReceivedDate;

            _dbContext.SaveChanges();
        }

        public void Delete(long id)
        {
            var order = _dbContext
                .Orders
                .FirstOrDefault(o => o.OrderId == id);

            if (order is null) throw new NotFoundException("Order not found!");

            _dbContext.Orders.Remove(order);
            _dbContext.SaveChanges();
        }
    }
}
