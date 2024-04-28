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
        Schema::create('package_hotels', function (Blueprint $table) {
            $table->unsignedBigInteger("package_id");
            $table->unsignedBigInteger("hotel_id");
            $table->timestamps();
            $table->primary(['package_id', 'hotel_id']);

            $table->foreign('package_id')
                ->references('id')
                ->on('packages')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('hotel_id')
                ->references('id')
                ->on('hotels')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_hotels');
    }
};
