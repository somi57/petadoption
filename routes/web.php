<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PinfoController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\AdoptionformController;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('welcome');
});

// // Route::get('/demo', function () {
// //     return view('demo');
// // });
// // Route::get('/dem', function () {
// //     return view('dem');
// });

Route::get('/home', function () {
    return view('homepage');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/pinfo', function () {
    return view('pinfo');
});
Route::get('/signup', function () {
    return view('signup');
});

Route::get('/adoptionform', function () {
    return view('adoptionform');
});

Route::get('/login', function () {
    return view('login');
 });
// Route::get('/demo', function () {
//     return view('demo');
// });
Route::fallback(function(){
    return "<h1>Page not found</h1>";
});
// Route::redirect('/homet','/home');

Route::get('/info', [PinfoController::class, 'create'])->name('pinfo.create');
Route::post('/info/store', [PinfoController::class, 'store'])->name('pinfo.store');

Route::get('/signup', [SignupController::class, 'create'])->name('signup.create');
Route::post('/signup/store', [SignupController::class, 'store'])->name('signup.store');

Route::get('/adoptionform', [AdoptionformController::class, 'create'])->name('adoptionform.create');
Route::post('/adoptionform/store', [AdoptionformController::class, 'store'])->name('adoptionform.store');

Route::get('/login', [LoginController::class, 'create'])->name('login.create');
Route::post('/login/store', [LoginController::class, 'store'])->name('login.store');



// Migration => Database ko table ho
// MVC
// M = Model => data => database ko relationship,  rules
// V = view = HTML + CSS = Blade
// C = Controller = logic Model + View
// Middleware = Auth -> profile