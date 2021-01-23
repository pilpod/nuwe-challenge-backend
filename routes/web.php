<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AcademicRecordController;
use App\Http\Controllers\WorkExperienceController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [UserController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('user', UserController::class)->shallow()->middleware(['auth']);
Route::resource('user.academic-record', AcademicRecordController::class)->shallow()->middleware(['auth']);
Route::resource('user.work-experience', WorkExperienceController::class)->shallow()->middleware(['auth']);


require __DIR__.'/auth.php';
