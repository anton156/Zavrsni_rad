<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Predavanje;
use Faker\Generator as Faker;

$factory->define(Predavanje::class, function (Faker $faker) {

    return [
        'naziv' => $faker->word,
        'opis' => $faker->word,
        'kolegij_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
