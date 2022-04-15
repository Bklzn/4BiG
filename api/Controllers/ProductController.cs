using _4big.Models;
using _4big.Services;
using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Configuration;
using Npgsql;
using NpgsqlTypes;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Threading.Tasks;

namespace _4big.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class ProductController : ControllerBase
    {
        private readonly IProductService _service;

        public ProductController(IProductService service)
        {
            _service = service;
        }

        [HttpGet]
        public ActionResult<IEnumerable<Product>> Get([FromBody]string category)
        {
            IEnumerable<Product> productsList = _service.GetByCategory(category);

            if (productsList == null) return BadRequest();
            return Ok(productsList);
        }

        [HttpPost]
        public ActionResult AddProduct([FromBody]ProductDto dto)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest();
            }

            int id = _service.Create(dto);

            if (id == -1) return BadRequest();
            return Created($"/api/product/{id}", null);
        }

        [HttpDelete("{id}")]
        public ActionResult DeleteProduct([FromRoute]int id)
        {
            _service.Delete(id);

            return NoContent();
        }

        [HttpPut("{id}")]
        public ActionResult<Product> UpdateProduct([FromRoute]int id, [FromBody]ProductDto dto)
        {
            Product updatedProduct = _service.Update(id, dto);

            if (updatedProduct == null) return BadRequest();
            return Ok(updatedProduct);
        }
    }
}
