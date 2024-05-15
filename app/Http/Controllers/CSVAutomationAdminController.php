<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Cars_type;
use App\Models\Link_cars_type;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CSVAutomationAdminController extends Controller
{
    public function uploadCsv(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|mimes:csv,txt|max:2048',
        ]);

        $path = $request->file('csv_file')->getRealPath();
        $file = fopen($path, 'r');
        $header = fgetcsv($file);

        DB::beginTransaction();

        try {
            while ($row = fgetcsv($file)) {
                $data = array_combine($header, $row);

                $newCar = new Cars;
                $newCar->image = 'images/' . $data['image']; // Assuming the CSV contains the image file name
                $newCar->name = $data['nameCar'];
                $newCar->model = $data['modelCar'];
                $newCar->year = $data['yearCar'];
                $newCar->weekly_rate = $data['weekly_rate'];
                $newCar->daily_rate = $data['daily_rate'];
                $newCar->car_registration_nbr = $data['car_registration_nbr'];
                $newCar->save();

                $car_id = $newCar->id;

                $newCarType = new Cars_type;
                $newCarType->body_type = $data['body_type'];
                $newCarType->nbr_places = $data['nbr_places'];
                $newCarType->nbr_doors = $data['nbr_doors'];
                $newCarType->fuel = $data['fuel'];
                $newCarType->save();

                $car_type_id = $newCarType->id;

                $newLink = new Link_cars_type;
                $newLink->car_id = $car_id;
                $newLink->car_type_id = $car_type_id;
                $newLink->save();
            }

            DB::commit();
            return redirect('/showAllRecords')->with('Success!!!', 'New records inserted from CSV');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error("Error" . $e->getMessage());
            return back()->withError('Error during while saving the data');
        }
    }
    
}

