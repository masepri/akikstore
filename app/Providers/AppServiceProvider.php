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
       // \View::share(['app_name'=>'Quote App v2.0'], ['quote.motivasi', 'quote.inspirasi']);
        \View::composer(['quote.motivasi', 'quote.inspirasi'], 'App\Http\ViewComposers\AppNameComposer');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Illuminate\Contracts\Auth\Registrar',
            'App\Services\Registrar'
            );

        /*$this->app->bind(
            'App\PaymentMethod',
            'App\KartuKredit'
            );*/
        
        //$cc = new \App\KartuKredit(2000, '4563474822737');
        //$this->app->instance('App\PaymentMethod', $cc);
        
        $this->app->when('App\Customer')
                  ->needs('App\PaymentMethod')
                  ->give('App\RekeningPonsel');

        $this->app->when('App\Seller')
                  ->needs('App\PaymentMethod')
                  ->give('App\KartuKredit');
        $this->app->singleton('App\KartuKredit', function($app)
        {
            return new \App\KartuKredit;
        });
    }
}
