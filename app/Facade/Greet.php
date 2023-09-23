<?php

namespace App\Facade;

use Illuminate\Support\Facades\Facade;

class Greet extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'greet';
    }
}
