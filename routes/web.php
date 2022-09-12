<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\UserController;
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

Route::get('/',[UserController::class,"index"])->middleware("auth")->name("dashboard");

Route::get('/test', function () {
    return "test";
})->name("test");

//Route::get('/doctor/register',[DoctorController::class,"register"])->name("doctor.register");

Route::get("/profile" , [UserController::class , "profileView"])->name("user.profile");
// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/doctor.php';
