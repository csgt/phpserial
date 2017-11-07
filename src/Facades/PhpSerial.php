<?php

namespace Csgt\PhpSerial\Facades;

use Illuminate\Support\Facades\Facade;

class PhpSerial extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'phpserial';
    }
}
