<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\AirportSearchController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/tours', function(){
    return view('tours');
});

Route::get('/hotels', function(){
    return view('hotels');
});

Route::get('/cabs', function(){
    return view('cabs');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/register', function(){
    return view('register');
});


Route::get('/dashboard', function(){
    return view('user/dashboard');
});

Route::get('/profile', function(){
    return view('user/profile');
});

Route::get('/contact', function(){
    return view('contact');
});
// Route::get('/search', [AirportSearchController::class, 'index'])->name('airport.index');
// Route::get('/searchresult', [AirportSearchController::class, 'search'])->name('airport.search');
Route::get('/airport-autocomplete', [AirportSearchController::class, 'autocomplete'])->name('airport.autocomplete');
