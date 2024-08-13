<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/apis', function (Request $request) {
    return "Hello from api";
});
Route::post('/apis', function (Request $request) {

    return response()->json(["data" => $request->input("name")]);
});
Route::delete('/apis', function (Request $request) {
    return "Hello from delete api";
});
Route::put('/apis', function (Request $request) {
    return response()->json(["data"=>"hello from put method"]);
});
Route::post('/createRandomUser', [\App\Http\Controllers\newUserController::class,"createRandomUser"]);
Route::post('/createnewArtical', [\App\Http\Controllers\new_artical::class,"newArtical"]);

