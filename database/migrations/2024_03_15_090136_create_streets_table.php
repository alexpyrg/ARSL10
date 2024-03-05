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
        Schema::create('streets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('accident_id')->unsigned();
            $table->integer('streetTrafficWayFlow_id')->unsigned();
            $table->integer('streetLaneNumber');
            $table->integer('streetType_id')->unsigned();
            $table->integer('streetSpeedLimit');
            $table->integer('streetSpeedLimitType_id')->unsigned();
            $table->integer('streetJunction_id')->unsigned();
            $table->integer('streetLocalArea_id')->unsigned();
            $table->integer('streetAlignment_id')->unsigned();
            $table->integer('streetConstructionZone_id')->unsigned();
            $table->integer('streetTrafficSigns_id')->unsigned();
            $table->integer('streetTrafficSignalDeviceFunctioning_id')->unsigned();
            $table->integer('streetSurface_id')->unsigned();
            $table->integer('streetPedestrianFacility_id')->unsigned();
            $table->integer('streetCycleFacility_id')->unsigned();
            $table->integer('streetLightConditions_id')->unsigned();
            $table->integer('streetWeatherConditions_id')->unsigned();
            $table->integer('streetStrongWinds_id')->unsigned();
            $table->integer('streetFog_id')->unsigned();
            $table->longText('streetConditionComments');
            $table->integer('streetPollutants_id')->unsigned();
            $table->integer('streetTransientConstraints_id')->unsigned();
            $table->integer('streetSignalingFactors_id')->unsigned();
            $table->integer('streetSpeedLimitingFacility_id')->unsigned();
            $table->integer('streetSLIContributedToCollision_id')->unsigned();
            $table->longText('streetPossibleFactorsComments');
            $table->longText('streetOtherComments');
            $table->integer('InformationSource_id')->unsigned();
            $table->integer('InformationSourceTruestLevel_id')->unsigned();
            $table->longText('InformationSourceDescription');
            $table->integer('InvestigationMethod_id')->unsigned();
            $table->integer('InvestigationMethodTrustLevel_id')->unsigned();
            $table->longText('InvestigationMethodComments');
            $table->integer('user_id');
        });

        Schema::table('streets', function($table){
            $table->foreign('InvestigationMethod_id')->references('id')->on('InvestigationMethod');
            $table->foreign('InvestigationMethodTrustLevel_id')->references('id')->on('InvestigationMethodTrustLevel');
            $table->foreign('InformationSource_id')->references('id')->on('InformationSource');
            $table->foreign('InformationSourceTruestLevel_id')->references('id')->on('InformationSourceTrustLevel');
            $table->foreign('streetPollutants_id')->references('id')->on('streetPollutants');
            $table->foreign('streetTransientConstraints_id')->references('id')->on('streetTransientConstraints');
            $table->foreign('streetSignalingFactors_id')->references('id')->on('streetSignalingFactors');
            $table->foreign('streetSpeedLimitingFacility_id')->references('id')->on('streetSpeedLimitingFacility');
            $table->foreign('streetSLIContributedToCollision_id')->references('id')->on('streetSLIContributedToCollision');
            $table->foreign('streetType_id')->references('id')->on('streetType');
            $table->foreign('streetSpeedLimitType_id')->references('id')->on('streetSpeedLimitType');
            $table->foreign('streetJunction_id')->references('id')->on('streetJunction');
            $table->foreign('streetLocalArea_id')->references('id')->on('streetLocalArea');
            $table->foreign('streetAlignment_id')->references('id')->on('streetAlignment');
            $table->foreign('streetConstructionZone_id')->references('id')->on('streetConstructionZone');
            $table->foreign('streetTrafficSigns_id')->references('id')->on('streetTrafficSigns');
            $table->foreign('streetTrafficSignalDeviceFunctioning_id')->references('id')->on('streetTrafficSignalDeviceFunctioning');
            $table->foreign('streetSurface_id')->references('id')->on('streetSurface');
            $table->foreign('streetPedestrianFacility_id')->references('id')->on('streetPedestrianFacility');
            $table->foreign('streetCycleFacility_id')->references('id')->on('streetCycleFacility');
            $table->foreign('streetLightConditions_id')->references('id')->on('streetLightConditions');
            $table->foreign('streetWeatherConditions_id')->references('id')->on('streetWeatherConditions');
            $table->foreign('streetStrongWinds_id')->references('id')->on('streetStrongWinds');
            $table->foreign('streetFog_id')->references('id')->on('streetFog');
            $table->foreign('accident_id')->references('id')->on('accidents');
            $table->foreign('streetTrafficWayFlow_id')->references('id')->on('streetTrafficWayFlow');

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('streets');
    }
};
