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
        Schema::create('seat_setups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trip_id');
            $table->foreign('trip_id')->on('trips')->references('id')->onDelete('Cascade');
            
            $table->string('seat_no')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seat_setups');
    }
};
