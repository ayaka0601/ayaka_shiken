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

//Route::get('/', [UserController::class, 'index']);
//Route::post('/resister', [UserController::class, 'register']);
Route::middleware('auth')->group(function () {
    Route::get('/weight_logs', [UserController::class, 'index']);
    Route::get('/weight_logs/create', [UserController::class, 'add']);
    Route::post('/weight_logs/create', [UserController::class, 'create']);
});