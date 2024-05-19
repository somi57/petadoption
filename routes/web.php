<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PinfoController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('homepage');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/pinfo', function () {
    return view('pinfo');
});

Route::get('/info', [PinfoController::class, 'create'])->name('pinfo.create');
Route::post('/info/store', [PinfoController::class, 'store'])->name('pinfo.store');

// Migration => Database ko table ho
// MVC
// M = Model => data => database ko relationship,  rules
// V = view = HTML + CSS = Blade
// C = Controller = logic Model + View
// Middleware = Auth -> profile