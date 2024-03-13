<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GeneralController extends Controller
{
    //
    function loadDashboard(){
        $userRole = Role::find(Auth::user()->role_id);
        // dd($userRole);
        return view('dashboard')->with(['userRole' => $userRole->name]);
    }
}
