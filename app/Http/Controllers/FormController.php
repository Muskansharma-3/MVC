<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Rules\Uppercase;

class FormController extends Controller
{
    //
    public function userdata(Request $request){
        // name from form 
        // echo $request->username . ' and ' . $request->password;
        // echo "Data submitted successfully.";

        // $name = $request->username;
        // $pass = $request->password;
        // return view('Friday', compact('name', 'pass'));

        $request->validate([
            'username' => 'required|min:3|max:50|Uppercase',
            'password' => 'required'
        ],[
            //customized error message
            'username.required' => "Cannot be empty",
            'username.min' => "Minimum length should be 3",
            'password.required' => "Cannot be empty",

        ]);
        // return "successfully entered data";
        $name = $request->username;
        $pass = $request->password;
        return view('Friday', compact('name', 'pass'));
    }
}
