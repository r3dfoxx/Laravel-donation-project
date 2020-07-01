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


    $factory->define(App\Models\User::class ,  function (Faker $faker) {
    return [
        'Name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'Amount' =>$faker->randomFloat('12','2'),
        'Message' => $faker->sentence('5'),
        'Date' =>$faker->date('Y-m-d', 'now'),
    ];
});

