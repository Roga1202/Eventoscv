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
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Categoria::class, function(Faker $faker){

    return [
        'CA_name' => $faker->realText($faker->numberBetween(20,45)),
        'CA_descripcion' => $faker->realText($faker->numberBetween(20,45)),
    ];
});

$factory->define(App\Evento::class, function(Faker $faker){

    return [
        'EV_name' => $faker->name,
        'EV_descripcion' => $faker->realText($faker->numberBetween(10,20)),
        'CA_ID' => $faker->randomDigitNotNull,
        'EV_lugar' => $faker->city,
        'EV_prize' => $faker->randomFloat(2),
        'EV_date' => $faker->date(),
        'EV_img' => $faker->imageUrl(),
    ];
});
