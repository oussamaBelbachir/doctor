<?php

namespace App\Http\Controllers;

use App\Models\Speciality;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;

class DoctorController extends Controller
{
    //

    public function index(){

    }

    public function registerView(){
        $specialities = Speciality::all()->pluck("name","id")->toArray();
        //dd($specialities);
        return view("doctor-register")->with([
            "specialities" => $specialities
        ]);
    }

    public function register(Request $request){
        //dd($request);
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        
        $user = User::create([
            'role' => "2",
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));
        

        Auth::login($user);

        return redirect()->route("dashboard");
    }


    public function listOfAppointements(){
        return view("doctor.listOfAppointements");
    }
}
