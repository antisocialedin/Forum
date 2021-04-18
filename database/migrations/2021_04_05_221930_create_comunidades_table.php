<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComunidadesTable extends Migration
{

    public function up()
    {
        Schema::create('comunidades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 50);
            $table->string('sigla', 4);
            $table->string('descricao', 250);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('comunidades');
    }
}
