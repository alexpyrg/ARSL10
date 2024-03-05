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
            $table->integer('accidentSeverity_id')->unsigned();
            $table->integer('accidentNarcotics_id')->unsigned();
            $table->integer('accidentAlcohol_id')->unsigned();
            $table->integer('accidentAbandonedVictim_id')->unsigned();
            $table->integer('accidentAnimalCollision_id')->unsigned();
            $table->integer('accidentEventsNumber');
            $table->integer('accidentGDV');
            $table->integer('accidentGADAS_id')->unsigned();
            $table->integer('accidentEventSequence_id')->unsigned();
            $table->integer('accidentFirstCollisionEvent_id')->unsigned();
            $table->integer('accidentMostHarmfulEvent_id')->unsigned();
            $table->integer('accidentRelatedFactors_id')->unsigned();
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
            $table->integer('InformationSource_id')->unsigned();
            $table->integer('informationSourceTrustLevel_id')->unsigned();
            $table->longText('accidentISTLDescription');
            $table->integer('InvestigationMethod_id')->unsigned();
            $table->integer('InvestigationMethodTrustLevel_id')->unsigned();
            $table->longText('accidentIMTLDescription');
            $table->integer('user_id');
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
