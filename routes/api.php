<?php

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PotionController;  // Fixed capitalization
use App\Http\Controllers\WizardController;
use App\Http\Controllers\IngredientController;  // Fixed capitalization

Route::apiResource('potions', PotionController::class);  // Fixed comma
Route::apiResource('ingredients', IngredientController::class);  // Fixed comma
Route::apiResource('wizards', WizardController::class);

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
