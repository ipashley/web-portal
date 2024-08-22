<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\LoginnController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/names', [StaffController::class, 'index'])->name('staff');

Route::get('names/update', [StaffController::class, 'update'])->name('update');

Route::post('/names', [StaffController::class, 'store'])->name('store');






Route::get('/names/{editstaff}/edit', [StaffController::class, 'edit'])->name('edit');








Route::get('/view',[LoginnController::class, 'index'])->name('look');

Route::get('/view/login',[LoginnController::class, 'view'])->name('view');

Route::post('/view',[LoginnController::class, 'stored'])->name('stored');


