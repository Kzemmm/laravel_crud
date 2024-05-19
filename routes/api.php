<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/create',[StudentsController::class,'store']);
Route::get('/fetch',[StudentsController::class,'fetch']);
Route::get('/fetch/{id}',[StudentsController::class,'fetchStudent']);
Route::post('/update/{id}',[StudentsController::class,'update']);
Route::delete('/delete/{id}',[StudentsController::class,'delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
