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
          'abbr_langue' => $obj->abbr_langue,
          'langue_name' => $obj->langue_name,
        ));
      }
    }
}
  // foreach ($data as $obj) {
      //   App\Langue::create(array(
      //     $obj['abbr_langue'] = $obj->abbr,
      //     $obj['langue_name'] = $obj->langue_name,
      //     // 'abbr_langue' => $obj->abbr,
      //     // 'langue_name' => $obj->langue_name,
      //   ));
