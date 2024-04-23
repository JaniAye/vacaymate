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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->string("vehicle_no");
            $table->string("model");
            $table->text("discription")->nullable();
            $table->string('type');
            $table->boolean('is_ac');
            $table->boolean('is_adjustable_seat');
            $table->boolean('is_power_shutter');
            $table->string('reviews')->nullable();
            $table->timestamps();
            $table->primary('vehicle_no');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
