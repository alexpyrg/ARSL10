<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccidentFormSubmitRequest;
use App\Http\Requests\EditAccidentFormRequest;
use App\Http\Requests\EditAccidentRequest;
use App\Models\Accident;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AccidentController extends Controller
{
    function loadAccidentForm(){
        //load accident form as long as the user is logged in.
        if(Auth::user()){
            return view('accidentsForm');
        }
        else
        {
            return redirect('login')->withErrors('general_errors', 'You must be logged in in order to perform this task!');
        }
    }

    function editAccidentForm(EditAccidentFormRequest $request){
        //load edit accident form as long as the user is logged in.
        $accident = Accident::find($request->accident_id);
// checking if the user is trying to edit their own record or someone else's
// and if they are trying to edit someone else's we only allow them as long
// as they are admins or above!
        if(Auth::user() && (($accident->user_id) === Auth::user()->id || Auth::user()->role_id >= 3 )){
            return view('EditAccidentForm')->with($accident);
        }
    }

    function deleteAccident(Request $request){
        $accident = Accident::find($request->id);
        //do some checks and then let the user delete the accident.
        if(Auth::user()->role_id >= 3 || $accident->user_id === Auth::user()->id){
        try{
            $accident->delete();
        }catch(Exception $ex)
         {
            return redirect('/')->withErrors('general_errors', 'An error occurred: ' . $ex);
         }//try-catch
        }//if
    }//deleteAccident

    function saveAccident(AccidentFormSubmitRequest $request){
        //if user is logged in and the accident validates,
        //then pass the data into the database.
        if(Auth::user() && $request->validated()){
            try{
                Accident::create($request->validated());
            }catch(Exception $ex){
                return redirect()->back()->withErrors('general_errors', $ex->getMessage());
            }
        }else{
            return redirect()->back()->withErrors('general_errors', $request->messages);
        }
    }

    function editAccident(EditAccidentRequest $request){
        //after a PUT request with accident id in the url,
        //parse the changed data,
        //validate em and edit the accident.
        if(Auth::user() && $request->validated()){
            DB::table('accidents')
                                ->where('id', $request->id)
                                ->update(['test'=>$request->test]); //FIX LATER
        }
        else{
            return redirect()->back()->withErrors('general_errors',$request->messages());
        }//if-else
    }//editAccident

} //class ends here
