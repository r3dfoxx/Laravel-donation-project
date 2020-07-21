<?php

use Faker\Generator as Faker;
use App\Models\User;


/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

    $factory->define(App\Models\User::class, function (Faker $faker) {
        return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'amount' => $faker->randomFloat('4', '0', '10'),
        'message' => $faker->sentence('5'),
        'date' => $faker->dateTimeBetween('-6 month', 'now'),
       ];
});

