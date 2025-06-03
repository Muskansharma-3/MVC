<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function login(Request $request)
    {
        // Store user and all input data in session
        $request->session()->put('user', $request->input('username'));
        $request->session()->put('alldata', $request->all());

        // Redirect to a view after storing session
        return redirect('/welcome1');
    }

    public function logout(Request $request)
    {
        // Clear the session data
        $request->session()->forget(['user', 'alldata']);
        return redirect('/login');
    }
}
