<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Servicos;
use Faker\Generator as Faker;

$factory->define(Servicos::class, function (Faker $faker) {

    return [
        'servico' => $faker->word,
        'unidade' => $faker->word,
        'proposta' => $faker->word,
        'status' => $faker->randomDigitNotNull,
        'medicao' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
