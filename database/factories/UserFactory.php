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
        'username' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'photo' => $faker->imageUrl($width = 200, $height = 200),
        'phone' => $faker->phoneNumber,
        'member_id' => $faker->numberBetween($min = 1, $max = 10),
        'role' => $faker->numberBetween($min = 1, $max = 4),
        'status' => $faker->numberBetween($min = 0, $max = 1),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
