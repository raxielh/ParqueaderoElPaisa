<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetalleTarifasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_tarifas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('minutosinicio');
            $table->integer('minutosfinal');
            $table->float('valor');
            $table->float('valorrecargo');
            $table->integer('tarifas_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
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
        Schema::drop('detalle_tarifas');
    }
}
