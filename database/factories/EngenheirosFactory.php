<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Engenheiros;
use Faker\Generator as Faker;

$factory->define(Engenheiros::class, function (Faker $faker) {

    return [
        'engenheiro' => $faker->word,
        'endereco' => $faker->word,
        'bairro' => $faker->word,
        'cidade' => $faker->word,
        'estado' => $faker->word,
        'cep' => $faker->word,
        'ddd1' => $faker->word,
        'telefone1' => $faker->word,
        'ddd2' => $faker->word,
        'telefone2' => $faker->word,
        'ddd3' => $faker->word,
        'fax' => $faker->word,
        'ddd4' => $faker->word,
        'celular' => $faker->word,
        'contato' => $faker->word,
        'cnpj_cpf' => $faker->word,
        'email' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
