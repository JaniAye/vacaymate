<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string("hotel_name");
            $table->string("location");
            $table->text("discription");
            $table->string('type');
            $table->boolean('is_breakfast');
            $table->boolean('is_lunch');
            $table->boolean('is_dinner');
            $table->boolean('is_pool_access');
            $table->string('reviews')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
