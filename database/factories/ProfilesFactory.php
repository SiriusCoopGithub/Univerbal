<?php

use Faker\Generator as Faker;

$factory->define(App\Profile::class, function (Faker $faker) {
    return [
      'user_type' => $faker->randomElement(['admin', 'interprete', 'commanditaire']),
      'last_name' => $faker->lastName(),
      'first_name' => $faker->firstName(),
      'organisation_abbr' => $faker->tld(),
      'gsm' => $faker->PhoneNumber(),
      'telephone' => $faker->PhoneNumber(),
      'email' => $faker->unique()->safeEmail,
      'titre' => $faker->randomElement(['Dr.', 'Assistant Social', 'Pr.', 'Medecin Croix Rouge', 'Travailleur Social', 'Mr.']),
      'genre' => $faker->randomElement(['f', 'h']),
    ];
});
