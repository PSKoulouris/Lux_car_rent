
<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
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
Route::get('/filterCars', [FilterController::class, 'showFilterCars'])->name('filterCars');
// Route::get('/filterCars', [FilterController::class, 'showFilterCarsByFuel'])->name('filterCars');

// show cars for car view
Route::get('/showCars', [CarsController::class, 'showCars'])->name('showcars');

//  Route::get('/showbooking/{id}', [CarsController::class, 'showBookingCard'])->name('search');
Route::get('/carDetails/{id}', [CarsController::class, 'showCarDetails'])->name('search');

// just for friday purpose
// Route::post('/bookingconform',function(){
//     echo "working";
// })->name('bookingdetails');

Route::post('/bookingconform',[BookingController::class,'detailsofbooking'])->name('bookingdetails');
//for the moment we have this 
// Route::get('/Success', function(){
//     return view('succes');
// });

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

    // route Booking page
    Route::get('/booking/{id}',[CarsController::class, 'showBookingDetails']);

    Route::get('/showUserDetails', [BookingController::class, 'showUserDetails'])->name('show.userDetails');
    
    // Profile/ Mybookings history
    Route::get('/mybooking', [BookingController::class, 'showHistoryBookings'])->name('profile.booking');

    Route::get('/myfeedback', function(){
        return view("profile/partials/myfeedback");
    })->name('profile.feedback');
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
    
