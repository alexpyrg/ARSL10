<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditStreetFormRequest;
use App\Http\Requests\EditStreetRequest;
use App\Http\Requests\StreetFormSubmitRequest;
use App\Models\Street;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    function editStreetForm(EditStreetFormRequest $request){
        //load edit Street form as long as the user is logged in.
        $street = Street::find($request->street_id);
        // checking if the user is trying to edit their own record or someone else's
        // and if they are trying to edit someone else's we only allow them as long
        // as they are admins or above!
                if(Auth::user() && (($street->user_id) === Auth::user()->id || Auth::user()->role_id >= 3 )){

                    return view('EditStreetForm')->with($street);
                }
    }//editStreetForm

    function deleteStreet(Request $request){
        //do some checks and then let the user delete the Street.
        $street = Street::find($request->id);
        //do some checks and then let the user delete the accident.
        if(Auth::user()->role_id >= 3 || $street->user_id === Auth::user()->id){
        try{
            $street->delete();
        }catch(Exception $ex)
         {
            return redirect('/')->withErrors('general_errors', 'An error occurred: ' . $ex);
         }//try-catch
        }//if
    }//deleteStreet

    function saveStreet(StreetFormSubmitRequest $request){
        //if user is logged in and the Street validates,
        //then pass the data into the database.
        if(Auth::user() && $request->validated()){
            try{
                Street::create($request->validated());
            }catch(Exception $ex){
                return redirect()->back()->withErrors('general_errors', $ex->getMessage());
            }
        }else{
            return redirect()->back()->withErrors('general_errors', $request->messages);
        }
    }//saveStreet

    function editStreet(EditStreetRequest $request){
        //after a PUT request with Street id in the url,
        //parse the changed data,
        //validate em and edit the Street.
        if(Auth::user() && $request->validated()){
            DB::table('streets')
                                ->where('id', $request->id)
                                ->update(['test'=>$request->test]); //FIX LATER
        }
        else{
            return redirect()->back()->withErrors('general_errors',$request->messages());
        }//if-else
    }//editStreet
}
