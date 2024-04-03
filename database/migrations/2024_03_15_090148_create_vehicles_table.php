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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id(); // Primary key with auto-increment

            $table->unsignedBigInteger('accident_id');
            $table->foreign('accident_id')->references('id')->on('accidents'); // Assuming 'accidents' table exists

            $table->string('vehicleLicensePlate', 255);

            $table->unsignedBigInteger('vehicleColor_id');
            $table->foreign('vehicleColor_id')->references('id')->on('vehicleColor');

            $table->unsignedBigInteger('vehicleType_id');
            $table->foreign('vehicleType_id')->references('id')->on('vehicleType');

            $table->unsignedBigInteger('vehicleManufacturer_id');
            $table->foreign('vehicleManufacturer_id')->references('id')->on('vehicleManufacturer');

            $table->unsignedBigInteger('vehicleModel_id');
            $table->foreign('vehicleModel_id')->references('id')->on('vehicleModel');

            $table->unsignedBigInteger('vehicleWheelDrive_id');
            $table->foreign('vehicleWheelDrive_id')->references('id')->on('vehicleWheelDrive');

            $table->unsignedBigInteger('vehicleDrivePosition_id');
            $table->foreign('vehicleDrivePosition_id')->references('id')->on('vehicleDrivePosition');

            $table->double('vehicleLength');
            $table->double('vehicleWidth');

            $table->unsignedBigInteger('vehicleRoadwayAlignment_id');
            $table->foreign('vehicleRoadwayAlignment_id')->references('id')->on('vehicleRoadwayAlignment');

            $table->unsignedBigInteger('vehicleTrailer_id');
            $table->foreign('vehicleTrailer_id')->references('id')->on('vehicleTrailer');

            $table->integer('vehicleEnginePower');
            $table->integer('vehicleManufactureDate');
            $table->double('vehicleTare');
            $table->double('vehicleAxles');

            $table->text('vehicleGeneralComments');
            $table->integer('vehicleOccupantsNumber');

            $table->unsignedBigInteger('vehicleDamagePossibleFactor_id');
            $table->foreign('vehicleDamagePossibleFactor_id')->references('id')->on('vehicleDamagePossibleFactor');

            $table->text('vehicleDPFComments');

            $table->unsignedBigInteger('vehicleInspected_id'); // Adjust table name if needed
            $table->foreign('vehicleInspected_id')->references('id')->on('vehicleInspected');

            $table->unsignedBigInteger('vehicleSwerved_id'); // Adjust table name if needed
            $table->foreign('vehicleSwerved_id')->references('id')->on('vehicleSwerved'); // Assuming a 'swerved_conditions' table

            $table->unsignedBigInteger('vehicleDangerousCargo_id');
            $table->foreign('vehicleDangerousCargo_id')->references('id')->on('vehicleDangerousCargo');

            $table->unsignedBigInteger('vehicleScatteredDangerousCargo_id');
             $table->foreign('vehicleScatteredDangerousCargo_id')->references('id')->on('vehicleScatteredDangerousCargo'); // Assuming a 'scattered_dangerous_cargos' table

            $table->integer('vehicleCollisions');

            $table->unsignedBigInteger('CDC3_id');
            $table->foreign('CDC3_id')->references('id')->on('cdc3'); // Assuming a 'cdcs' table

            $table->unsignedBigInteger('CDC4_id');
            $table->foreign('CDC4_id')->references('id')->on('cdc4'); // Assuming a 'cdcs' table

            $table->unsignedBigInteger('vehicleOnFire_id');
            $table->foreign('vehicleOnFire_id')->references('id')->on('vehicleOnFire');

            $table->unsignedBigInteger('vehicleFirefightingEquipmentUsed_id');
            $table->foreign('vehicleFirefightingEquipmentUsed_id')->references('id')->on('vehicleFirefightingEquipmentUsed');

            $table->unsignedBigInteger('vehicleCollisionOffroadObject_id');
            $table->foreign('vehicleCollisionOffroadObject_id')->references('id')->on('vehicleCollisionOffroadObject');

            $table->unsignedBigInteger('vehicleCollisionType_id');
            $table->foreign('vehicleCollisionType_id')->references('id')->on('vehicleCollisionType');

            $table->unsignedBigInteger('ABS_id');
            $table->foreign('ABS_id')->references('id')->on('abs'); // Assuming 'abs_systems'

            $table->unsignedBigInteger('ESP_id');
            $table->foreign('ESP_id')->references('id')->on('esp'); // Assuming 'esp_systems'

            $table->unsignedBigInteger('TCS_id');
            $table->foreign('TCS_id')->references('id')->on('tcs'); // Assuming 'tcs_systems'

            $table->unsignedBigInteger('ACS_id');
            $table->foreign('ACS_id')->references('id')->on('acs'); // Assuming 'acs_systems'

            $table->unsignedBigInteger('LDW_id');
            $table->foreign('LDW_id')->references('id')->on('ldw'); // Assuming 'ldw_systems'

            $table->unsignedBigInteger('CSS_id');
            $table->foreign('CSS_id')->references('id')->on('css'); // Assuming 'css_systems'

            $table->text('vehicleElectronicsComments');

            $table->unsignedBigInteger('vehicleInformationSource_id');
            $table->foreign('vehicleInformationSource_id')->references('id')->on('InformationSource');

            $table->unsignedBigInteger('vehicleISTrustLevel_id');
            $table->foreign('vehicleISTrustLevel_id')->references('id')->on('TrustLevel'); // Adjust table name if needed

            $table->text('vehicleISTLDescription');

            $table->unsignedBigInteger('vehicleInvestigationMethod_id');
            $table->foreign('vehicleInvestigationMethod_id')->references('id')->on('InvestigationMethod');

            $table->unsignedBigInteger('vehicleIMTrustLevel_id');
            $table->foreign('vehicleIMTrustLevel_id')->references('id')->on('TrustLevel'); // Adjust table name if needed

            $table->text('vehicleIMTLDescription');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
