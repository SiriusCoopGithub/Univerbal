<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // Disabled all mass assignements protection
        App\User::unguard();
        App\Organisation::unguard();
        App\Profile::unguard();
        App\Adresse::unguard();

        $this->call(LaratrustSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(OrganisationsTableSeeder::class);
        $this->call(AdressesTableSeeder::class);
        // $this->call(AdressesTableSeeder::class);

        // Disabled all mass assignements protection
        App\User::reguard();
        App\Organisation::reguard();
        App\Profile::reguard();
        App\Adresse::reguard();
    }
}
