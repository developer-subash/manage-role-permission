<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RoleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
         $models = array(
            'Role'
        );
    }

    /**
     * Register services.
     *
     * @return void
     */
   public function register()
    {
        $this->app->bind(
            'App\Interfaces\\RoleInterface',
            'App\Repositories\\RoleRepository'
        );
    }
}
