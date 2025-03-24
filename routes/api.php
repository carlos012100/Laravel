<?php

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PotionController; 
use App\Http\Controllers\WizardController;
use App\Http\Controllers\IngredientController;  

Route::apiResource('potions', PotionController::class);  
Route::apiResource('ingredients', IngredientController::class); 
Route::apiResource('wizards', WizardController::class);
