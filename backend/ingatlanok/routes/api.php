<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PropertyController;
use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('ingatlanok', [PropertyController::class, 'ingatlanok']);
Route::get('kategoriak', [CategoryController::class, 'kategoraik']);
Route::post('ujIngatlan', [PropertyController::class, 'store']);
Route::get('ingatlanok/{id}', [PropertyController::class, 'rendezes']);
