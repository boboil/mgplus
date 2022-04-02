<?php

namespace App\Providers;

use App\Models\Service;
use Illuminate\Support\ServiceProvider;
use App\Http\Middleware\LocaleMiddleware;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $lang = LocaleMiddleware::getLocale();
        if (!$lang){
            $lang = 'ru';
        }
        $services = Service::all();
        view()->share('lang',$lang);
        view()->share('services',$services);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
