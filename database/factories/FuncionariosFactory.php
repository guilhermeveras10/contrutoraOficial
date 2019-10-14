<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Funcionarios;
use Faker\Generator as Faker;

$factory->define(Funcionarios::class, function (Faker $faker) {

    return [
        'nome' => $faker->word,
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
        'celular' => $faker->word,
        'custo' => $faker->word,
        'email' => $faker->word,
        'cargo' => $faker->word,
        'salario' => $faker->word,
        'status' => $faker->randomDigitNotNull,
        'rg' => $faker->word,
        'cpf' => $faker->word,
        'ctps' => $faker->word,
        'registro' => $faker->word,
        'empresa' => $faker->word,
        'data_aso' => $faker->word,
        'data_venc_aso' => $faker->word,
        'exames' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
