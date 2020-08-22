<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Flower\Flower;
use Faker\Generator as Faker;

$factory->define(Flower::class, function (Faker $faker) {
    return [
        'type' => 'Aconite',
        'color' => 'Red',
        'price' => $faker->unique()->numberBetween('1000','9999')
    ];
});
