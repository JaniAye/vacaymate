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
        Schema::create('booked_vehicle_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("pkg_id");
            $table->string("vehicle_no");
            $table->timestamps();

            $table->foreign('pkg_id')
                ->references('id')
                ->on('booked_packages')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('vehicle_no')
                ->references('vehicle_no')
                ->on('vehicles')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booked_vehicle_details');
    }
};
