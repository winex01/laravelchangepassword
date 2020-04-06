<?php

namespace Winnie\LaravelChangePassword\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelChangePassword extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravelchangepassword';
    }
}
