<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //register the helper function files here, instead of adding in composer.json
        //glob is a function returns the file/dir on the gn path as array, if not return empty array.
        foreach (glob(app_path().'/Helpers/*.php') as $filename){
            require_once($filename);
        }
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
