<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cargoss;
use Faker\Generator as Faker;

$factory->define(Cargoss::class, function (Faker $faker) {

    return [
        'cargo' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
