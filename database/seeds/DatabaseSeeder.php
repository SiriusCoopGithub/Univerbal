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
        App\Roles::unguard();
        App\Langue::unguard();
        App\Country::unguard();

        // Import all seeders
        $this->call(UsersTableSeeder::class);
        $this->call(OrganisationsTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(AdressesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(LangueTableSeeder::class);
        $this->call(CountriesTableSeeder::class);


        // Enabled all mass assignements protection
        App\User::reguard();
        App\Organisation::reguard();
        App\Profile::reguard();
        App\Adresse::reguard();
        App\Roles::reguard();
        App\Langue::reguard();
        App\Country::reguard();
    }
}
