<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LangueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('langues')->delete();
      $json = File::get("database/data/langues.json");
      $data = json_decode($json);
      foreach ($data as $obj) {
        App\Langue::create(array(
          'abbr' => $obj->abbr,
          'name' => $obj->name,
        ));
      }
    }
}
