<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Cashier\Cashier;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Braintree_Configuration::environment(config('services.braintree.environment'));
        \Braintree_Configuration::merchantId(config('services.braintree.merchant_id'));
        \Braintree_Configuration::publicKey(config('services.braintree.public_key'));
        \Braintree_Configuration::privateKey(config('services.braintree.private_key'));

        //Set currency for Laravel Cashier
        Cashier::useCurrency('eur', '€');

        //Add newly created user to team
//        User::created( function($user) {
//            $team = new Team();
//            $team->owner_id = Auth::id();
//            $team->name = 'main';
//            $team->save();
//
//            $user = User::where('id', '=', Auth::id())->first();
//            $user->attachTeam($team, true);
//        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }
}
