<?php

namespace Naoray\LaravelPackage;

use Illuminate\Support\ServiceProvider;
use Naoray\LaravelPackage\Commands\AddPackage;
use Naoray\LaravelPackage\Commands\MakePackage;

class LaravelPackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands([
            AddPackage::class,
            MakePackage::class,
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
