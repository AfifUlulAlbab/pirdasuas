<?php

namespace App\Providers;

use App\Console\Commands\PintuHandler;
use App\Http\Controllers\pintu_controller;
use Illuminate\Support\ServiceProvider;

class PintuProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        
    }
}
