<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    //
    function loadDashboard(){

        return view('dashboard');
    }
}
