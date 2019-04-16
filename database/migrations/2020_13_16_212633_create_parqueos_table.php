<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParqueosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parqueos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idpuesto')->unsigned();
            $table->char('placavehiculo',100)->nullable();
            $table->dateTime('entrada');
            $table->dateTime('salida')->nullable();
            $table->integer('valorpagar')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('idpuesto')->references('id')->on('puestos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('parqueos');
    }
}
