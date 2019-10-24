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

$factory->define(App\Packs::class, function (Faker $faker) {
    return [
        'pack_name' => $faker->name,
        'disp_order' => $faker->randomDigit,
        'pack_id' =>  $faker->uuid,
        'pack_description' => $faker->text($maxNbChars = 100),
        'pack_type' => $faker->text($maxNbChars = 10),
        'total_credit' => $faker->randomDigit,
        'tag_name' => $faker->text,
        'validity_month' => $faker->monthName($max = 'now'),
        'pack_price' => $faker->randomDigitNot(0),
        'newbie_first_attend' => $faker->randomDigitNot(0),
        'newbie_addtion_credit' => $faker->randomDigit,
        'newbie_note' => $faker->text($maxNbChars = 200),
        'pack_alias' =>$faker->text,
        'estimate_price' => $faker->randomDigitNot(0),
        
    ];
});
