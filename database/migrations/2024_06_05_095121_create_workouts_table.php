<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkoutsTable extends Migration
{
    public function up()
    {
        Schema::create('workouts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('duration')->nullable(); // in minutes
            $table->enum('difficulty', ['beginner', 'intermediate', 'advanced']);
            $table->string('muscle_groups')->nullable(); // Store as comma-separated string or use a separate table for muscle groups
            $table->string('image_url')->nullable();
            $table->text('instructions')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('workouts');
    }
}
