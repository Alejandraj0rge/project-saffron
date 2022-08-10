<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tasks;
use Faker\Generator as Faker;

$factory->define(Tasks::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'content' => $faker->paragraph(),
    ];
});
