<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Groups;
use Faker\Generator as Faker;

$factory->define(Groups::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('ru_Ru');
    return [
        'title' => $faker->city,
        'description' => $faker->unique()->word
    ];
});
