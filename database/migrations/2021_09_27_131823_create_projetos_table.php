<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('projeto');
            $table->string('escola');
            $table->string('sigeam');
            $table->string('municipio');
            $table->string('coordenadoria');
            $table->string('gestor');         
            $table->string('telefone');
            $table->string('email');
            $table->string('modelo');
            $table->string('solicitante');
            $table->string('valor_ini');
            $table->string('informante');
            $table->string('respon_projeto');
            $table->string('respon_pelo_projeto');
            $table->string('tipo_projeto');
            $table->date('data');
            $table->string('descricao');            
            $table->string('executor');
            $table->string('executor_email');
            $table->string('executor_telefone');
            $table->string('executor_atuacao');
            $table->date('data_ini');
            $table->date('data_fim');
            $table->string('categoria');
            $table->string('recursos_necessarios');
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
        Schema::dropIfExists('projetos');
    }
}
