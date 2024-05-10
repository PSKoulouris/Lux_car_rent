<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// route for admin
Route::get('/showAllRecors', [AdminController::class, 'showAllRecords'])->name('showAllRecors');
Route::post('/createDataAdmin', [AdminController::class,'createNewData'])->name('createCars');
Route::post('/updateDataAdmin/{id1}/{id2}' , [AdminController::class, 'updateDataAdmin'])->name('updateCars');
Route::post('/deleteDataAdmin/{id}', [AdminController::class, 'deleteDataAdmin'])->name('deleteCar');

// filter route
Route::get('/filterCarsByLocation', [FilterController::class, 'showFilterCars'])->name('filterCarsByLocation');
// show cars for car view
Route::get('/showCars', [CarsController::class, 'showCars'])->name('showcars');

 Route::get('/showbooking/{id}', [CarsController::class, 'showBookingCard'])->name('search');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route for Rental agreement page
Route::get('/rental_agreement', function () {
    return view('rental_agreement');
})->name('rental_agreement');

Route::get('/view', function () {
    return view('carviewpage');
})->name('carviewpage');


Route::get('/about', function () {
    return view('aboutus');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
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
