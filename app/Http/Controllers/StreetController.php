<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StreetController extends Controller
{
    function loadStreetForm(){
        //load Street form as long as the user is logged in.
        if(Auth::user()){

            return view('streetsForm');
        }
        else{
            return redirect('/login')->withErrors('generalError','You must be logged-in in order to do that!');
        }
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
        //after a PUT request with Street id in the url,
        //parse the changed data,
        //validate em and edit the Street.


    }
}
