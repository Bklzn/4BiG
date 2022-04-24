using System.ComponentModel.DataAnnotations;

namespace _4big.Models
{
    public class RegisterUserDto
    {
        [Required]
        public string Email { get; set; }
        [Required]
        public string Password { get; set; }
        [Required]
        public string PasswordConfirmed { get; set; }
        [Required]
        public string Nickname { get; set; }
        public string Permission { get; set; } = "client";
    }
}
