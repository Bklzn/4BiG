using _4big.Services;
using _4bigData.Entities;
using _4bigData.Models;
using Microsoft.AspNetCore.Authorization;
using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Configuration;
using Npgsql;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Security.Claims;
using System.Threading.Tasks;

namespace _4big.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class OrderController : ControllerBase
    {
        private readonly IOrderService _orderService;

        public OrderController(IOrderService orderService)
        {
            _orderService = orderService;
        }

        [HttpPost]
        public ActionResult Create([FromBody] SaveOrderDto dto)
        {
            long id;
            var claim = HttpContext.User.Claims.FirstOrDefault(c => c.Type == ClaimTypes.NameIdentifier);

            if (claim == null) id = _orderService.Create(null, dto);
            else id = _orderService.Create(long.Parse(claim.Value), dto);

            return Created($"/api/order/{id}", null);
        }

        [HttpGet]
        [Authorize(Roles = "administrator, employee")]
        public ActionResult GetAll()
        {
            var orders = _orderService.GetAll();
            return Ok(orders);
        }

        [HttpGet("{id}")]
        [Authorize]
        public ActionResult GetByUserId([FromRoute] long id)
        {
            long loggedUserId = long.Parse(HttpContext
                .User.Claims
                .FirstOrDefault(c => c.Type == ClaimTypes.NameIdentifier)
                .Value);

            string loggedUserRole = HttpContext
                .User.Claims
                .FirstOrDefault(c => c.Type == ClaimTypes.Role)
                .Value;

            if (loggedUserId != id && loggedUserRole == "client")
                return Unauthorized();

            var orders = _orderService.GetByUserId(id);
            return Ok(orders);
        }

        [HttpPut("{id}")]
        [Authorize]
        public ActionResult<Order> UpdateUserData([FromRoute]long id, [FromBody]SaveOrderDto order)
        {
            long loggedUserId = long.Parse(HttpContext
                .User.Claims
                .FirstOrDefault(c => c.Type == ClaimTypes.NameIdentifier)
                .Value);

            string loggedUserRole = HttpContext
                .User.Claims
                .FirstOrDefault(c => c.Type == ClaimTypes.Role)
                .Value;

            if (loggedUserId != id && loggedUserRole == "client")
                return Unauthorized();

            _orderService.UpdateClientData(id, order);
            return Ok();
        }

        [HttpPut("delivery/{id}")]
        [Authorize(Roles = "administrator, employee")]
        public ActionResult<Order> UpdateDeliveryDetails([FromRoute] long id, [FromBody] UpdateOrderDeliveryDetailsDto order)
        {
            _orderService.UpdateDeliveryDetails(id, order);
            return Ok();
        }

        [HttpDelete("{id}")]
        [Authorize(Roles = "administrator")]
        public ActionResult Delete([FromRoute] int id)
        {
            _orderService.Delete(id);
            return NoContent();
        }
    }
}
