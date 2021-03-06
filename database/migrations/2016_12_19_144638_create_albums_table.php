<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('band_id')->unsigned();
            $table->string('name');
            $table->date('recorded_date')->nullable();
            $table->date('release_date')->nullable();
            $table->tinyInteger('number_of_tracks')->nullable();
            $table->string('label')->nullable();
            $table->string('producer')->nullable();
            $table->string('genre')->nullable();
            $table->timestamps();

            $table->foreign('band_id')->references('id')->on('bands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('albums');
    }
}
