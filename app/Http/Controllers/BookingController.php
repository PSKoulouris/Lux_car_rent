<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

use function PHPUnit\Framework\returnSelf;

class BookingController extends Controller
{
   
// Users
// id
// name
// email
// email_verified_at
// password
// driver_licence
// identification_data_proof
// address

//bookings
// id	start_date	return_date	amount	status	user_id	car_id

// cars 
// id	
// image	
// name	
// model	
// year	
// weekly_rate	
// daily_rate	
// car_registration_nbr
    // public function showUserDetails($id) {
    //     $booking=Cars::join('link_cars_types', 'link_cars_types.car_id', '=', 'cars.id')
    //     ->join('cars_types', 'link_cars_types.car_type_id', '=', 'cars_types.id')
    //     ->join('users')
    //     ->select('cars.id','cars.image','cars.name','cars.model','cars.year', 'cars.weekly_rate', 'cars.daily_rate','cars.car_registration_nbr','cars_types.body_type','cars_types.nbr_places','cars_types.nbr_doors','cars_types.fuel')
    //     ->where('cars.id','=', $id)
    //     ->get()
    //     ->find($id);
    //      return view('cardetails',['singlecar' => $singlecarinfo]);
        // $userid = Auth::user()
        // $users = User::join('bookings', 'bookings.user_id', '=', 'userid')
        // ->join('cars', 'bookings.cars_id', '=', 'cars.id')
        // ->select('cars.id','cars.image','cars.name','cars.model','cars.year', 'cars.weekly_rate', 'cars.daily_rate','cars.car_registration_nbr','users.id as userid','users.name as username','users.email','users.address')
        // ->where('userid','=', $id)
        // ->get()
        // ->find($id);
        
        // $users = User::select('name', 'address','email', 'id as userid')->where('userid', '=', $id)->get()->find($id);
    //     Log::info($users);
    //     return view('bookingpage', ['users' => $users]);
    // }
}
