<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->string('cleanliness');
            $table->string('equipment_quality');
            $table->string('staff');
            $table->string('classes');
            $table->json('safety_measures'); // Assuming JSON storage for an array of measures
            $table->string('membership_fees');
            $table->string('atmosphere');
            $table->json('additional_amenities'); // Assuming JSON storage for an array of amenities
            $table->text('feedback_text');
            $table->string('sentiment')->nullable(); // Removed the 'after' keyword
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('feedback');
    }
}
