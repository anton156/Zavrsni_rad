<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePredavanjesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predavanjes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naziv');
            $table->string('opis');
            $table->integer('kolegij_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('kolegij_id')->references('id')->on('kolegij')
            ->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('predavanjes');
    }
}
