<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    function loadVehicleForm(){
        //load Vehicle form as long as the user is logged in.
        //Fetch from database all required data from vehicleTables
        $userid = auth()->user()->id;
        $accidentID = DB::select('select "accident_id" from accidents');
        $abs = abs;
        $acs = DB::select('select * from "ACS_id"');
        $esp = DB::select('select * from "ESP_id"');
        $cdc3 = DB::select('select * from "CDC3_id"');
        $cdc4 = DB::select('select * from "CDC4_id"');
        $css = DB::select('select * from "CSS_id"');
        $ldw = DB::select('select * from "LDW_id"');
        $tcs = DB::select('select * from "TCS_id"');
        $vehicleCollisionOffroadObject = DB::select('select * from "vehicleCollisionOffroadObject"');
        $vehicleCollisionType = DB::select('select * from "vehicleCollisionType"');
        $vehicleColor = DB::select('select * from "vehicleColor"');
        $vehicleDamagePossibleFactor = DB::select('select * from "vehicleDamagePossibleFactor"');
        $vehicleDangerousCargo = DB::select('select * from "vehicleDangerousCargo"');
        $vehicleDrivePosition = DB::select('select * from "vehicleDrivePosition"');
        $vehicleFirefightingEquipmentUsed = DB::select('select * from "vehicleFireFightingEquipmentUsed"');
        $vehicleIMTrustLevel = DB::select('select * from "vehicleIMTrustLevel"');
        $vehicleISTrustLevel = DB::select('select * from "vehicleISTrustLevel"');
        $vehicleInformationSource = DB::select('select * from "vehicleInformationSource"');
        $vehicleInspected = DB::select('select * from "vehicleInspected"');
        $vehicleInvestigationMethod = DB::select('select * from "vehicleInvestigationMethod"');
        $vehicleManufacturer = DB::select('select * from "vehicleManufacturer"');
        $vehicleModel = DB::select('select * from "vehicleModel"');
        $vehicleOnFire = DB::select('select * from "vehicleOnFire"');
        $vehicleRoadwayAlignment = DB::select('select * from "vehicleRoadwayAlignment"');
        $vehicleScatteredDangerousCargo = DB::select('select * from "vehicleScatteredDangerousCargo"');
        $vehicleSwerved = DB::select('select * from "vehicleSwerved"');
        $vehicleTrailer = DB::select('select * from "vehicleTrailer"');
        $vehicleType = DB::select('select * from "vehicleType"');
        $vehicleWheelDrive = DB::select('select * from "vehicleWheelDrive"');
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

    function saveVehicle(){
        //if user is logged in and the Vehicle validates,
        //then pass the data into the database.

    }

    function editVehicle(){
        //after a PUT requiest with Vehicle id in the url,
        //parse the changed data,
        //validate em and edit the Vehicle.


    }
}
