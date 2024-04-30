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
        Schema::create('package_guides', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("package_id");
            $table->unsignedBigInteger("guide_id");
            $table->timestamps();

            $table->foreign('package_id')
                ->references('id')
                ->on('packages')
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
        Schema::dropIfExists('package_guides');
    }
};
