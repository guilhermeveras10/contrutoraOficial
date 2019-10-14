<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Bancos;
use Faker\Generator as Faker;

$factory->define(Bancos::class, function (Faker $faker) {

    return [
        'codigo_do_banco' => $faker->word,
        'descricao' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
