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
        Schema::create('vehicleModel', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->unsignedBigInteger('manufacturer_id');
            $table->foreign('manufacturer_id')->references('id')->on('vehicleManufacturer');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicleModel');
    }
};
