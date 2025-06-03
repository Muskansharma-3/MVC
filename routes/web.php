<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\FormController; 
use App\Http\Controllers\SessionController;
use App\Http\Controllers\FileController;

Route::get('/', function () {
    $name = 'Muskan';
    $class="K22RS";
    $rollno=51;

    // using key-value pairs

    return view('Muskan', ['n'=>$name, 'c'=>$class, 'r'=>$rollno]);
});

Route::get('/home', function () {
    $name = 'Muskan';
    $class="K22RS";
    $rollno=51;

    // using with method

    return view('Home')->with('n', $name)->with('c', $class)->with('r', $rollno);
});

Route::get('/view', function () {
    $name = 'Muskan';
    $class="K22RS";
    $rollno=51;

    // compact

    return view('About', compact('name', 'rollno'));

});

Route::get('/student1', function () {
    $name = 'Raman';
    $roll=56;

    return view('Raman', compact('name', 'roll'));
});

Route::get('/student2', function () {
    $name = 'Aman';
    $roll=23;

    return view('Raman', compact('name', 'roll'));
});

Route::get('/student3', function () {
    $name = 'Shyam';
    $roll=44;

    return view('Raman', compact('name', 'roll'));
});

// Route::get('/user/{name}', function($name){
//     return view('User', compact('name'));
// })->where('name', '[A-Za-z]+');


// custom error message

Route::get('/user/{name}', function ($name) {
    if(!ctype_alpha($name)){
        return "Only letters are accepted";
    }
    
    // if (!preg_match('/^[a-zA-Z]+$/', $name)) {
    //     return "Invalid name";
    // }
    return view('User', compact('name'));
});

// globally defined pattern -. in AppServiceProvider.php
Route::get('/about/{id}', function ($id) {
    return view('About', compact('id'));
});

// optional parameter -> age
Route::get('/optional/{age?}', function ($age = 'Unknown') {
    return view('User', compact('age'));
});

// multiple parameters
Route::get('/multiple/{name}/{id}', function ($name, $id) {
    return view('User', compact('name', 'id'));
});


// response using json
Route::get('/json/{name}/{age}/{id}', function ($name, $age, $id) {
    return response()->json([
        'name' => $name,
        'age' => $age,
        'id' => $id
    ]);
});


// calling function from controller
Route::get('/controller', [FirstController::class, 'show']);
Route::get('/controller1', [FirstController::class, 'show1']);
Route::get('/controller2/{roll}', [FirstController::class, 'showUser']);
Route::get('/controller3/{id}', [FirstController::class, 'display']);

Route::get('/students', [FirstController::class, 'students']);

Route::get('/table/{k}', [FirstController::class, 'tableOfEight']);

    
Route::get('/header', function(){
    return view('Common.Header');
});

Route::get('/footer', function(){
    return view('Common.Footer');
});

Route::get('/house', function(){
    return view('Home');
});


// Named routes

Route::get('house/home/hello/muskan/page', function(){
    return view('Home');
})->name('hm');

Route::get('/hm', function(){
    return view('Home');
});


// StudentController

// Route::prefix('Students/2025/Btech/K22RS')->group(function () {
//     Route::get('attendance', [StudentController::class, 'Attendance']);
//     Route::get('examination', [StudentController::class, 'Examination']);
//     Route::get('details', [StudentController::class, 'Details']);
//     Route::get('fees', [StudentController::class, 'Fees']);
// });

// using controller() for grouping
Route::controller(StudentController::class)->prefix('Students/2025/Btech/K22RS')->group(function () {
    Route::get('attendance', 'Attendance');
    Route::get('examination', 'Examination');
    Route::get('details', 'Details');
    Route::get('fees', 'Fees');
});


// Redirecting routes
Route::redirect('/start', '/Students/2025/Btech/K22RS/details');

// using named routes

Route::get('direct', function(){
    return redirect()->route('hm');
});

// using redirection insife controller
Route::get('redirection', [StudentController::class, 'redirection']);

// passing function from one controller to another
Route::get('show', [StudentController::class, 'show'])->name('show');

// calling external address
Route::get('external', [StudentController::class, 'External']);



// making requests
Route::get('/about/{name}/{age}', [StudentController::class, 'About']);


// TestController
Route::get('/products', [TestController::class, 'products'])->name('products');
Route::get('/products/{id}', [TestController::class, 'show'])->name('show');

//forms
Route::get('/adduser',function(){
    return view('userform');
});

Route::post('/usercont', [FormController::class, 'userdata']);

// session
Route::view('/login', 'sessionform');
Route::post('/login', [SessionController::class, 'login']);
Route::get('/logout', [SessionController::class, 'logout']);
Route::get('/welcome1', function () {
    return view('welcome1');
});

//file upload
Route::view('file', 'fileform');
Route::post('/upload',[FileController::class, 'upload']);

//localisation
Route::get('/local', function(){
    return view('Local');
});


use Illuminate\Support\Facades\App;

Route::get('language/{lang}', function($lang){
    App::setLocale($lang);
    return view('Local');
});

// email
use App\Http\Controllers\EmailController;
Route::view('emailform', 'emailform');
Route::post('email', [EmailController::class, 'emaildata']);


// Cookies

// Set cookie
Route::get('/set-cookie', function(){
    $cookie = cookie('user', 'Muskan', 1); // 1 minute
    return response('Cookie has been set')->cookie($cookie);
});

// Get cookie
Route::get('get-cookie', function(\Illuminate\Http\Request $request){
    $userName=$request->cookie('user');
    return response("User name: " . ($userName ?? 'Cookie not found.'));
});

// Delete cookie
Route::get('delete-cookie', function(){
    $cookie=Cookie::forget('user');
    return response('Cookie has been deleted')->withCookie($cookie);
});


Route::resource('students', Student1Controller::class);