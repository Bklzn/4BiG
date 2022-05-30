namespace _4bigData.Models
{
    public class RegisterUserDto
    {
        public string Email { get; set; }
        public string Password { get; set; }
        public string PasswordConfirmed { get; set; }
        public string Nickname { get; set; }
        public string Permission { get; set; } = "client";
    }
}
