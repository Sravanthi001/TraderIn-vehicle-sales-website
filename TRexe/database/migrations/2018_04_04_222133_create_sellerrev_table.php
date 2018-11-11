<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellerrevTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellerrev', function (Blueprint $table) {
            $table->increments('revid');
            $table->text('review');
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
        Schema::dropIfExists('sellerrev');
    }
}
