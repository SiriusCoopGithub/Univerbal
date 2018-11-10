<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('countries')->delete();
      $json = File::get("database/data/country.json");
      $data = json_decode($json);
      foreach ($data as $obj) {
        App\Country::create(array(
          'abbr_country' => $obj->abbr_country,
          'country_name' => $obj->country_name,
        ));
      }
    }
}
