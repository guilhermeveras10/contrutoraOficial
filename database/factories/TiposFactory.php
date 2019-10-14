<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tipos;
use Faker\Generator as Faker;

$factory->define(Tipos::class, function (Faker $faker) {

    return [
        'tipo_de_fornecedor' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
