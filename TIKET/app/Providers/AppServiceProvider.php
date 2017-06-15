<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Validator::extend('noHP', function($attribute, $value, $parameters, $validator) {

            if($value == '628'){
                return true;
            }
                return false;
        }, '*Isi nomor HP anda dengan format 628xxxxxx');
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
