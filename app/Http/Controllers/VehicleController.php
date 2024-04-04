<?php

namespace App\Http\Controllers;

use App\Models\informationSource;
use App\Models\investigationMethod;
use App\Models\trustLevel;
use App\Models\vehicleAbs;
use App\Models\vehicleAcs;
use App\Models\vehicleCdc3;
use App\Models\vehicleCdc4;
use App\Models\vehicleCollisionOffroadObject;
use App\Models\vehicleCollisionType;
use App\Models\vehicleColor;
use App\Models\vehicleCss;
use App\Models\vehicleDamagePossibleFactor;
use App\Models\vehicleDangerousCargo;
use App\Models\vehicleDrivePosition;
use App\Models\vehicleEsp;
use App\Models\vehicleFirefightingEquipmentUsed;
use App\Models\vehicleInspected;
use App\Models\vehicleLdw;
use App\Models\vehicleManufacturer;
use App\Models\vehicleModel;
use App\Models\vehicleOnfire;
use App\Models\vehicleRoadwayAlignment;
use App\Models\vehicleScatteredDangerousCargo;
use App\Models\vehicleSwerved;
use App\Models\vehicleTcs;
use App\Models\vehicleTrailer;
use App\Models\vehicleType;
use App\Models\vehicleWheelDrive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    function loadVehicleForm(){
        //load Vehicle form as long as the user is logged in.
        //Fetch from database all required data from vehicleTables
        $userid = auth()->user()->id;
        $accidentID = DB::select('select "accident_id" from accidents');
        $abs = vehicleAbs::all();
        $acs = vehicleAcs::all();
        $esp = vehicleEsp::all();
        $cdc3 = vehicleCdc3::all();
        $cdc4 = vehicleCdc4::all();
        $css = vehicleCss::all();
        $ldw = vehicleLdw::all();
        $tcs = vehicleTcs::all();
        $vehicleCollisionOffroadObject = vehicleCollisionOffroadObject::all();
        $vehicleCollisionType = vehicleCollisionType::all();
        $vehicleColor = vehicleColor::all();
        $vehicleDamagePossibleFactor = vehicleDamagePossibleFactor::all();
        $vehicleDangerousCargo = vehicleDangerousCargo::all();
        $vehicleDrivePosition = vehicleDrivePosition::all();
        $vehicleFirefightingEquipmentUsed = vehicleFirefightingEquipmentUsed::all();
        $vehicleIMTrustLevel = trustLevel::all();
        $vehicleISTrustLevel= $vehicleIMTrustLevel;
        $vehicleInformationSource = informationSource::all();
        $vehicleInspected = vehicleInspected::all();
        $vehicleInvestigationMethod = investigationMethod::all();
        $vehicleManufacturer = vehicleManufacturer::all();
        $vehicleModel = vehicleModel::all();
        $vehicleOnFire = vehicleOnfire::all();
        $vehicleRoadwayAlignment = vehicleRoadwayAlignment::all();
        $vehicleScatteredDangerousCargo = vehicleScatteredDangerousCargo::all();
        $vehicleSwerved = vehicleSwerved::all();
        $vehicleTrailer = vehicleTrailer::all();
        $vehicleType = vehicleType::all();
        $vehicleWheelDrive = vehicleWheelDrive::all();
        // $vehicle = DB::select('select * from "vehicle"'); //SAMPLE


        return view('livewire.create-vehicle-form',
        [
        'userid' => $userid,
        'accidentID'=> $accidentID,
        'abs'=>$abs,
        'acs'=>$acs,
        'css'=>$css,
        'esp'=>$esp,
        'tcs'=>$tcs,
        'ldw'=>$ldw,
        'cdc3'=>$cdc3,
        'cdc4'=>$cdc4,
        'vehicleCollisionOffroadObject'=>$vehicleCollisionOffroadObject,
        'vehicleCollisionType'=>$vehicleCollisionType,
        'vehicleColor'=>$vehicleColor,
        'vehicleDamagePossibleFactor'=>$vehicleDamagePossibleFactor,
        'vehicleDangerousCargo'=>$vehicleDangerousCargo,
        'vehicleDrivePosition'=>$vehicleDrivePosition,
        'vehicleFirefightingEquipmentUsed'=>$vehicleFirefightingEquipmentUsed,
        'vehicleIMTrustLevel'=>$vehicleIMTrustLevel,
        'vehicleISTrustLevel'=>$vehicleISTrustLevel,
        'vehicleInformationSource'=>$vehicleInformationSource,
        'vehicleInspected'=>$vehicleInspected,
        'vehicleInvestigationMethod'=>$vehicleInvestigationMethod ,
        'vehicleManufacturer'=>$vehicleManufacturer,
        'vehicleModel'=>$vehicleModel,
        'vehicleOnFire'=>$vehicleOnFire,
        'vehicleRoadwayAlignment'=>$vehicleRoadwayAlignment,
        'vehicleScatteredDangerousCargo'=>$vehicleScatteredDangerousCargo,
        'vehicleSwerved'=>$vehicleSwerved,
        'vehicleTrailer'=>$vehicleTrailer,
        'vehicleType'=>$vehicleType,
        'vehicleWheelDrive'=>$vehicleWheelDrive
        ]);

    }

    function editVehicleForm(){
        //load edit Vehicle form as long as the user is logged in.
    }

    function deleteVehicle(){
        //do some checks and then let the user delete the Vehicle.

    }

    function saveVehicle(StoreVehicleRequest $request){
        //if user is logged in and the Vehicle validates,
        //then pass the data into the database.

    }

    function editVehicle(){
        //after a PUT requiest with Vehicle id in the url,
        //parse the changed data,
        //validate em and edit the Vehicle.


    }
}
