<?php

use App\Http\Controllers\ApiController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::get('/user', [ApiController::class, 'index']);
Route::get('/user/{user}', [ApiController::class, 'show']);
Route::get('user/{user}/academic-record', [ApiController::class, 'showAcademicRecords']);
Route::get('user/{user}/work-experience', [ApiController::class, 'showWorkExperience']);
