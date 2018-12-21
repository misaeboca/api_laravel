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

$factory->define(App\Models\Pagina::class, function (Faker $faker) {
    return [
        'titulo' => $faker->sentence(2),
        'autor' => $faker->name,
        'contenido' => $faker->text(10), //
        'created_at' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
        'updated_at' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s')
    ];
});
