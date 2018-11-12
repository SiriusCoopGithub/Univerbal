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

        /**
         * Please note that in Laravel 5.4 the default character set is changed to utf8mb4,
         * therefore if you are running MariaDB or MYSQL version lower than 5.7.7 you may get this error when trying to    * run migration files
        */
        Schema::defaultStringLength(191);
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
