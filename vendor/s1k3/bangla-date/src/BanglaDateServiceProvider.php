<?php

namespace S1K3\Bangla\Date;

use Illuminate\Support\ServiceProvider;

class BanglaDateServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/bangla_date.php' => config_path('bangla_date.php'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/bangla_date.php',"bangla_date");
    }

}