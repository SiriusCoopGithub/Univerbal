<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //   factory(App\User::class, 10)->create()->each(function($u) {
    //     $u->profilable()->save(factory(App\Profile::class)->make());
    //   });
    // }
    public function run()
    {
      DB::table('users')->delete();
      $json = File::get("database/data/users.json");
      $data = json_decode($json);
      foreach ($data as $obj) {
        App\User::create(array(
          'active' => $obj->active,
          'email' => $obj->email,
          'name' => $obj->name,
          'password' => $obj->password,
        ));
      }
    }
}
