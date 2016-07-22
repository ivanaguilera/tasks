<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdministracionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administraciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',255);
            $table->integer('rut');
            $table->string('dv',1);
            $table->string('email',255);
            $table->string('telefono',255);
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
        Schema::drop('administraciones');
    }
}
