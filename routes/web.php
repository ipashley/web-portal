<?php

use App\Http\Controllers\Controller;
use App\Models\staffs;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StafsController;
use App\Http\Controllers\LoginnController;




 
Route::get('/aboutus',function (){
    return view('pages.aboutus');
 })->name('about');


Route::get('/landing_page', function () {
    return view('pages.landing_page');
})->name('landing_page');
 
 Route::get('/staff', function (){
   $allStaffs = staffs::all();
   //  Pass the data to the view
   return view('pages.staff', ['staffs' => $allStaffs]);
})->name('pages.staff');


Route::get('/login',function (){
   return view('pages.login');
});

Route::get('/myAdmin',function (){
   $allStaffs = staffs::all();
   return view('pages.myAdmin',['staffs' => $allStaffs]);
})->name('pages.myAdmin');
Route::post('/register', [stafsController::class, 'store'])->name('pages.store');
Route::get('/pages/{id}', [stafsController::class, 'update'])->name('pages.update');
Route::get('/pages/{id}', [stafsController::class, 'destroy'])->name('pages.destroy'); 