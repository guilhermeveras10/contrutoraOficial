<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Unidades;
use Faker\Generator as Faker;

$factory->define(Unidades::class, function (Faker $faker) {

    return [
        'unidade' => $faker->word,
        'descricao_unidade' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
