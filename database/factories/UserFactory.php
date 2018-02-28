<?php

use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'username' => $faker->unique()->userName,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'address' => $faker->streetAddress,
        'member_id' => $faker->numberBetween($min = 1, $max = 10),
        'role' => $faker->numberBetween($min = 1, $max = 4),
        'status' => $faker->numberBetween($min = 0, $max = 1),
        'password' => '$2y$10$oinDFLagsFhtE88Vehks3.LqWmcukGP0.Lq1OUIDrVsyZRydYLvIm', // secret
        'remember_token' => str_random(10),
    ];
});