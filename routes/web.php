<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.registration');
});
 Route::get('/dashboard',function (){
    return view('pages.dashboard');
 });
 Route::get('/aboutus',function (){
    return view('pages.aboutus');
 });
