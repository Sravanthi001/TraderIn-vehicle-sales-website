<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing', function (Blueprint $table) {
            $table->increments('listid');
            $table->string('type');
            $table->integer('year');
            $table->string('make');
            $table->string('model');
            $table->text('description');
            $table->integer('price');
            $table->text('metadata');
            $table->string('imagepath');
            $table->integer('sellerid')->unsigned();
            $table->foreign('sellerid')->references('sellerid')->on('seller');
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
        Schema::dropIfExists('listing');
    }
}
