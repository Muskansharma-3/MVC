<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function show(){
        return "Hellooooo!";
    }

    public function show1(){
        return view('Home');
    }

    public function showUser($roll)
    {
        $name = "Muskan";
        $age = 20;
        $id = 123;

        return view('User', compact('name', 'age', 'id', 'roll'));
    }

    public function display($id)
    {
        return view('User', compact('id'));
    }

    public function students()
    {
        $students = [
            ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com'],
            ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com'],
            ['id' => 3, 'name' => 'Alice Johnson', 'email' => 'alice@example.com'],
        ];

        return view('Students', compact('students'));
    }

    public function tableOfEight($k)
    {
        return view('Table', compact('k'));
    }
}
