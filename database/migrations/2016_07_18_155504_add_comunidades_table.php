<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddComunidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comunidades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',255);
            $table->string('direccion',255);
            $table->string('comuna',255);
            $table->string('ciudad',255);
            $table->string('telefono',255);
            $table->string('web',255);
            $table->string('email',255);
            $table->integer('administracion_id')->unsigned(); 
            $table->foreign('administracion_id')->references('id')->on('administraciones');
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
        Schema::drop('comunidades');
    }
}
