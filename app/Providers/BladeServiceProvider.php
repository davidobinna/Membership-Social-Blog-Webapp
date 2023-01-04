<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
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
         Blade::if('subscribed',function($user){
            return $user->subscribed('monthly') || $user->subscribed('yearly');
         });

         Blade::if('notsubscribed', function($user){
            return !($user->subscribed('monthly') || $user->subscribed('yearly'));
         });
         
         Blade::if('subscribedToProduct', function($user, $id, $name){
            return $user->subscribedToProduct($id,$name);
         });
    }
}
