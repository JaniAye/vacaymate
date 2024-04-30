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
        Schema::create('booked_packages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("pkg_id");
            $table->string("package_name")->nullable();
            $table->unsignedBigInteger("agancy_id");
            $table->text("discription");
            $table->unsignedBigInteger('person_count');
            $table->unsignedBigInteger('day_count');
            $table->boolean('airport_pickup');
            $table->boolean('airport_drop');
            $table->boolean('free_guide');
            $table->boolean('ultimate_service');
            $table->double('price', 8, 2);
            $table->string('type');
            $table->boolean('status');
            $table->string('reviews')->nullable();
            $table->timestamps();

            $table->foreign("pkg_id")
            ->references("id")
            ->on("packages")
            ->onDelete("cascade")
            ->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custormized_packages');
    }
};
