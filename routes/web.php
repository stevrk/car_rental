<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/', function () {
    return view('pages.home');
}); */

Route::get('/cars', function () {
    return view('pages.cars');
});

Route::get('/locations', function () {
    return view('pages.locations');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});


Route::get('/booking', function () {
    return view('pages.booking');
});