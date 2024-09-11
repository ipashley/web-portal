<?php

use App\Http\Controllers\Controller;
use App\Models\staffs;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffsController;
use App\Http\Controllers\LoginnController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/names', [StaffsController::class, 'index'])->name('staff');

Route::get('names/update', [StaffsController::class, 'update'])->name('update');

Route::post('/names', [StaffsController::class, 'store'])->name('store');

Route::get('/names/{editstaff}/edit', [StaffsController::class, 'edit'])->name('edit');
Route::get('/view',[LoginnController::class, 'index'])->name('look');

Route::get('/view/login',[LoginnController::class, 'view'])->name('view');

Route::post('/view',[LoginnController::class, 'stored'])->name('stored');




Route::get('/', function () {
    return view('auth.registration');
});
 Route::get('/dashboard',function (){
    return view('pages.dashboard');
 });
 Route::get('/aboutus',function (){
    return view('pages.aboutus');
 });


Route::get('/landing_page', function () {
    return view('pages.landing_page');
});



Route::get('/', function () {
    return view('auth.registration');
});
 Route::get('/dashboard',function (){
    return view('pages.dashboard');
 });


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
Route::post('/register', [staffsController::class, 'store'])->name('pages.store');
Route::get('/pages/{id}', [staffsController::class, 'update'])->name('pages.update');
Route::get('/pages/{id}', [staffsController::class, 'destroy'])->name('pages.destroy'); 