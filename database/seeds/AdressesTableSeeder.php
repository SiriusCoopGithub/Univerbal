<?php

use Illuminate\Database\Seeder;

class AdressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('adresses')->delete();
      $json = File::get("database/data/adresses.json");
      $data = json_decode($json);
      foreach ($data as $obj) {
        App\Langue::create(array(
          'id' => $obj->id,
          'city_name' => $obj->city_name,
          'country' => $obj->country,
          'postal_code' => $obj->postal_code,
          'profile_id' => $obj->profile_id,
          'street_name' => $obj->street_name,
          'street_num' => $obj->street_num,
        ));
      }
    }
}
