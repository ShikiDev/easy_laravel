<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Data;
use Faker\Generator as Faker;

$factory->define(Data::class, function (Faker $faker) {
    return [
        'text' => $faker->unique()->text('100'),
        'nickname' => $faker->unique()->userName,
        'random' => random_int(0,50 * pow(10,10)),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime
    ];
});
