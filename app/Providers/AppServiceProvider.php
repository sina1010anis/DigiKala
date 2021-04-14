<?php

namespace App\Providers;

use App\Mix\mix;
use App\Payment\zarinPal;
use App\View\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Str::mixin(new mix());
        resolve(View::class)->handle();
        $this->app->bind(zarinPal::class,function (){
            return new zarinPal('1221211212');
        });
    }
}
