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
        Schema::create('vehicleColor', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();

        });

        Schema::create('vehicleType', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();

        });
        Schema::create('vehicleWheelDrive', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();

        });

        Schema::create('vehicleDrivePosition', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();

        });

        Schema::create('vehicleRoadwayAlignment', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();

        });

        Schema::create('vehicleTrailer', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();

        });

        Schema::create('vehicleDamagePossibleFactor', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();

        });

        Schema::create('vehicleInspected', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();

        });

        Schema::create('vehicleSwerved', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();

        });

        Schema::create('vehicleDangerousCargo', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();

        });

        Schema::create('vehicleScatteredDangerousCargo', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();

        });

        Schema::create('cdc3', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->text('code');
            $table->timestamps();

        });

        Schema::create('cdc4', function (Blueprint $table) {
            $table->id();
            $table->text('code');
            $table->longText('description');
            $table->text('impact');
            $table->timestamps();

        });

        Schema::create('vehicleOnFire', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();

        });

        Schema::create('vehicleFirefightingEquipmentUsed', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();

        });
        Schema::create('vehicleCollisionOffroadObject', function (Blueprint $table) {
            $table->id();
            $table->integer('descriptionorder');
            $table->longText('description');
            $table->longText('objectstruckoffroadtype');
            $table->longText('objectstruckoffroaddetail');
            $table->timestamps();

        });
        Schema::create('vehicleCollisionType', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();

        });
        Schema::create('abs', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();

        });
        Schema::create('esp', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();

        });
        Schema::create('tcs', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();

        });
        Schema::create('acs', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();

        });
        Schema::create('ldw', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->timestamps();

        });
        Schema::create('css', function (Blueprint $table) {
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
        Schema::dropIfExists('vehicleColor');
        Schema::dropIfExists('vehicleType');
        Schema::dropIfExists('vehicleWheelDrive');
        Schema::dropIfExists('vehicleDrivePosition');
        Schema::dropIfExists('vehicleRoadwayAlignment');
        Schema::dropIfExists('vehicleTrailer');
        Schema::dropIfExists('vehicleDamagePossibleFactor');
        Schema::dropIfExists('vehicleInspected');
        Schema::dropIfExists('vehicleSwerved');
        Schema::dropIfExists('vehicleDangerousCargo');
        Schema::dropIfExists('vehicleScatteredDangerousCargo');
        Schema::dropIfExists('cdc3');
        Schema::dropIfExists('cdc4');
        Schema::dropIfExists('vehicleOnFire');
        Schema::dropIfExists('vehicleFirefightingEquipmentUsed');
        Schema::dropIfExists('vehicleCollisionOffroadObject');
        Schema::dropIfExists('vehicleCollisionType');
        Schema::dropIfExists('abs');
        Schema::dropIfExists('esp');
        Schema::dropIfExists('tcs');
        Schema::dropIfExists('acs');
        Schema::dropIfExists('ldw');
        Schema::dropIfExists('css');

    }
};
