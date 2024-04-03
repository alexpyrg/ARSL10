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
        Schema::create('streetAlignment', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('streetConstructionZone', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('streetCycleFacility', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('streetFog', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('streetJunction', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('streetLightConditions', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('streetLocalArea', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('streetPedestrianFacility', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('streetPollutants', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('streetSLIContributedCollision', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('streetSignalingFactors', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('streetSpeedLimitType', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('streetSpeedLimitingFacility', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('streetStrongWinds', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('streetSurface', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('streetSurfaceType', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('streetTrafficSignalDeviceFunctioning', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('streetTrafficSigns', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('streetTrafficwayFlow', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('streetTransientConstraints', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('streetType', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('streetWeatherConditions', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('streetSurfaceContaminants', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('streetTrafficSignalControl', function (Blueprint $table) {
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
        Schema::dropIfExists('streetAlignment');
        Schema::dropIfExists('streetConstructionZone');
        Schema::dropIfExists('streetCycleFacility');
        Schema::dropIfExists('streetFog');
        Schema::dropIfExists('streetJunction');
        Schema::dropIfExists('streetLightConditions');
        Schema::dropIfExists('streetLocalArea');
        Schema::dropIfExists('streetPedestrianFacility');
        Schema::dropIfExists('streetPollutants');
        Schema::dropIfExists('streetSLIContributedCollision');
        Schema::dropIfExists('streetSignalingFactors');
        Schema::dropIfExists('streetSpeedLimitType');
        Schema::dropIfExists('streetSpeedLimitingFacility');
        Schema::dropIfExists('streetStrongWinds');
        Schema::dropIfExists('streetSurface');
        Schema::dropIfExists('streetSurfaceType');
        Schema::dropIfExists('streetTrafficSignalDeviceFunctioning');
        Schema::dropIfExists('streetTrafficSignalControl');
        Schema::dropIfExists('streetTrafficSigns');
        Schema::dropIfExists('streetTrafficwayFlow');
        Schema::dropIfExists('streetTransientConstraints');
        Schema::dropIfExists('streetType');
        Schema::dropIfExists('streetWeatherConditions');
        Schema::dropIfExists('streetSurfaceContaminants');
        // Schema::dropIfExists('');
        // Schema::dropIfExists('');

    }
};
