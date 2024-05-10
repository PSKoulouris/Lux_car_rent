<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FilterController extends Controller
{
    public function showFilterCars(Request $request) {
        // try to retrieve the data!?
        //join all the tables cars, cars_types, link_tables and availabilities, beacause location is inside availabilities
        $querySQL = Cars::join('link_cars_types', 'link_cars_types.car_id', '=', 'cars.id')
            ->join('cars_types', 'link_cars_types.car_type_id', '=', 'cars_types.id')
            ->leftJoin('availabilities', 'availabilities.car_id', '=', 'cars.id')
            ->select('cars.id','cars.image','cars.name','cars.model','cars.year', 'cars.weekly_rate', 'cars.daily_rate','cars.car_registration_nbr','cars_types.body_type','cars_types.nbr_places','cars_types.nbr_doors','cars_types.fuel')
            ->distinct();
    
        // Filter by location !?
        if ($request->has('location')) {
            $location = $request->input('location'); // name of the input
            $querySQL->where('availabilities.location', $location);
        }
        $listCars = $querySQL->get();
        // Log the retrieved cars for debugging
        Log::info($listCars);
    
        // Pass the list of cars to the view
        return view('carviewpage', ['listCars' => $listCars]);
    }
}

