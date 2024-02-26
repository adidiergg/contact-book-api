<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('contacts', [App\Http\Controllers\ContactController::class, 'index']);
Route::post('contacts', [App\Http\Controllers\ContactController::class, 'store']);
Route::put('contacts/{contact}', [App\Http\Controllers\ContactController::class, 'update']);
Route::delete('contacts/{contact}', [App\Http\Controllers\ContactController::class, 'destroy']);
