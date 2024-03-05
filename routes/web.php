<?php

use App\Http\Controllers\AccidentController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\StreetController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('dashboard');
// });


// Route::get('/login', function(){
//     return view('login');
// });
// Route::get('/register', function(){
//     return view('register');
// });
Route::controller(GeneralController::class)->group(function(){
    Route::get('/', 'loadDashboard')->name('index')->middleware('auth');
});


Route::controller(UserController::class)->group(function (){
    Route::get('/login', 'loadLoginForm')->name('login');
    Route::get('/register', 'loadRegisterForm')->name('register');
    Route::get('/user/{id}', 'viewUser')->middleware('auth');
    Route::get('/user/edit/{id}', 'editUserForm')->middleware('auth');
    Route::get('/logout', 'logOut')->middleware('auth');

    Route::post('/auth/login', 'authLogin');
    Route::post('/register/complete', 'authRegister');
    Route::put('/user/edit/{id}', 'editUser')->middleware('auth');

    Route::delete('/user/delete', 'deleteUser')->middleware('auth');

});

Route::controller(StreetController::class)->group(function () {
    Route::get('/street/new', 'loadStreetForm')->middleware('auth');
    Route::get('/street/{id}', 'fetchStreet')->middleware('auth');
    Route::get('/streets', 'fetchAllStreets')->middleware('auth');
    Route::get('/create/street', 'loadStreetForm')->middleware('auth');
    //check if user admin load all or if not load all owned

    Route::post('/street/create', 'saveStreet')->middleware('auth');
    Route::put('/street/{id}/edit', 'editStreet')->middleware('auth');

    Route::delete('/street/delete/{id}', 'deleteStreet')->middleware('auth');
});

Route::controller(AccidentController::class)->group( function(){
    Route::get('/accident/new', 'loadAccidentForm')->middleware('auth');
    Route::get('/accident/{id}', 'fetchAccident')->middleware('auth');
    Route::get('/accidents', 'fetchAllAccidents')->middleware('auth');
    Route::get('/create/accident', 'loadAccidentForm')->middleware('auth');

    Route::post('/accident/create', 'saveAccident')->middleware('auth');
    Route::put('/accident/{id}/edit', 'editAccident')->middleware('auth');

    Route::delete('/accident/delete/{id}', 'deleteAccident')->middleware('auth');
});

Route::controller(VehicleController::class)->group(function(){
    Route::get('/vehicle/new', 'loadVehicleForm')->middleware('auth');
    Route::get('/vehicle/{id}', 'fetchVehicle')->middleware('auth');
    Route::get('/vehicles', 'fetchAllAccidents')->middleware('auth');
    Route::get('/create/vehicle', 'loadVehicleForm')->middleware('auth');

    Route::post('/vehicle/create', 'saveVehicle')->middleware('auth');
    Route::put('/vehicle/{id}/edit', 'editVehicle')->middleware('auth');

    Route::delete('/vehicle/delete/{id}', 'deleteVehicle')->middleware('auth');
});
