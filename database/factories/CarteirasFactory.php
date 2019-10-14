<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Carteiras;
use Faker\Generator as Faker;

$factory->define(Carteiras::class, function (Faker $faker) {

    return [
        'banco' => $faker->word,
        'codigo_carteira' => $faker->randomDigitNotNull,
        'descricao' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
