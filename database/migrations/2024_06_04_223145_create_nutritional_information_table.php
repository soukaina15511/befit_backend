<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNutritionalInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutritional_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('food_item_id');
            $table->integer('calories');
            $table->float('protein'); // in grams
            $table->float('carbohydrates'); // in grams
            $table->float('fats'); // in grams
            $table->timestamps();

            $table->foreign('food_item_id')->references('id')->on('food_items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nutritional_information');
    }
}
