using System;

namespace _4big.Exceptions
{
    public class UnauthorizedException : Exception
    {
        public UnauthorizedException(string msg) : base(msg)
        {

        }
    }
}
