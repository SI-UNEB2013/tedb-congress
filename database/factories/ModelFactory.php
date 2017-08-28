<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\Participant::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'mail' => $faker->email,
        'adress' => $faker->address,
        'phone' => $faker->phoneNumber,
        'birthdate' => $faker->date($format = 'Y-m-d', $max = '-16 years'),
        'brandCard' => $faker->creditCardType,
        'workplace' => $faker->company,
    ];
});
