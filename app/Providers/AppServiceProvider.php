<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

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
         * Morph the map relation between model and database
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
      $this->app->singleton(\Faker\Generator::class, function () {
        return \Faker\Factory::create('Fr_BE');
    });
    }
}
