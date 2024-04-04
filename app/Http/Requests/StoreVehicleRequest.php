<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicleRequest extends FormRequest
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
            'accidentID' => 'required|min:0',
            'vehicleLicensePlate' => 'required|min:4',
            'vehicleColor_id' => 'required|not_in:0',
            'vehicleType_id' => 'required|not_in:0',
            'vehicleManufacturer_id' => 'required|not_in:0',
            'vehicleModel_id' => 'required|not_in:0',
            'vehicleWheelDrive_id' => 'required|not_in:0',
            'vehicleDrivePosition_id' => 'required|not_in:0',
            'vehicleLength' => 'required|min:30',
            'vehicleWidth' => 'required|min:30',
            'vehicleRoadWayAlignment_id' => 'required|not_in:0',
            'vehicleTrailer_id' => 'required|not_in:0',
            'vehicleEnginePower' => 'required|min:1',
            'vehicleManufactureDate' => 'required|numeric|min:1900',
            'vehicleTare' => 'required|numeric|min:0',
            'vehicleAxles' => 'required|numeric|min:0',
            'vehicleGeneralComments' => 'required|max:1000',
            'vehicleOccupantsNumber' => 'required|numeric|min:1',
            'vehicleDamagePossibleFactor_id' => 'required|not_in:0',
            'vehicleDPFComments' => 'required|max:1000',
            'vehicleInspected_id' => 'required|not_in:0',
            'vehicleSwerved_id' => 'required|not_in:0',
            'vehicleDangerousCargo_id' => 'required|not_in:0',
            'vehicleScatteredDangerousCargo_id' => 'required|not_in:0',
            'vehicleCollisions' => 'required|numeric|min:1',
            'CDC3_id' => 'required|not_in:0',
            'CDC4_id' => 'required|not_in:0',
            'vehicleOnFire_id' => 'required|required|not_in:0',
            'vehicleFirefightingEquipmentUsed_id' => 'required|required|not_in:0',
            'vehicleCollisionOffroadObject_id' => 'required|required|not_in:0',
            'vehicleCollisionType_id' => 'required|required|not_in:0',
            'ABS_id' => 'required|required|not_in:0',
            'ESP_id' => 'required|required|not_in:0',
            'TCS_id' => 'required|required|not_in:0',
            'ACS_id' => 'required|not_in:0',
            'LDW_id' => 'required|not_in:0',
            'CSS_id' => 'required|not_in:0',
            'vehicleElectronicsComments' => 'required|min:0|max:1000',
            'vehicleInformationSource_id' => 'required|not_in:0',
            'vehicleISTrustLevel_id' => 'required|required|not_in:0',
            'vehicleISTLDescription' => 'required|min:1|max:1000',
            'vehicleInvestigationMethod_id' => 'required|not_in:0',
            'vehicleIMTrustLevel_id' => 'required|not_in:0',
            'vehicleIMTLDescription' => 'required|min:1|max:1000',
            'user_id' => 'required', // THIMISOU NA TO FTIAKSEIS
        ];
    }
}
