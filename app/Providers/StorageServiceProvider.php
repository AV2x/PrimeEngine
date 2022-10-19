<?php

namespace App\Providers;

use App\Http\Controllers\ServiceController;
use App\Services\Storage\Image;
use App\Services\Storage\ServiceStorage;
use Illuminate\Support\ServiceProvider;

class StorageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->when(ServiceController::class)
            ->needs(Image::class)
            ->give(function (){
                return new ServiceStorage();
            });
    }
}
