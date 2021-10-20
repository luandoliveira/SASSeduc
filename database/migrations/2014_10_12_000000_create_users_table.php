<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('matricula');
            $table->string('name');
            $table->string('cpf');
            $table->string('lotacao');
            $table->string('telefone');
            $table->string('email')->unique();
            $table->string('provider_id')->nullable();
            $table->string('avatar')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->tinyInteger('permissao')->notnull()->default(0);
            $table->tinyInteger('projeto')->notnull()->default(0);
            $table->tinyInteger('processo')->notnull()->default(0);
            $table->tinyInteger('cronograma')->notnull()->default(0);
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
        Schema::dropIfExists('users');
    }
}
