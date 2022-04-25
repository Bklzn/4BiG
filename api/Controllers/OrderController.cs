using _4big.Models;
using _4big.Services;
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

        [HttpGet]
        [Authorize(Roles = "employee")]
        [Authorize(Roles = "administrator")]
        public ActionResult GetAll()
        {
            return Ok(_orderService.GetAll());
        }

        [HttpPost]
        public ActionResult Create([FromBody]OrderDto dto)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest();
            }

            int id;
            var claim = HttpContext.User.Claims.FirstOrDefault(c => c.Type == ClaimTypes.NameIdentifier);

            if (claim == null) id = _orderService.Create(null, dto);
            else id = _orderService.Create(Int32.Parse(claim.Value), dto);

            if (id == -1) return BadRequest();
            return Created($"/api/order/{id}", null);
        }

        [HttpDelete("{id}")]
        [Authorize(Roles = "administrator")]
        public ActionResult Delete([FromRoute] int id)
        {
            _orderService.Delete(id);

            return NoContent();
        }

        [HttpPut("{id}")]
        [Authorize]
        public ActionResult<Order> Update([FromRoute]int id, [FromBody]Order order)
        {
            Order updatedOrder = _orderService.Update(id, order);

            if (updatedOrder == null) return BadRequest();
            return Ok(updatedOrder);
        }
    }
}
