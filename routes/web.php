<?php

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

Route::get('/', function () {
    return view('dashboard');
});


Route::get('/login', function(){
    return view('login');
});
Route::get('/register', function(){
    return view('register');
});


Route::controller(StreetController::class)->group(function () {
    Route::get('/street/{id}', 'fetchStreet')->middleware('auth');
    Route::get('/streets', 'fetchAllStreets')->middleware('auth');
    Route::get('/create/street', 'newStreet')->middleware('auth');
    //check if user admin load all or if not load all owned

    Route::post('/street/create', 'saveStreet')->middleware('auth');
    Route::put('/street/{id}/edit', 'editStreet')->middleware('auth');

    Route::delete('/street/{id}/delete', 'deleteStreet')->middleware('auth');
});
