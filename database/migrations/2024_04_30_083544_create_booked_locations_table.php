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
        Schema::create('booked_locations', function (Blueprint $table) {
            $table->unsignedBigInteger("pkg_id");
            $table->string("loc_name");
            $table->timestamps();
            $table->primary(['pkg_id', 'loc_name']);

            $table->foreign('pkg_id')
                ->references('id')
                ->on('booked_packages')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('loc_name')
                ->references('name')
                ->on('locations')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booked_locations');
    }
};
