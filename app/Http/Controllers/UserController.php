<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAuthRequest;
use App\Http\Requests\UserSaveRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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

    function authLogin(UserAuthRequest $request){
        // validate request, if everything's fine check if user exists
        // and log them in.
        $formFields = null;
        if($request->validated()){
            $formFields = [
                'email' => $request->get('email'),
                'password' =>$request->get('password'),
            ];
        }else{
            return Redirect::back()->withErrors('general_errors', $request->messages());
        }
        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/')->with('message', 'Συνδεθήκατε με επιτυχία!');
        }else{
            return Redirect::back()->withErrors('general_errors', 'Τα στοιχεία που δώσατε δεν ταιριάζουν!');
        }
    }//authLogin

    function authRegister(UserSaveRequest $request){
        //validate request, if everything's fine check if user exists.
        //if so then redirect them back with error 'User already exists!'
        //otherwise create new user and LOG THEM IN.
        $formFields = null;
        if($request->validated()){
            $formFields = [
                'email' => $request->get('email'),
                'first_name' => $request->get('first_name'),
                'last_name' => $request->get('last_name'),
                'password' => $request->get('password')
            ];

            $formFields['password'] = bcrypt($formFields['password']);
            //hashing the password to make sure it's hard to decode in case of any database leaks
            $user = User::create($formFields);
            auth()->login($user);

        }else{
            return Redirect::back()->withErrors('general_errors', $request->messages());
        }
    }//authRegister

    function logOut(Request $request){
        auth()->logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken(); //kill the old token so no one can take advantage of the old one!

        return redirect('/');
    }//logOut

    function viewUser(Request $request){
        $id = $request->user_id;
        $user = User::find($id);
       if(Auth::user()->role_id >= 2){
           return redirect('//user/'. $id)->with([
            'id'=> $user->id,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'email' => $user->email
           ]);
       }//if
    }//viewUser

    function deleteUser(Request $request){
        if(Auth::user()->role_id >= 3){
            $id = $request->get('user_id');
            $user = User::find($id);
            if($user->id <= 3){
                User::find($id)->delete();
            }//if
        }else{
            return redirect()->back()->withErrors('general_errors', 'Δεν έχετε δικαιώματα να διαγράψετε τον συγκεκριμένο χρήστη!');
        }//ifelse
    }//deleteUser
}
