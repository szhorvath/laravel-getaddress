<?php

namespace Szhorvath\Getaddress;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Spatie\Fractal\Fractal
 */
class GetaddressFacade extends Facade
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
