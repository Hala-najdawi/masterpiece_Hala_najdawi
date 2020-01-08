<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('rating');
            $table->unsignedBigInteger('baby_id');
            $table->foreign('baby_id')->references('id')->on('babies');
            $table->unsignedBigInteger('lunchBox_id');
            $table->foreign('lunchBox_id')->references('id')->on('lunch__boxes');
            $table->unsignedBigInteger('sweet_id');
            $table->foreign('sweet_id')->references('id')->on('sweets');
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
        Schema::dropIfExists('ratings');
    }
}
