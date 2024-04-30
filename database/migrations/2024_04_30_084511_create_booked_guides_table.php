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
        Schema::create('booked_guides', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("pkg_id");
            $table->unsignedBigInteger("guide_id");
            $table->timestamps();

            $table->foreign('pkg_id')
                ->references('id')
                ->on('booked_packages')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('guide_id')
                ->references('id')
                ->on('guides')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booked_guides');
    }
};
