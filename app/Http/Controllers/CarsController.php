<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Cars_type;
use App\Models\Link_cars_type;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CarsController extends Controller
{
    // create new records from the admin page 
    public function createNewData(Request $request){
        Log::info(json_encode($request->all()));
        try {
            // begin
            DB::beginTransaction();
            //creating new data for Cars table
            // upload image in database
            $request->validate([
                'nameCar' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            // Log::info('Image Path: ' . public_path('images') . '/' . $imageName);
            $newCar = new Cars;
            $newCar->image = 'images/'.$imageName;
            $newCar->name = $request->nameCar;
            $newCar->model = $request->modelCar;
            $newCar->year = $request->yearCar;
            $newCar->weekly_rate = $request->weekly_rate;
            $newCar->daily_rate = $request->daily_rate;
            $newCar->car_registration_nbr = $request->car_registration_nbr;
            $newCar->save();
            $car_id = $newCar->id;

            // creating new data for cars types
            $newCarType = new Cars_type;
            $newCarType->body_type = $request->body_type;
            $newCarType->nbr_places = $request->nbr_places;
            $newCarType->nbr_doors = $request->nbr_doors;
            $newCarType->save();
            $car_type_id = $newCarType->id;

            // creating new data for link table
            $newLink = new Link_cars_type;
            $newLink->car_id = $car_id;
            $newLink->car_type_id = $car_type_id;
            $newLink->save();

            //commit
            DB::commit();
            return redirect('/showAdmin')->with('Success!!!', 'New record inserted');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error("Error" . $e->getMessage());
            return back()->withError('Error during while saving the data');
        }
    }
    public function showCars () {
        $listCars = Cars::join('link_cars_types', 'link_cars_types.car_id', '=', 'cars.id')->join('cars_types', 'link_cars_types.car_type_id', '=', 'cars_types.id')->select('cars.name', 'cars.model', 'cars.weekly_rate','cars_types.nbr_places','cars_types.nbr_doors')->get();
        Log::info($listCars);
        return view('carviewpage', ['listCars' => $listCars]);

    }
}
