<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('profiles')->delete();
      $json = File::get("database/data/profiles.json");
      $data = json_decode($json);
      foreach ($data as $obj) {
        App\Langue::create(array(
          'id' => $obj->id,
          'email' => $obj->email,
          'first_name' => $obj->first_name,
          'genre' => $obj->genre,
          'gsm' => $obj->gsm,
          'last_name' => $obj->last_name,
          'profilable_id' => $obj->profilable_id,
          'profilable_type' => $obj->profilable_type,
          'telephone' => $obj->telephone,
          'titre' => $obj->titre,
        ));
      }
    }
}
