<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Empresas;
use Faker\Generator as Faker;

$factory->define(Empresas::class, function (Faker $faker) {

    return [
        'empresa' => $faker->word,
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
        'contato' => $faker->word,
        'email' => $faker->word,
        'nome_da_conta' => $faker->word,
        'home_page' => $faker->word,
        'inscricao_estadual' => $faker->word,
        'cnpj' => $faker->word,
        'inscricao_municipal' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
