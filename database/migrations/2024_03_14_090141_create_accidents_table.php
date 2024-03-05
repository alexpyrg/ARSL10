<?php

use App\Models\informationSource;
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
        Schema::create('accidents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('caseNumber');
            $table->dateTime('accidentDate');
            $table->integer('accidentDay');
            $table->dateTime('accidentExpertArrivalDate');
            $table->double('accidentLongitude');
            $table->double('accidentLatitude');
            $table->longText('accidentCase');
            $table->foreign('accidentSeverity_id');
            $table->foreign('accidentNarcotics_id');
            $table->foreign('accidentAlcohol_id');
            $table->foreign('accidentAbandonedVictim_id');
            $table->foreign('accidentAnimalCollision_id');
            $table->integer('accidentEventsNumber');
            $table->integer('accidentGDV');
            $table->foreign('accidentGADAS_id');
            $table->foreign('accidentEventSequence_id');
            $table->foreign('accidentFirstCollisionEvent_id');
            $table->foreign('accidentMostHarmfulEvent_id');
            $table->foreign('accidentRelatedFactors_id');
            $table->integer('accidentTotalVehicles');
            $table->integer('accidentVehicleSedan');
            $table->integer('accidentVehicleHatchback');
            $table->integer('accidentVehicleCaravan');
            $table->integer('accidentVehicleSport');
            $table->integer('accidentVehicleCommercial');
            $table->integer('accidentVehicleOffroad');
            $table->integer('accidentVehicleSuv');
            $table->integer('accidentVehicleElectric');
            $table->integer('accidentVehicleAutonomous');
            $table->integer('accidentVehiclePedestrian');
            $table->integer('accidentVehicleUnknown');
            $table->integer('accidentVehicleVan');
            $table->integer('accidentVehicleTruck');
            $table->integer('accidentVehicleTrailer');
            $table->integer('accidentVehicleBus');
            $table->integer('accidentVehiclePickupTruck');
            $table->integer('accidentVehicleBike');
            $table->integer('accidentVehicleBicycle');
            $table->integer('accidentVehicleOtherTwoWheeler');
            $table->integer('accidentVehicleTricycle');
            $table->integer('accidentVehicleOther');
            $table->longText('accidentSynopsis');
            $table->foreign('InformationSource_id');
            $table->foreign('informationSourceTrustLevel_id');
            $table->longText('accidentISTLDescription');
            $table->foreign('InvestigationMethod_id');
            $table->foreign('InvestigationMethodTrustLevel_id');
            $table->longText('accidentIMTLDescription');
            $table->foreign('user_id');
            $table->boolean('flagged');
        });

        Schema::table('accidents', function(Blueprint $table){
            $table->foreign('accidentSeverity_id')->references('id')->on('accidentSeverity');
            $table->foreign('accidentNarcotics_id')->references('id')->on('accidentNarcotics');
            $table->foreign('accidentAlcohol_id')->references('id')->on('accidentAlcohol');
            $table->foreign('accidentAbandonedVictim_id')->references('id')->on('accidentAbandonedVictim');
            $table->foreign('accidentAnimalCollision_id')->references('id')->on('accidentAnimalCollision');
            $table->foreign('accidentGADAS_id')->references('id')->on('accidentGADAS');
            $table->foreign('accidentEventSequence_id')->references('id')->on('accidentEventSequence');
            $table->foreign('accidentFirstCollisionEvent_id')->references('id')->on('accidentFirstCollisionEvent');
            $table->foreign('accidentMostHarmfulEvent_id')->references('id')->on('accidentMostHarmfulEvent');
            $table->foreign('accidentRelatedFactors_id')->references('id')->on('accidentRelatedFactors');
            $table->foreign('InformationSource_id')->references('id')->on('InformationSource');;
            $table->foreign('informationSourceTrustLevel_id')->references('id')->on('informationSourceTrustLevel');
            $table->foreign('InvestigationMethod_id')->references('id')->on('InvestigationMethod');
            $table->foreign('InvestigationMethodTrustLevel_id')->references('id')->on('InvestigationMethodTrustLevel');
            $table->foreign('user_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accidents');
    }
};
