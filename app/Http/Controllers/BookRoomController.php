<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rooms;
use App\Models\User;
use App\Models\Bookings;

class BookRoomController extends Controller
{
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
         
    
            $user = User::where('email', $request->email)->first();
    
    
            $hotel_id = $request->hotel_id;
            $hotel_id = explode("-", $hotel_id);
            $hotel_id = $hotel_id[1];
            
            $booking = new Bookings;
            $booking->user_id = $user->id;
            $booking->room_id = $room->id;
    
    
            $booking->hotel_id = $hotel_id;
            $booking->date = $room->date;
            $booking->total = HotelController::calcRoomTotal($room);
         
            $booking->creditCard = $request->creditCard;
            $booking->creditCardNumber = $request->creditCardNumber;
            $booking->save();
            
            
           
        }
}
