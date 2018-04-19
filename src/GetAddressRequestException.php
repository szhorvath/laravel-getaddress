<?php

namespace Szhorvath\GetAddress;

use Exception;

class GetAddressRequestException extends Exception
{
    protected $message = 'There hase been an error retriving the address.';
}
