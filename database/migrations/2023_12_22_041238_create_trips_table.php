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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('trip_from',100)->nullable();
            $table->string('trip_to',100)->nullable();
            $table->string('tripdate')->nullable();
            $table->integer('fare')->nullable();
            $table->string('coach_type',100)->nullable();
            $table->string('departure_time',100)->nullable();
            $table->string('arrival_time',100)->nullable();
            $table->integer('total_seat')->default('36');
            $table->integer('seat_booked')->nullable();
            $table->integer('seat_available')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
