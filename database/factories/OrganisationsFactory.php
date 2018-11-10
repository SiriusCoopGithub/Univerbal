<?php

use Faker\Generator as Faker;

$factory->define(App\Organisation::class, function (Faker $faker) {
    return [
      'name' => $faker->unique()->company(),
      'contact_id' => App\User::all()->unique()->id,
    ];
});
