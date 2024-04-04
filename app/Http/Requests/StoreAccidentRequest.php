<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAccidentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'caseNumber' => 'required|min:1',
            'accidentSeverity_id' => 'required|not_in:0',
            'accidentAbandonedVictim_id' => 'required|not_in:0',
            'accidentGADAS_id' => 'required|not_in:0',
            'accidentAlcohol_id' => 'required|not_in:0',
            'accidentDate' => 'required',
            'accidentDay' => 'required|not_in:0',
            'accidentExpertArrivalDate' => 'required',
            'accidentLongitude' => 'required',
            'accidentLatitude' => 'required',
            'accidentCase' => 'required',
            'accidentNarcotics_id' => 'required|not_in:0',
            'accidentAnimalCollision_id' => 'required|not_in:0',
            'accidentEventsNumber' => 'required|numeric|min:0',
            'accidentGDV' => 'required|numeric|min:0',
            'accidentSynopsis' => 'required',
            'accidentEventSequence_id' => 'required|not_in:0',
            'accidentFirstCollisionEvent_id' => 'required|not_in:0',
            'accidentMostHarmfulEvent_id' => 'required|not_in:0',
            'accidentRelatedFactors_id' => 'required|not_in:0',
            'accidentInformationSource_id' => 'required|not_in:0',
            'accidentISTrustLevel_id' => 'required|not_in:0',
            'accidentISTLDescription' => 'required',
            'accidentInvestigationMethod_id' => 'required|not_in:0',
            'accidentIMTrustLevel_id' => 'required|not_in:0',
            'accidentIMTLDescription' => 'required',
            'accidentTotalVehicles' => 'required|numeric|min:1',
            'accidentVehicleSedan' => 'required|min:0',
            'accidentVehicleVan' => 'required|min:0',
            'accidentVehicleHatchback' => 'required|min:0',
            'accidentVehicleTruck' => 'required|min:0',
            'accidentVehicleCaravan' => 'required|min:0',
            'accidentVehicleTrailer' => 'required|min:0',
            'accidentVehicleSport' => 'required|min:0',
            'accidentVehicleBus' => 'required|min:0',
            'accidentVehicleCommercial' => 'required|min:0',
            'accidentVehiclePickupTruck' => 'required|min:0',
            'accidentVehicleOffroad' => 'required|min:0',
            'accidentVehicleBike' => 'required|min:0',
            'accidentVehicleSuv' => 'required|min:0',
            'accidentVehicleBicycle' => 'required|min:0',
            'accidentVehicleElectric' => 'required|min:0',
            'accidentVehicleOtherTwoWheeler' => 'required|min:0',
            'accidentVehicleAutonomous' => 'required|min:0',
            'accidentVehicleTricycle' => 'required|min:0',
            'accidentVehiclePedestrian' => 'required|min:0',
            'accidentVehicleOther' => 'required|min:0',
            'accidentVehicleUnknown' => 'required|min:0',
            'user_id' => 'required',
        ];
    }
}
