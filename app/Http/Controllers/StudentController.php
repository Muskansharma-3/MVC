<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    // attendance examination details fees

    public function Attendance(){
        return view('attendance');
    }
    public function Examination(){
        return view('examination');
    }
    public function Details(){
        return view('details');
    }
    public function Fees(){
        return view('fees');
    }

    // redirection
    public function redirection(){
        return redirect('hm');
    }

    // passing function from one controller to another
    public function show() {
        return redirect()->action([FirstController::class, 'show']);
    }

    // calling external address
    public function external(){
        return redirect()->away('https://www.google.com');
    }
    
    public function About(Request $request){
        $name = $request->input('name');
        $age = $request->input('age');
        return view('About', compact('name', 'age'));
    }

}
