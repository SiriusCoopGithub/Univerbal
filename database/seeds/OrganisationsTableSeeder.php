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
      DB::table('organisations')->delete();
      $json = File::get("database/data/organisations.json");
      $data = json_decode($json);
      foreach ($data as $obj) {
        App\Organisation::create(array(
          'contact_id' => $obj->contact_id,
          'name' => $obj->name,
        ));
      }
    }
}
