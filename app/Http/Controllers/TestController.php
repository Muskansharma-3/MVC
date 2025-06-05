<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function products(){
        $products=['LED Bulb', 'Extension Cord', 'Ceiling Fan', 'Electric Kettle', 'Power Bank'];
        $prices=[100, 400, 2000, 1500, 1200];
        return view('products', compact('products', 'prices'));
    }

    public function show($id)
    {
        $products = [
            0 => ['name' => 'LED Bulb', 'price' => '100', 'description' => 'good'],
            1 => ['name' => 'Extension Cord', 'price' => '400', 'description' => '5-meter extension cord with surge protection'],
            2 => ['name' => 'Ceiling Fan', 'price' => '2000', 'description' => 'cool'],
            3 => ['name' => 'Electric Kettle', 'price' => '1500', 'description' => 'good'],
            4 => ['name' => 'Power Bank', 'price' => '800', 'description' => 'portable']
        ];

        return view('display', ['product' => $products[$id]]);
    }
}    