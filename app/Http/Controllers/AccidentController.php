<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditAccidentFormRequest;
use App\Http\Requests\EditAccidentRequest;
use App\Http\Requests\StoreAccidentRequest;
use App\Models\Accident;
use App\Models\accidentAbandonedVictim;
use App\Models\accidentAlcohol;
use App\Models\accidentAnimal;
use App\Models\accidentEventSequence;
use App\Models\accidentFirstCollisionEvent;
use App\Models\accidentGadasSort;
use App\Models\accidentMostHarmfulEvent;
use App\Models\accidentNarcotics;
use App\Models\accidentRelatedFactors;
use App\Models\accidentSeverity;
use App\Models\informationSource;
use App\Models\investigationMethod;
use App\Models\trustLevel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AccidentController extends Controller
{
    function loadAccidentForm(){
        //load accident form as long as the user is logged in.
        $user = Auth::user();
        $userid = $user->id;
        $caseNumber                   = DB::select('select id from accidents ORDER BY id DESC LIMIT 1');
        // if($caseNumber)
        // $caseNumber = 1234455;
        $caseNumber = intval($caseNumber);
        $caseNumber +=1;
        $accidentSeverities           = accidentSeverity::all();
        $accidentAbandonedVictims     = accidentAbandonedVictim::all();
        $accidentAlcohols             = accidentAlcohol::all();
        $accidentAnimalCollisions     = accidentAnimal::all();
        $accidentEventSequences       = accidentEventSequence::all();
        $accidentFirstCollisionEvents = accidentFirstCollisionEvent::all();
        $accidentGADAs                = accidentGadasSort::all();
        $accidentIMTrustLevels        = trustLevel::all();
        $accidentISTrustLevels        = $accidentIMTrustLevels;
        $accidentInformationSources   = informationSource::all();
        $accidentInvestigationMethods = investigationMethod::all();
        $accidentMostHarmfulEvents    = accidentMostHarmfulEvent::all();
        $accidentNarcotics            = accidentNarcotics::all();
        $accidentRelatedFactors       = accidentRelatedFactors::all();




        if(Auth::user()){
            return view('accidentsForm',

            ['accidentSeverities'=>$accidentSeverities,
            'accidentAbandonedVictims'=>$accidentAbandonedVictims,
            'accidentAlcohols'=>$accidentAlcohols,
            'accidentAnimalCollisions'=>$accidentAnimalCollisions,
            'accidentEventSequences'=>$accidentEventSequences,
            'accidentFirstCollisionEvents'=>$accidentFirstCollisionEvents,
            'accidentGADAs'=>$accidentGADAs,
            'accidentIMTrustLevels'=>$accidentIMTrustLevels,
            'accidentISTrustLevels'=>$accidentISTrustLevels,
            'accidentInformationSources'=>$accidentInformationSources,
            'accidentInvestigationMethods'=>$accidentInvestigationMethods,
            'accidentMostHarmfulEvents'=>$accidentMostHarmfulEvents,
            'accidentNarcotics'=>$accidentNarcotics,
            'accidentRelatedFactors'=>$accidentRelatedFactors,
            'caseNumber'=>$caseNumber+1,
            'userid'=>$userid,
            'description' => 'test',
            'keywords' => 'test kw',
            'formTitle'=> 'Νές Εγγραφή'
            ]


        );
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

    function storeAccident(StoreAccidentRequest $request){
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
        //validate them and edit the accident.
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
