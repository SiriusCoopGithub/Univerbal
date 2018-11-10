<?php

use Faker\Generator as Faker;

$factory->define(App\Profile::class, function (Faker $faker) {
    return [
      'user_type' => $faker->randomElement(['admin', 'interprete', 'commanditaire']),
      'last_name' => $faker->lastName(),
      'first_name' => $faker->firstName(),
      'organisation_abbr' => $faker->tld(),
      'gsm' => $faker->e164PhoneNumber(),
      'telephone' => $faker->e164PhoneNumber(),
      'email' => $faker->unique()->safeEmail,
      // 'titre' => $faker->title($gender = null|'male'|'female'),
      'genre' => $faker->randomElement(['f', 'h']),
    ];
});
