<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('roles')->delete();
      $json = File::get("database/data/roles.json");
      $data = json_decode($json);
      foreach ($data as $obj) {
        Spatie\Permission\Models\Role::create(array(
          'guard_name' => $obj->guard_name,
          'name' => $obj->name,
        ));
    }
  }
}
