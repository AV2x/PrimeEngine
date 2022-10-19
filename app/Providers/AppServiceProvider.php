<?php

namespace App\Providers;

use App\Http\Controllers\ServiceController;
use App\Services\Storage\ImageInterface;
use App\Services\Storage\ServiceStorage;
use App\Services\Storage\UserStorage;
use App\Services\Telegram;
use App\Services\TelegramService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
