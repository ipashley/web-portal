<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\LoginnController;
use App\Http\Controllers\Controller;
use App\Models\staff;




Route::get('/names', [StaffController::class, 'index'])->name('staff');

Route::get('names/update', [StaffController::class, 'update'])->name('update');

Route::post('/names', [StaffController::class, 'store'])->name('store');














Route::get('/names/{editstaff}/edit', [StaffController::class, 'edit'])->name('edit');

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
 })->name('about');

Route::get('/', function () {
    return view('pages.landing_page');
});




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