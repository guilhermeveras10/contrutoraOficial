<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmpresasTable extends Migration
{
    /**
       * Run the migrations.
       *
       * @return void
       */
      public function up()
      {
          Schema::create('empresas', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->string('empresa');
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
              $table->string('contato');
              $table->string('email');              
              $table->string('nome_da_conta');
              $table->string('home_page');
              $table->string('inscricao_estadual');              
              $table->string('cnpj');
              $table->string('inscricao_municipal');
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
          Schema::drop('empresas');
      }
  }
  