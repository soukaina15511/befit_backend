<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCaloriesToMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('meals', function (Blueprint $table) {
        $table->integer('calories')->default(0);
    });
}

public function down()
{
    Schema::table('meals', function (Blueprint $table) {
        $table->dropColumn('calories');
    });
}

}
