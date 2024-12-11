<?php

use Illuminate\Http\Request;
use App\Http\Controllers\HabitAnalyzerController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

//signup and register routes
Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/login', [AuthController::class, 'login']);


//kyc input and response route
Route::middleware('auth:api')->group(function () {
    Route::post('/kyc', [HabitAnalyzerController::class, 'storeKYC']);
    Route::get('/suggestions', [HabitAnalyzerController::class, 'getSuggestions']);
});
