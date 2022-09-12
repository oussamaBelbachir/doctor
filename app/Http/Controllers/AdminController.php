<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Speciality;
use App\Models\SpecialityUser;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function listOfDoctors(){
        $doctors = User::where("role","=","0")->get();

        return view("admin.listOfDoctors")->with([
            "doctors" => $doctors
        ]);
    }

    public function addDoctorView(){
        $specialities = Speciality::all();
        return view("admin.addDoctor")->with([
            "specialities" => $specialities
        ]);
    }
    public function addDoctor(Request $request){
         
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => '$2y$10$wD9DRAvMb2Jwvqa07wqy2u9/N8HwYGut1WZwSIrR.n2OwpCMyLc3a',
        ]);

        $specialities = [];
        foreach($request->specialities as $item){
            array_push($specialities,["user_id" => $user->id , "speciality_id" => $item]);
        }
        SpecialityUser::insert($specialities);

        return redirect()->route("admin.doctors");
    }


    // ======================

    public function listOfSpecialities(){
        $specialities = Speciality::all();
        return view("admin.listOfSpecialities")->with([
            "specialities" => $specialities
        ]);
    }
}
