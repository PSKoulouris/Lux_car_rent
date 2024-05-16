<?php

namespace App\Http\Controllers;

use App\Models\Booking;
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
    public function detailsofbooking(Request $request){
        try {
            DB::beginTransaction();
            $newBooking = new Booking;
            $newBooking->start_date = $request->startdate;
            $newBooking->return_date = $request->enddate;
            $newBooking->amount=$request->amount;
            // $newBooking->user_id = $request->user_id;
            // $newBooking->car_id = $request->car_id;
            //fetch the user's id 
            $newBooking->user_id = Auth::user();
            // fetch cars id
            $existingCar = Cars::first();
            if ($existingCar) {
               $newBooking->car_id =  $existingCar->id;
            } else {
                return back()->with('error', 'No cars available for booking at the moment.');
            }
            $newBooking->save();
            DB::commit();
            return redirect('/bookingconform')->with('success', 'Thank you for your choise!');
            // ->with('message', 'Thanks for booking!')
        } catch (Exception $e) {
            DB::rollBack();
            Log::error("Error creating BOOKING!!!" . $e->getMessage());
            return back()->withError("Error creating BOOKING!!!");
        }
        // dd($request->all());
    }
}
