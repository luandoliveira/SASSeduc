<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fases', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_projeto')->unsigned();
            $table->foreign('id_projeto')->references('id')->on('projetos')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('fase');
            $table->string('atividade');
            $table->date('data_ini');
            $table->date('data_fim');
            $table->tinyInteger('ativo')->notnull()->default(0);
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
        Schema::dropIfExists('fases');
    }
}
