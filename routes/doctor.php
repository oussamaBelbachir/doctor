<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::prefix("doctor")->name("doctor.")->group(function(){
    Route::get("register",[DoctorController::class , "registerView"])->name("register");
    Route::post("register",[DoctorController::class , "register"])->name("register");

    Route::get("appointements",[DoctorController::class,"listOfAppointements"])->name("appointements");
});