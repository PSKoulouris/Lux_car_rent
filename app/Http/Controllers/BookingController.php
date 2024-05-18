<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Cars;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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
            $newBooking->user_id = Auth::id();
            // fixed, checked with dd()
            // fetch cars id
            $existingCarId = $request->input('car_id');
            $existingCar = Cars::find($existingCarId);
            if ($existingCar) {
               $newBooking->car_id = $existingCar->id;
            } else {
                return back()->with('error', 'No cars available for booking at the moment.');
            }
            $newBooking->save();
            DB::commit();
            // dd($newBooking);
            return redirect('/mybooking');
            // ->with('message', 'Thanks for booking!')
        } catch (Exception $e) {
            DB::rollBack();
            Log::error("Error creating BOOKING!!!" . $e->getMessage());
            return back()->withError("Error creating BOOKING!!!");
        }
        // dd($request->all());
    }

    public function showHistoryBookings(){
        $userID = auth()->id();
        $listBookings = Cars::join('bookings', 'bookings.car_id', '=', 'cars.id')
        ->select('bookings.start_date', 'bookings.return_date', 'bookings.amount', 'cars.image','cars.name', 'cars.model', 'cars.car_registration_nbr')
        ->where('bookings.user_id', '=', $userID)
        ->get();
        
        return view('profile/mybooking', ['listBookings'=> $listBookings]);
    }
}
