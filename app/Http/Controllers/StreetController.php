<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StreetController extends Controller
{
    function loadStreetForm(){
        //load Street form as long as the user is logged in.
    }

    function editStreetForm(){
        //load edit Street form as long as the user is logged in.
    }

    function deleteStreet(){
        //do some checks and then let the user delete the Street.

    }

    function saveStreet(){
        //if user is logged in and the Street validates,
        //then pass the data into the database.

    }

    function editStreet(){
        //after a PUT requiest with Street id in the url,
        //parse the changed data,
        //validate em and edit the Street.


    }
}
