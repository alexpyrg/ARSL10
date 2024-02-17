<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
    function loadVehicleForm(){
        //load Vehicle form as long as the user is logged in.
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
