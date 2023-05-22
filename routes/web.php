<?php

use Illuminate\Support\Facades\Route;

use App\Models\student;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth','admin')->group(function () {
    
    Route::resource('user', UserController::class)->except('show');
    Route::resource('student', StudentController::class);
});

Route::middleware('auth')->group(function () {
    
    Route::resource('user', UserController::class)->only('show');
});


require __DIR__.'/auth.php';
