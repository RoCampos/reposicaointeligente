<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReposicaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reposicaos', function (Blueprint $table) {
            $table->increments('id_reposicao');
            $table->string('id_aluno');
            $table->string('id_professor');
            $table->text('justificativa');
            $table->string('disciplina');
            $table->string('email_prof');
            $table->date('data')->nullable();
            $table->string('hora')->nullable();
            $table->string('situacao');
            $table->string('observacao')->nullable();
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
        Schema::dropIfExists('reposicaos');
    }
}
