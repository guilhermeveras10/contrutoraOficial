<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContasCorrentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contas_correntes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('banco');
            $table->integer('agencia');
            $table->integer('conta_corrente');
            $table->string('empresa');
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
        Schema::drop('contas_correntes');
    }
}
