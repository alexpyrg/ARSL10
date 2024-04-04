<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStreetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'accident_id' => 'required|min:0',
            'streetTrafficwayFlow_id' => 'required|not_in:0',
            'streetType_id' => 'required|not_in:0',
            'streetSpeedLimitType_id' => 'required|not_in:0',
            'streetConstructionZone_id' => 'required|not_in:0',
            'streetJunction_id' => 'required|not_in:0',
            'streetLocalArea_id' => 'required|not_in:0',
            'streetAlignment_id' => 'required|not_in:0',
            'streetTrafficSigns_id' => 'required|not_in:0',
            'streetTrafficSignalDeviceFunctioning_id' => 'required|not_in:0',
            'streetSurface_id' => 'required|not_in:0',
            'streetPedestrianFacility_id' => 'required|not_in:0',
            'streetCycleFacility_id' => 'required|not_in:0',
            'streetLightConditions_id' => 'required|numeric|min:0',
            'streetWeatherConditions_id' => 'required|numeric|min:0',
            'streetStrongWinds_id' => 'required',
            'streetFog_id' => 'required|not_in:0',
            'streetPollutants_id' => 'required|not_in:0',
            'streetTransientConstraints_id' => 'required|not_in:0',
            'streetSignalingFactors_id' => 'required|not_in:0',
            'streetSpeedLimitingFacility_id' => 'required|not_in:0',
            'streetSLIContributedToCollision_id' => 'required|not_in:0',
            'informationSource_id' => 'required',
            'investigationMethod_id' => 'required|not_in:0',
            'informationSourceTrustLevel' => 'required|not_in:0',
            'investigationMethodTrustLevel_id' => 'required|numeric|min:1',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            'user_id' => 'required', // THIMISOU NA TO FTIAKSEIS


        ];
    }
}
