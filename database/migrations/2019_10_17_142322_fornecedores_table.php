<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FornecedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fornecedor');
            $table->string('endereco');              
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');              
            $table->string('cep');
            $table->string('ddd1');
            $table->string('telefone1');              
            $table->string('ddd2');
            $table->string('telefone2');
            $table->string('ddd3');              
            $table->string('fax');
            $table->string('ddd4');
            $table->string('celular');              
            $table->string('contato');
            $table->string('cnpj_cpf');
            $table->string('inscricao_rg');              
            $table->string('email');
            $table->string('site');
            $table->string('acoes_tipo_de_fornecedor');              
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('fornecedores');
    }
}
