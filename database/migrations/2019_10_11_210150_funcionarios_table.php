<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FuncionariosTable extends Migration
{
    /**
       * Run the migrations.
       *
       * @return void
       */
      public function up()
      {
          Schema::create('funcionarios', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->string('nome');
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
              $table->string('celular');
              $table->string('custo');
              $table->string('email');              
              $table->string('cargo');
              $table->string('salario');
              $table->integer('status');
              $table->string('rg');              
              $table->string('cpf');
              $table->string('ctps');
              $table->string('registro');
              $table->string('empresa');              
              $table->string('data_aso');
              $table->string('data_venc_aso');
              $table->string('exames');
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
          Schema::drop('funcionarios');
      }
  }
  