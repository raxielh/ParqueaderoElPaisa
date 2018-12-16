<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTarifatipoveiculosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarifatipoveiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->char('descripciontarifa', 100);
            $table->integer('numminutosinicio');
            $table->float('valorinicio');
            $table->integer('numminutosfraccion');
            $table->float('valorfraccion');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tarifatipoveiculos');
    }
}
