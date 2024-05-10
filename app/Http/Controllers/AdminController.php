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

class AdminController extends Controller
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

            //define the car_id
            $car_id = $newCar->id;

            // creating new data for cars types
            $newCarType = new Cars_type;
            $newCarType->body_type = $request->body_type;
            $newCarType->nbr_places = $request->nbr_places;
            $newCarType->nbr_doors = $request->nbr_doors;
            $newCarType->fuel = $request->fuel;
            $newCarType->save();

            //define the car_type_id
            $car_type_id = $newCarType->id;

            // creating new data for link table
            $newLink = new Link_cars_type;
            $newLink->car_id = $car_id;
            $newLink->car_type_id = $car_type_id;
            $newLink->save();

            //commit
            DB::commit();
            return redirect('/showAllRecors')->with('Success!!!', 'New record inserted');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error("Error" . $e->getMessage());
            return back()->withError('Error during while saving the data');
        }
    }

     //show all Cars records
     public function  showAllRecords(){
        $listRecords = Cars::join('link_cars_types', 'link_cars_types.car_id', '=', 'cars.id')
        ->join('cars_types', 'link_cars_types.car_type_id', '=', 'cars_types.id')
        // i didn't use select * because is gave some alias
        ->select('cars.id as id_cars','cars.image','cars.name', 'cars.model', 'cars.year', 'cars.weekly_rate', 'cars.daily_rate','cars_types.nbr_places','cars_types.id as id_cars_types','cars_types.body_type','cars_types.nbr_places','cars_types.nbr_doors','cars_types.fuel')
        ->get();
        return view('/adminCarRent/adminCars-Types', ['listRecords' => $listRecords]);
    }

    // update the records from cars, cars_types
    public function updateDataAdmin(Request $request, $id1, $id2) {
        Log::info(json_encode($request->all()));
        try {
            //begin db transaction
            DB::beginTransaction();
            // find Cars id
            $existingCar = Cars::find($id1);
            $existingCar->image = $request->image;
            $existingCar->name = $request->nameCar;
            $existingCar->model = $request->modelCar;
            $existingCar->year = $request->yearCar;
            $existingCar->weekly_rate = $request->weekly_rate;
            $existingCar->daily_rate = $request->daily_rate;
            $existingCar->car_registration_nbr = $request->car_registration_nbr;
            $existingCar->save();
            // find Cars_type id
            $existingCarType=Cars_type::find($id2);
            $existingCarType->body_type = $request->body_type;
            $existingCarType->nbr_places = $request->nbr_places;
            $existingCarType->nbr_doors = $request->nbr_doors;
            $existingCarType->fuel = $request->fuel;
            $existingCarType->save();
            //commit the transaction
            DB::commit();
            return redirect('/showAllRecors');
        } catch (Exception $e) {
            // if an exceptio happend, rollback transaction
            DB::rollBack();
            //laravel.log error
            Log::error("Failed to update" . $e->getMessage());
            //redirect with an error
            return back()->withError("Failed to update");
        }
    } 

    //delete function, very dangerous function!!!!!, USE in case of extreme needed
    public function deleteDataAdmin($id){
        try {
            DB::beginTransaction();
            $allRecords = Link_cars_type::where('id_cars_types', $id)->delete();
            $allCars = Cars_type::where('id', $id)->delete();
            DB::commit();
            return redirect('/showAllRecors')->with("Success"," Record deleted");
        } catch (Exception $e) {
            // if an exceptio happend, rollback transaction
            DB::rollBack();
            //laravel.log error
            Log::error("Failed to update" . $e->getMessage());
            //redirect with an error
            return back()->withError("Failed to update");
        }
    }
}
