<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_projeto')->unsigned();
            $table->foreign('id_projeto')->references('id')->on('projetos')->onDelete('cascade')->onUpdate('cascade');
            $table->string('tipo_empresa');
            $table->string('nome');
            $table->string('cpf_cnpj');
            $table->string('insc_estadual');
            $table->string('responsavel');
            $table->string('email');
            $table->string('cargo');
            $table->string('telefone');
            $table->string('banco');
            $table->string('agencia');
            $table->integer('conta');
            $table->integer('digito');
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
        Schema::dropIfExists('fornecedores');
    }
}
