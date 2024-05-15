<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FilterController extends Controller
{
    public function showFilterCars(Request $request) {
        try {
            //i'm not sure that it's working
            // try to retrieve the data!?
            //join all the tables cars, cars_types, link_tables and availabilities, beacause location is inside availabilities
            $querySQL = Cars::join('link_cars_types', 'link_cars_types.car_id', '=', 'cars.id')
            ->join('cars_types', 'link_cars_types.car_type_id', '=', 'cars_types.id')
            ->leftJoin('availabilities', 'availabilities.car_id', '=', 'cars.id')
            ->select('cars.id','cars.image','cars.name','cars.model','cars.year', 'cars.weekly_rate', 'cars.daily_rate','cars.car_registration_nbr','cars_types.body_type','cars_types.nbr_places','cars_types.nbr_doors','cars_types.fuel', 'availabilities.location');
            // Log::info('Generate SQL Query: '. $querySQL->toSql());
            // Filter by location !?
          // dd($request->all());
            //dd($querySQL);
            if ($request->has('location')) {
                $location = $request->input('location'); // name of the input
                $querySQL->whereIn('availabilities.location', $location);
            }
            // filter BY fuel !!!
            if($request->has('fuel')){
                $fuel = $request->input('fuel');
                $querySQL->whereIn('cars_types.fuel', $fuel);
            }

             $listCars = $querySQL->get();
            //  dd($listCars );
            // Log the retrieved cars for debugging
            Log::info($listCars);

            // Pass the list of cars to the view
            return view('carviewpage', ['listCars' => $listCars]);
        } catch (Exception $e) {
            Log::error('DB error '. $e->getMessage());
            return response()->json(['error' => 'Database'], 500);
        }
    }

    // public function showFilterCarsByFuel (Request $request){
    //     $querySQL = Cars::join('link_cars_types', 'link_cars_types.car_id', '=', 'cars.id')
    //     ->join('cars_types', 'link_cars_types.car_type_id', '=', 'cars_types.id')
    //     ->select('cars.id','cars.image','cars.name','cars.model','cars.year', 'cars.weekly_rate', 'cars.daily_rate','cars.car_registration_nbr','cars_types.body_type','cars_types.nbr_places','cars_types.nbr_doors','cars_types.fuel')
    //     ->distinct();

    //     if($request->has('fuel')){
    //         $fuel = $request->input('fuel');
    //         $querySQL->where('cars_types.fuel',$fuel);
    //     }
    //     $listCars = $querySQL->get();
    //     // Log::info($listCars);
    //     return view('carviewpage', ['listCars' => $listCars]);
    // }

    public function showFilterapiCars(Request $request) {
        try {
            //i'm not sure that it's working
            // try to retrieve the data!?
            //join all the tables cars, cars_types, link_tables and availabilities, beacause location is inside availabilities
            $querySQL = Cars::join('link_cars_types', 'link_cars_types.car_id', '=', 'cars.id')
            ->join('cars_types', 'link_cars_types.car_type_id', '=', 'cars_types.id')
            ->leftJoin('availabilities', 'availabilities.car_id', '=', 'cars.id')
            ->select('cars.id','cars.image','cars.name','cars.model','cars.year', 'cars.weekly_rate', 'cars.daily_rate','cars.car_registration_nbr','cars_types.body_type','cars_types.nbr_places','cars_types.nbr_doors','cars_types.fuel', 'availabilities.location');
            // Log::info('Generate SQL Query: '. $querySQL->toSql());
            // Filter by location !?
          // dd($request->all());
            //dd($querySQL);
            if ($request->has('location')) {
                $location = $request->input('location'); // name of the input
                $querySQL->whereIn('availabilities.location', $location);
            }
            // filter BY fuel !!!
            if($request->has('fuel')){
                $fuel = $request->input('fuel');
                $querySQL->whereIn('cars_types.fuel', $fuel);
            }

             $listCars = $querySQL->get();
             dd($listCars );
            // Log the retrieved cars for debugging
            Log::info($listCars);

            // Pass the list of cars to the view
          return response()->json($listcars);
        } catch (Exception $e) {
            Log::error('DB error '. $e->getMessage());
            return response()->json(['error' => 'Database'], 500);
        }
    }
}