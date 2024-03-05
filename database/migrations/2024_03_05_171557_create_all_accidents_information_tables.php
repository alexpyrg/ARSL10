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
        /*
        Schema::create('accident', function(Blueprint $table){
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });

        */ //THIS IS THE EXAMPLE - COPY


        Schema::create('accidentMostHarmfulEvent', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->longText('description');
            $table->integer('description_order');
            $table->longText('collision_type');
        });
        Schema::create('accidentFirstHarmfulEvent', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->longText('description');
            $table->integer('description_order');
            $table->longText('collision_type');
        });
        Schema::create('accidentGADASType', function(Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->longText('description');
        });
        Schema::create('accidentSeverity', function(Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->longText('description');
        });
        Schema::create('accidentRelatedFactor', function(Blueprint $table){
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('accident', function(Blueprint $table){
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('all_accidents_information_tables');
    }
};
