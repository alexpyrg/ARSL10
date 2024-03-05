<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'streets';

    protected $fillable = [
        'accident_id',
        'streetTrafficwayFlow_id',
        'streetLaneNumber',
        'streetType_id',
        'streetSpeedLimit',
        'streetSpeedLimitType_id',
        'streetJunction_id',
        'streetLocalArea_id',
        'streetAlignment_id',
        'streetConstructionZone_id',
        'streetTrafficSigns_id',
        'streetTrafficSignalDeviceFunctioning_id',
        'streetSurface_id',
        'streetPedestrianFacility_id',
        'streetCycleFacility_id',
        'streetLightConditions_id',
        'streetWeatherConditions_id',
        'streetStrongWinds_id',
        'streetFog_id',
        'streetConditionComments',
        'streetPollutants_id',
        'streetTransientConstraints_id',
        'streetAccidentRelatedSignaling_id',
        'streetSignalingFactors_id',
        'streetSpeedLimitingFacility_id',
        'streetSLIContributedToCollision_id',
        'streetPossibleFactorsComments',
        'streetOtherComments',
        'InformationSource_id',
        'InformationSourceTrustLevel_id',
        'streetISTLDescription',
        'InvestigationMethod_id',
        'InvestigationMethodTrustLevel_id',
        'streetIMTLDescription',
        'images',
        'user_id'

    ];

    protected $guarded = [
        'id'
    ];
}
