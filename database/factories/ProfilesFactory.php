<?php

use Faker\Generator as Faker;

$factory->define(App\Profile::class, function (Faker $faker) {

    $lastName = $faker->lastName();
    $firstName = $faker->firstName();
    $name = $lastName . ' ' . $firstName;

    return [
      'user_type' => $faker->randomElement(['admin', 'interprete', 'commanditaire']),
      'last_name' => $lastName,
      'first_name' => $firstName,
      'name' => $name,
      'organisation_abbr' => $faker->tld(),
      'gsm' => $faker->PhoneNumber(),
      'telephone' => $faker->PhoneNumber(),
      'email' => $faker->unique()->safeEmail,
      'titre' => $faker->randomElement(['Dr.', 'Assistant Social', 'Pr.', 'Medecin Croix Rouge', 'Travailleur Social', 'Mr.']),
      'genre' => $faker->randomElement(['f', 'h']),
    ];
});
