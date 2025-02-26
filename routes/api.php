<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/api', [App\Http\Controllers\Api\ApiController::class, 'index']);
Route::post('/api', [App\Http\Controllers\Api\ApiController::class, 'createapi']);
Route::put('/api/{id}', [App\Http\Controllers\Api\ApiController::class, 'updateapi']);
Route::delete('/api/{id}', [App\Http\Controllers\Api\ApiController::class, 'deleteapi']);
Route::get('/api/{id}', [App\Http\Controllers\Api\ApiController::class, 'getapi']); 
