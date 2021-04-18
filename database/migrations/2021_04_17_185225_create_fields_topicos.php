<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldsTopicos extends Migration
{

    public function up()
    {
        Schema::table('topicos', function (Blueprint $table) {
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->integer('comunidade_id')->unsigned();
            $table->foreign('comunidade_id')->references('id')->on('comunidades')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('fields_topicos');
    }
}
