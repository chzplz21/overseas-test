<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotels;
use App\Models\Rooms;
use App\Models\User;
use App\Models\Bookings;
use Illuminate\Support\Facades\Log;

class HotelController extends Controller
{
    public function hotels() {
        $hotels = Hotels::all();
        return view('home')->with('hotels', $hotels);
    }

    //fetches all rooms, adds rooms to blade template
    //returns blade template back to javascript. javascript will render the template
    public function rooms(Request $request) {
        $hotelID = $request->query('id');
        $rooms = Rooms::where('rooms.hotel_id', '=', $hotelID)->get();
        $returnHTML = view('hotel.roomsList')->with('rooms', $rooms)->render();

        return response()->json([
            'html' => $returnHTML
            
        ]);
        
    }

     //fetches details for single room
    //returns blade template back to javascript. javascript will render the template
    public function roomDetails(Request $request) {
        $roomID = $request->query('id');
    
        $room = Rooms::where('id', $roomID)->first();
        $tax = $room->taxes + 1;
        $total = ($room->price * $tax) + $room->fees;
        $room->total = $total;
       
        
        $returnHTML = view('hotel.roomDetails')->with('room', $room)->render();
        return response()->json([
            'html' => $returnHTML
            
        ]);
        

    }

    //handles booking a room
    public function store(Request $request) {
       
        $validator =  $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'creditCard' => 'required',
            'creditCardNumber' => 'required',
        ]);


        $userFind = User::where('email', $request->email)->first();
        
        //Checks if user already exists. If not, then create new user
        if ($userFind == null) {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
        }
           
        $id = $request->roomID; 
        $room = Rooms::where('id', $id)->first();
        Log::info($room);

        $user = User::where('email', $request->email)->first();
        
        $booking = new Bookings;
        $booking->user_id = $user->id;
        $booking->room_id = $room->id;
        $booking->date = $room->date;
        $booking->price = $room->price;
        $booking->taxes = $room->taxes;
        $booking->fees = $room->fees;
        $booking->creditCard = $request->creditCard;
        $booking->creditCardNumber = $request->creditCardNumber;
        $booking->save();
        
        
       
    }

}
