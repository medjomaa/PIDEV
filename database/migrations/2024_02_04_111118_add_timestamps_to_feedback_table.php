<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('feedback', function (Blueprint $table) {
            $table->timestamps();
            $table->string('sentiment')->nullable(); // Add a new column for sentiment
        });
    }

    public function down()
    {
        Schema::table('feedback', function (Blueprint $table) {
            $table->dropColumn('sentiment');
            $table->dropTimestamps();
        });
    }
};
