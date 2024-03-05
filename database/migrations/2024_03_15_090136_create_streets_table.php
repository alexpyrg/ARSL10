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
            $table->foreign('accident_id');
            $table->foreign('streetTrafficWayFlow_id');
            $table->integer('streetLaneNumber');
            $table->foreign('streetType_id');
            $table->foreign('streetSpeedLimit');
            $table->foreign('streetSpeedLimitType_id');
            $table->foreign('streetJunction_id');
            $table->foreign('streetLocalArea_id');
            $table->foreign('streetAlignment_id');
            $table->foreign('streetConstructionZone_id');
            $table->foreign('streetTrafficSigns_id');
            $table->foreign('streetTrafficSignalDeviceFunctioning_id');
            $table->foreign('streetSurface_id');
            $table->foreign('streetPedestrianFacility_id');
            $table->foreign('streetCycleFacility_id');
            $table->foreign('streetLightConditions_id');
            $table->foreign('streetWeatherConditions_id');
            $table->foreign('streetStrongWinds_id');
            $table->foreign('streetFog_id');
            $table->longText('streetConditionComments');
            $table->foreign('streetPollutants_id');
            $table->foreign('streetTransientConstraints_id');
            $table->foreign('streetSignalingFactors_id');
            $table->foreign('streetSpeedLimitingFacility_id');
            $table->foreign('streetSLIContributedToCollision_id');
            $table->longText('streetPossibleFactorsComments');
            $table->longText('streetOtherComments');
            $table->foreign('InformationSource_id');
            $table->foreign('InformationSourceTruestLevel_id');
            $table->longText('InformationSourceDescription');
            $table->foreign('InvestigationMethod_id');
            $table->foreign('InvestigationMethodTrustLevel_id');
            $table->longText('InvestigationMethod_id');
            $table->foreign('user_id');
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
