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
    public class CookieController : ControllerBase
    {
        private readonly ICookieService _cookieService;

        public CookieController(ICookieService cookieService)
        {
            _cookieService = cookieService;
        }

        [HttpPost]
        public ActionResult Create([FromBody] SaveCookieDto dto)
        {
            long id;
            if (dto.Favorite && HttpContext.User.Claims.Any())
            {
                long loggedUserId = long.Parse(HttpContext
                    .User.Claims
                    .FirstOrDefault(c => c.Type == ClaimTypes.NameIdentifier)
                    .Value);

                id = _cookieService.CreateCookie(dto, loggedUserId);
            }
            else
            {
                id = _cookieService.CreateCookie(dto, null);
            }

            return Created($"/api/cookie/{id}", null);
        }

        [HttpGet("{id}")]
        [Authorize]
        public ActionResult GetByOrderId([FromRoute] long id)
        {
            var cookies = _cookieService.GetByOrderId(id);
            return Ok(cookies);
        }

        [HttpGet("favorite/{id}")]
        [Authorize]
        public ActionResult GetByUserId([FromRoute]long id)
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

            var cookies = _cookieService.GetByUserId(id);
            return Ok(cookies);
        }

        [HttpPut("{id}")]
        [Authorize]
        public ActionResult Update([FromRoute] long id, [FromBody] SaveCookieDto dto)
        {
            long loggedUserId = long.Parse(HttpContext
                .User.Claims
                .FirstOrDefault(c => c.Type == ClaimTypes.NameIdentifier)
                .Value);

            string loggedUserRole = HttpContext
                .User.Claims
                .FirstOrDefault(c => c.Type == ClaimTypes.Role)
                .Value;

            if(dto.Favorite) 
                _cookieService.UpdateCookie(id, dto, loggedUserId, loggedUserRole);
            else 
                _cookieService.UpdateCookie(id, dto, null, null);

            return Ok();
        }

        [HttpDelete("{id}")]
        [Authorize(Roles = "administrator")]
        public ActionResult Delete([FromRoute] long id)
        {
            _cookieService.DeleteCookie(id);
            return NoContent();
        }
    }
}

