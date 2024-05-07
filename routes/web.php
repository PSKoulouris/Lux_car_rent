<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// route for adminTest.blade.php
Route::get('/showAdmin', function(){
    return view('adminTest');
});
Route::post('/createDataAdmin', [CarsController::class,'createNewData'])->name('createCars');
// show cars for car view
Route::get('/showCars', [CarsController::class, 'showCars'])->name('showcars');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/view', function () {
    return view('carviewpage');
})->name('carviewpage');


Route::get('/about', function () {
    return view('aboutus');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/booking', function () {
    return view('bookingpage');
});
 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
