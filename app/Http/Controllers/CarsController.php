<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Cars_type;
use App\Models\Link_cars_type;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CarsController extends Controller
{
    
    // this is the list of the cars from carviewpage!!!!
    public function showCars () {
        $listCars = Cars::join('link_cars_types', 'link_cars_types.car_id', '=', 'cars.id')
        ->join('cars_types', 'link_cars_types.car_type_id', '=', 'cars_types.id')
        ->select('cars.image','cars.id','cars.name', 'cars.model', 'cars.daily_rate', 'cars.weekly_rate','cars_types.nbr_places','cars_types.nbr_doors')->get();
        Log::info($listCars);
        return view('carviewpage', ['listCars' => $listCars]);
    }

    // show only one specific car in the booking page
    // if we have time, it must be a shorter way to do it WITH()method 

    //     public function showBookingCard($id){
    //         $car=Cars::with(['cars_types'])->find($id);
    //         dd($car);
    //     }
    // }
    public function showCarDetails ($id) {
        $singlecarinfo=Cars::join('link_cars_types', 'link_cars_types.car_id', '=', 'cars.id')
        ->join('cars_types', 'link_cars_types.car_type_id', '=', 'cars_types.id')
        ->select('cars.id','cars.image','cars.name','cars.model','cars.year', 'cars.weekly_rate', 'cars.daily_rate','cars.car_registration_nbr','cars_types.body_type','cars_types.nbr_places','cars_types.nbr_doors','cars_types.fuel')
        ->where('cars.id','=', $id)
        ->get()
        ->find($id);
         return view('cardetails',['singlecar' => $singlecarinfo]);
         //dd($singlecarinfo);
    }

    public function showBookingDetails ($id) {
        $singlecarinfo=Cars::join('link_cars_types', 'link_cars_types.car_id', '=', 'cars.id')
        ->join('cars_types', 'link_cars_types.car_type_id', '=', 'cars_types.id')
        ->select('cars.id','cars.image','cars.name','cars.model','cars.year', 'cars.weekly_rate', 'cars.daily_rate','cars.car_registration_nbr','cars_types.body_type','cars_types.nbr_places','cars_types.nbr_doors','cars_types.fuel')
        ->where('cars.id','=', $id)
        ->get()
        ->find($id);
        $users = Auth::user();
        // dd($users);
         return view('bookingpage',['singlecar' => $singlecarinfo, 'users' => $users]);
         //dd($singlecarinfo);
         //)
    }
   
    public function showapiCars () {
        $listCars = Cars::join('link_cars_types', 'link_cars_types.car_id', '=', 'cars.id')
        ->join('cars_types', 'link_cars_types.car_type_id', '=', 'cars_types.id')
        ->select('cars.image','cars.id','cars.name', 'cars.model', 'cars.weekly_rate','cars_types.nbr_places','cars_types.nbr_doors')->get();
        Log::info($listCars);
        return response()->json($listCars);
    }
    public function showBookingapiCard ($id) {
        $singlecarinfo=Cars::join('link_cars_types', 'link_cars_types.car_id', '=', 'cars.id')
        ->join('cars_types', 'link_cars_types.car_type_id', '=', 'cars_types.id')
        ->select('cars.id','cars.image','cars.name','cars.model','cars.year', 'cars.weekly_rate', 'cars.daily_rate','cars.car_registration_nbr','cars_types.body_type','cars_types.nbr_places','cars_types.nbr_doors','cars_types.fuel')
        ->where('cars.id','=', $id)
        ->get()
        ->find($id);
        return response()->json($singlecarinfo);
         //dd($singlecarinfo);
    }
    // moved the function in the BookingController
    // public function showBookingDetails ($id) {
    //     $singlecarinfo=Cars::join('link_cars_types', 'link_cars_types.car_id', '=', 'cars.id')
    //     ->join('cars_types', 'link_cars_types.car_type_id', '=', 'cars_types.id')
    //     ->select('cars.id','cars.image','cars.name','cars.model','cars.year', 'cars.weekly_rate', 'cars.daily_rate','cars.car_registration_nbr','cars_types.body_type','cars_types.nbr_places','cars_types.nbr_doors','cars_types.fuel')
    //     ->where('cars.id','=', $id)
    //     ->get()
    //     ->find($id);
    //      return view('bookingpage',['singlecar' => $singlecarinfo]);
         //dd($singlecarinfo);
    // }
}


