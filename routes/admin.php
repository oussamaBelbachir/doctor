<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::prefix("admin")->middleware("auth")->name("admin.")->group(function(){

    Route::get("doctors",[AdminController::class,"listOfDoctors"])->name("doctors");
    Route::get("add_a_doctor",[AdminController::class,"addDoctorView"])->name("addDoctor");
    Route::post("add_a_doctor",[AdminController::class,"addDoctor"])->name("addDoctor");

    Route::get("specialities",[AdminController::class,"listOfSpecialities"])->name("specialities");

});
