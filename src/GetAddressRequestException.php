<?php

namespace Szhorvath\GetAddress;

use Exception;

class GetAddressRequestException extends Exception
{
    protected $message = 'There has been an error retrieving the address.';
}
