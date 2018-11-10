<?php

use Illuminate\Database\Seeder;

class OrganisationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Organisation::class, 10)->create()->each(function($u) {
        $u->profile()->save(factory(App\Profile::class)->make());
      });
    }
}
