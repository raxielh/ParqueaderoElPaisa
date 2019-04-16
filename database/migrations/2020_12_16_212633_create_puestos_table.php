<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePuestosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puestos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idestado')->unsigned();
            $table->integer('idtipovehiculo')->unsigned();
            $table->integer('numero');
            $table->integer('tarifas_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('idestado')->references('id')->on('estadopuestos');
            $table->foreign('idtipovehiculo')->references('id')->on('tipovehiculos');
            $table->foreign('tarifas_id')->references('id')->on('tarifas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('puestos');
    }
}
