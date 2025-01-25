<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WeightLogController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/register', [UserController::class, 'register']);
Route::post('/register/step2', [UserController::class, 'register2']);
Route::get('/weight_logs/create', [UserController::class, 'add']);
Route::post('/weight_logs/create', [UserController::class, 'create']);
Route::get('/weight_logs/{:weightLogId}/update', [UserController::class, 'edit']);
Route::post('/weight_logs/{:weightLogId}/update', [UserController::class, 'update']);
Route::get('/weight_logs/{:weightLogId}/delete', [UserController::class, 'delete']);
Route::post('/weight_logs/{:weightLogId}/delete', [UserController::class, 'remove']);

Route::middleware('auth')->group(function () {
    Route::get('/weight_logs', [UserController::class, 'index']);
    Route::post('/logout', [UserController::class, 'login']);
});