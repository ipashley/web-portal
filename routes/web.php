<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\staffController;
use App\Models\staff;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.registration');
});
 Route::get('/dashboard',function (){
    return view('pages.dashboard');
 });
 Route::get('/landing',function (){
    return view('pages.landing');
 });

 Route::get('/staff', function (){
   $allStaffs = staff::all();
   //  Pass the data to the view
   return view('pages.staff', ['staffs' => $allStaffs]);
})->name('pages.staff');

Route::get('/login',function (){
   return view('pages.login');
});
Route::get('/myAdmin',function (){
   return view('pages.myAdmin');
})->name('pages.myAdmin');
// Route::resource('pages', 'app/Http/controller/staffController');
Route::post('/register', [staffController::class, 'store'])->name('pages.store');
// Route::get('/admin', [staffController::class, 'myAdmin'])->name('pages.myAdmin');