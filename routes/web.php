<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\bxc;
use App\Http\Controllers\bae;
use App\Http\Controllers\EmployeeController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', function () {
    return view('user');
});
// Route::get('/demo', function () {
//     return view('HELLO');
// });

Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/home', function () {
    return view('HOMe');
});
Route::get('/contact', function () {
    return view('Contact');
});
Route::get('/about', function () {
    return view('about-us');
});
Route::get('/LPU', function () {
    return view('LPU.ak');
});
Route::get('/page', function () {
    return view('LPU.header').view('LPU.body').view('LPU.footer');
});
Route::get('/abc', function () {
    return view('LPU.footer');
});
Route::get('/list', function () {
    return view('List');
});


Route::get("users/{id}",[bae::class,'index']);
Route::get("bae/{id}",[User::class,'index']);
Route::get("bX1/{id}",[bxc::class,'index']);



Route::get('/employees', [EmployeeController::class, 'index']);


use App\Http\Controllers\formcontroller;

Route::get('/form', [formcontroller::class, 'create'])->name('form.create');
Route::post('/form', [formcontroller::class, 'store'])->name('form.store');

//cookie routing part
use App\Http\Controllers\CookieController;

Route::get('/set-cookie', [CookieController::class, 'setCookie']);
Route::get('/get-cookie', [CookieController::class, 'getCookie']);
Route::get('/delete-cookie', [CookieController::class, 'deleteCookie']);


use App\Http\Controllers\SessionController;

Route::get('/set-session', [SessionController::class, 'setSession']);
Route::get('/get-session', [SessionController::class, 'getSession']);
Route::get('/delete-session', [SessionController::class, 'deleteSession']);

use App\Http\Controllers\caFormController;

Route::get('/caform', [caFormController::class, 'showForm']);
Route::post('/caform', [caFormController::class, 'handleForm']);



// use App\Http\Controllers\userController;

// Route::get('/user/{username}/{age}', [userController::class, 'show']);