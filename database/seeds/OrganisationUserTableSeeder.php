<?php

use Illuminate\Database\Seeder;

class OrganisationUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      // // Get all the User attaching up to 1 organisations to each user
      // $organisations = App\Organisation::all();

      // // Populate the pivot table
      // App\User::all()->each(function ($user) use ($organisations) {
      //   $user->organisation()->attach(
      //       $organisations->random(rand(1, 1))->pluck('id')->toArray()
      //   );
      // });

    }
}
