<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function loadLoginForm(){
        if(Auth::user()){
            return redirect('index');
        }

        return view('login');

    }//loadLoginForm


    function loadRegisterForm(){
        if(Auth::user()){
            return redirect('index');
        }

        return view('register');

    }//loadRegisterForm


    function authLogin(Request $request){
        // validate request, if everything's fine check if user exists
        // and log them in.

    }//authLogin

    function authRegister(Request $request){
        //validate request, if everything's fine check if user exists.
        //if so then redirect them back with error 'User already exists!'
        //otherwise create new user and LOG THEM IN.


    }//authRegister


    function viewUser(Request $request){
        //if user is logged in, check permissions,
        //if permissions are correct (over admin)
        //let them see the user otherwise redirect back with general errors, '403 Forbidden'


    }//viewUser

    function deleteUser(Request $request){
        //if user is logged in, check permissions,
        //if permissions are >= admin THEN AND ONLY THEN let them delete
        //a user, as long as the id exists!

    }//deleteUser




}
