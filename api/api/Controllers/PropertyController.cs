using _4big.Services;
using _4bigData.Entities;
using _4bigData.Models;
using Microsoft.AspNetCore.Authorization;
using Microsoft.AspNetCore.Mvc;

namespace _4big.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class PropertyController : ControllerBase
    {
        private readonly IPropertyService _propertyService;
        public PropertyController(IPropertyService propertyService)
        {
            _propertyService = propertyService;
        }

        [HttpPost]
        [Authorize(Roles = "administrator")]
        public ActionResult AddProduct([FromBody] SavePropertyDto dto)
        {
            long id = _propertyService.Create(dto);

            return Created($"/api/product/{id}", null);
        }

        [HttpGet]
        [Authorize(Roles = "administrator")]
        public ActionResult GetAll()
        {
            var properties = _propertyService.GetAll();

            return Ok(properties);
        }

        [HttpPut("{id}")]
        [Authorize(Roles = "administrator")]
        public ActionResult<Property> UpdateProduct([FromRoute] long id, [FromBody] SavePropertyDto dto)
        {
            var updatedProperty = _propertyService.Update(id, dto);

            if (updatedProperty == null) return NotFound();
            return Ok(updatedProperty);
        }

        [HttpDelete("{id}")]
        [Authorize(Roles = "administrator")]
        public ActionResult DeleteProduct([FromRoute] long id)
        {
            bool isDeleted = _propertyService.Delete(id);

            if (!isDeleted) return NotFound();

            return NoContent();
        }
    }
}
