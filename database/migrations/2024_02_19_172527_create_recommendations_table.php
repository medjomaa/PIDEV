<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecommendationsTable extends Migration
{
    /**
     * Run the migrations to create the recommendations table with a user_id foreign key.
     */
    public function up()
    {
        Schema::create('recommendations', function (Blueprint $table) {
            $table->bigIncrements('id');

            // Demographic Information
            $table->integer('age');
            $table->string('sex');
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();

            // Fitness Goals
            $table->string('fitness_goal');
            $table->text('specific_targets')->nullable();

            // Current Fitness Level
            $table->string('exercise_frequency')->nullable();
            $table->text('current_exercise_types')->nullable();
            $table->text('fitness_challenges')->nullable();


            // Health Information
            $table->text('medical_conditions')->nullable();
            $table->text('medications')->nullable();
            $table->text('allergies')->nullable();

            // Personal Preferences
            $table->text('preferred_exercise_types')->nullable();
            $table->text('available_equipment')->nullable();
            $table->text('time_availability')->nullable();
            $table->text('dietary_preferences')->nullable();

            // Progress Tracking and Feedback
            $table->text('initial_assessment_results')->nullable();
            $table->text('ongoing_progress')->nullable();
            $table->text('feedback')->nullable();

            $table->timestamps();

            // Link to a specific user
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('recommendations');
    }
}
