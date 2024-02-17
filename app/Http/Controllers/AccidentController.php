<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccidentController extends Controller
{
    function loadAccidentForm(){
        //load accident form as long as the user is logged in.
    }

    function editAccidentForm(){
        //load edit accident form as long as the user is logged in.
    }

    function deleteAccident(){
        //do some checks and then let the user delete the accident.

    }

    function saveAccident(){
        //if user is logged in and the accident validates,
        //then pass the data into the database.

    }

    function editAccident(){
        //after a PUT requiest with accident id in the url,
        //parse the changed data,
        //validate em and edit the accident.


    }
}
