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
            $table->integer('descriptionorder');
            $table->longText('collision_type');
        });
        Schema::create('accidentFirstCollisionEvent', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->longText('description');
            $table->integer('descriptionorder');
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
        Schema::create('accidentRelatedFactors', function(Blueprint $table){
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('accidentAnimalCollision', function(Blueprint $table){
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });

        Schema::create('accidentEventSequence', function(Blueprint $table){
            $table->id();
            $table->longText('description');
            $table->integer('descriptionorder');
            $table->longText('collision_type');
        });
        Schema::create('accidentNarcotics', function(Blueprint $table){
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('accidentAbandonedVictim', function(Blueprint $table){
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('accidentAlcohol', function(Blueprint $table){
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });

        Schema::create('InformationSource', function(Blueprint $table){
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });

        Schema::create('InvestigationMethod', function(Blueprint $table){
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });

        Schema::create('TrustLevel', function(Blueprint $table){
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
        Schema::dropIfExists('accidentMostHarmfulEvent');
        Schema::dropIfExists('accidentFirstHarmfulEvent');
        Schema::dropIfExists('accidentGADASType');
        Schema::dropIfExists('accidentSeverity');
        Schema::dropIfExists('accidentRelatedFactor');
        Schema::dropIfExists('accidentAnimal');
        Schema::dropIfExists('accidentEventSequence');
        Schema::dropIfExists('accidentNarcotics');
        Schema::dropIfExists('accidentAbandonedVictim');
        Schema::dropIfExists('accidentAlcohol');

        Schema::dropIfExists('InformationSources');
        Schema::dropIfExists('InvestigationMethods');
        Schema::dropIfExists('TrustLevels');

    }
};
