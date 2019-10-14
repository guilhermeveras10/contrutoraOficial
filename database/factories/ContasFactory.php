<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contas;
use Faker\Generator as Faker;

$factory->define(Contas::class, function (Faker $faker) {

    return [
        'banco' => $faker->word,
        'agencia' => $faker->randomDigitNotNull,
        'conta_corrente' => $faker->randomDigitNotNull,
        'empresa' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
