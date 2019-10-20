<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Funcoes;
use Faker\Generator as Faker;

$factory->define(Funcoes::class, function (Faker $faker) {

    return [
        'funcao' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
