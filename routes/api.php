<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\projectController;
use App\Http\Controllers\api\GenereController;
use App\Http\Controllers\api\LenguageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/projects', [projectController::class, 'index']);
Route::get('/genere', [GenereController::class, 'index']);
Route::get('/lenguage', [LenguageController::class, 'index']);
