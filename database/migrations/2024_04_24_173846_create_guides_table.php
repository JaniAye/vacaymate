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
        Schema::create('guides', function (Blueprint $table) {
            $table->id();
            $table->string("guide_name");
            $table->string("location");
            $table->text("discription");
            $table->string('isTranslator');
            $table->boolean('is_eng');
            $table->boolean('is_spanish');
            $table->boolean('is_Russ');
            $table->boolean('is_jpn');
            $table->boolean('is_chn');
            $table->string('reviews')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guides');
    }
};
