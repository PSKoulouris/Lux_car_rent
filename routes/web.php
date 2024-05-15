
<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomersController;
use Illuminate\Support\Facades\Route;

// route for admin
Route::get('/showAllRecors', [AdminController::class, 'showAllRecords'])->name('showAllRecors');
Route::post('/createDataAdmin', [AdminController::class,'createNewData'])->name('createCars');
Route::post('/updateDataAdmin/{id1}/{id2}' , [AdminController::class, 'updateDataAdmin'])->name('updateCars');
Route::post('/deleteDataAdmin/{id}', [AdminController::class, 'deleteDataAdmin'])->name('deleteCar');

// filter route
Route::get('/filterCars', [FilterController::class, 'showFilterCars'])->name('filterCars');
// Route::get('/filterCars', [FilterController::class, 'showFilterCarsByFuel'])->name('filterCars');

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
Route::get('/cardetails', function () {
    return view('cardetails');
});
 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/mybooking', function(){
        return view("profile/mybooking");
    })->name('profile.booking');
    Route::get('/myfeedback', function(){
        return view("profile/partials/myfeedback");
    })->name('profile.feedback');
    // Route::post('/customerprofile',[CustomersController::class,'store'])->name('customers.profile');
});

// Creating api routes to first test in postman
Route::get('/api/showCars', [CarsController::class, 'showapiCars'])->name('showapicars');

Route::get('/api/filterCars', [FilterController::class, 'showFilterapiCars'])->name('filterapiCars');

Route::get('/api/showbooking/{id}',[CarsController::class,'showBookingapiCard'])->name('apisearch');

require __DIR__.'/auth.php';



//routes for csv automation controller: Philippe
use App\Http\Controllers\CSVAutomationAdminController;
Route::post('/uploadCsv', [CSVAutomationAdminController::class, 'uploadCsv'])->name('uploadCsv');
Route::get('/showAllRecords2', [CSVAutomationAdminController::class, 'showAllRecords'])->name('showAllRecords2');
    
