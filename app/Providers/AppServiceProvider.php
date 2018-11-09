<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
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

        /**
         *  Enable foreign key support for SQLITE databases
         */
        Schema::enableForeignKeyConstraints();

        /**
         *
         */
        Relation::morphMap([
          'users' => 'App\User',
          'organisations' => 'App\Organisation',
        ]);
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
