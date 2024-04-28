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
        Schema::create('package_vehicle_details', function (Blueprint $table) {
            $table->unsignedBigInteger("package_id");
            $table->string("vehicle_no");
            $table->timestamps();
            $table->primary(['package_id', 'vehicle_no']);

            $table->foreign('package_id')
                ->references('id')
                ->on('packages')
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
        Schema::dropIfExists('package_vehicle_details');
    }
};
