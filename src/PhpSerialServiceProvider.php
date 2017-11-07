<?php

namespace Csgt\PhpSerial;

use Illuminate\Support\ServiceProvider;

class PhpSerialServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->app->singleton('phpserial', function ($app) {
            return new PhpSerial;
        });
    }

    public function provides()
    {
        return ['phpserial'];
    }
}
