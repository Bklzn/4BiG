using _4big.Services;
using _4bigData.Entities;
using _4bigData.Models;
using AutoMapper;
using Microsoft.AspNetCore.Authorization;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
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
        private readonly IProductService _productService;

        public ProductController(IProductService productService)
        {
            _productService = productService;
        }

        [HttpPost]
        [Authorize(Roles = "administrator")]
        public ActionResult AddProduct([FromBody] SaveProductDto dto)
        {
            long id = _productService.Create(dto);

            return Created($"/api/product/{id}", null);
        }

        [HttpGet]
        public ActionResult<IEnumerable<ProductDto>> Get([FromBody]string category)
        {
            var productsDtos = _productService.GetByCategory(category);

            if (productsDtos is null) return NotFound();
            return Ok(productsDtos);
        }

        [HttpPut("{id}")]
        [Authorize(Roles = "administrator")]
        public ActionResult<Product> UpdateProduct([FromRoute] long id, [FromBody] SaveProductDto dto)
        {
            var updatedProduct = _productService.Update(id, dto);

            if (updatedProduct == null) return NotFound();
            return Ok(updatedProduct);
        }

        [HttpDelete("{id}")]
        [Authorize(Roles = "administrator")]
        public ActionResult DeleteProduct([FromRoute]long id)
        {
            bool isDeleted = _productService.Delete(id);

            if(!isDeleted) return NotFound();

            return NoContent();
        }

        [HttpPost("{prodId}/{propId}")]
        [Authorize(Roles = "administrator")]
        public ActionResult AddPropertyToProduct([FromRoute] long prodId, [FromRoute] long propId)
        {
            bool isAdded = _productService.AddProperty(prodId, propId);

            if (!isAdded) return BadRequest();

            return Ok();
        }

        [HttpDelete("{prodId}/{propId}")]
        [Authorize(Roles = "administrator")]
        public ActionResult DeletePropertyToProduct([FromRoute] long prodId, [FromRoute] long propId)
        {
            bool isDeleted = _productService.DeleteProperty(prodId, propId);

            if (!isDeleted) return NotFound();

            return Ok();
        }
    }
}
