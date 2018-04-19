<?php

namespace Szhorvath\GetAddress;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Spatie\Fractal\Fractal
 */
class GetAddressFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'getaddress';
    }
}
