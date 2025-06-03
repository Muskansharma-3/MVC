<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    // //
    // public function upload(){
    //     echo "File uploaded successfully";
    // }
    public function upload(Request $request){
        $path=$request->file('file')->store('uploads','public');
        // return $path;

        $fileNameArray = explode('/', $path);
        $fileName=$fileNameArray[1];

        // return $fileName;
        return view('displayFile',['path'=>$fileName]);
    }
}
