<?php

namespace App\Providers;

use \App\Billing\Stripe; // srh
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


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
        Schema::defaultStringLength(191);

        //\View:: -shiva-20170608
        view()->composer('layouts.blogsidebar', function($view) {
            $view->with('archives', \App\Post::archives());
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /** shiva-20170609
            \App::singleton() or $this->app->singleton()
            '\App\Billing\Stripe' or Stripe::class
        */ 
        \App::singleton('\App\Billing\Stripe', function() {
            return new Stripe(config('services.stripe.secret'));
        });


    }
}
