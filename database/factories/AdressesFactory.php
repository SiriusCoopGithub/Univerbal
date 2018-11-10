<?php

use Faker\Generator as Faker;

$factory->define(App\Adresse::class, function (Faker $faker) {
    return [
      'profile_id' => App\Profile::all()->random()->id,
      'street_num' => $faker->buildingNumber(),
      'box_num' => $faker->buildingNumber(),
      'street_name' => $faker->streetName(),
      'postal_code' => $faker->postcode(),
      'city_name' => $faker->city(),
      'country' => $faker->randomElement(['Belgique', 'Belgique']),
    ];
});
