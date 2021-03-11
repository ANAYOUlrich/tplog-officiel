<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

    
// add any routes
});
Route::get('/projets', function(){
    $projets =  \App\Projet::all();
    return response()->json($projets);
});
Route::get('/logs',  function(){
    $logs =  \App\Log::all();
    return response()->json($logs);
});