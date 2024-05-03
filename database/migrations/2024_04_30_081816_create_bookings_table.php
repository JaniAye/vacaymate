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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("cust_id");
            $table->unsignedBigInteger("pkg_id");
            $table->unsignedBigInteger("agancy_id");
            $table->string('status');
            $table->string('type');
            $table->date('st_date');
            $table->date('end_date');
            $table->double('price', 8, 2);
            $table->text('comments');
            $table->timestamps();

            $table->foreign('cust_id')
                ->references('id')
                ->on('accounts')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('pkg_id')
                ->references('id')
                ->on('booked_packages')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
