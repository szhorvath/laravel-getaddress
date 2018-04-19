<?php

namespace Szhorvath\GetAddress;

use Exception;

class GetAddressAuthenticationFailedException extends Exception
{
    protected $message = 'Authentication failed. Please check your API key';
}
