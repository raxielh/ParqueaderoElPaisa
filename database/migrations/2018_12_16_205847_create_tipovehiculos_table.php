<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipovehiculosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipovehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->char('desctipovehiculo', 100);
            $table->integer('idtarifatipoveiculo')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('idtarifatipoveiculo')->references('id')->on('tarifatipoveiculos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tipovehiculos');
    }
}
