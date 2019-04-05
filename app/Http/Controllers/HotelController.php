<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotels;
use App\Models\Rooms;
use App\Models\User;
use App\Models\Bookings;
use App\Models\LogHotelClicks;
use App\Models\LogRoomClicks;
use Illuminate\Support\Facades\Log;

class HotelController extends Controller
{
    public function hotels() {
        $hotels = Hotels::all();
        foreach ($hotels as $hotel) {
            $hotel->img = str_replace(" ", "-", $hotel->name);
            $hotel->img = strtolower($hotel->img);
         
           
        }

        return view('home')->with('hotels', $hotels);
    }

    //fetches all rooms, adds rooms to blade template
    //returns blade template back to javascript. javascript will render the template
    public function rooms(Request $request) {
        
        $hotelID = $request->query('id');
        $hotelID = str_replace("hotel-", "", $hotelID);
    
        $rooms = Rooms::all();

        //append hotel name to rooms collection
        $hotel = Hotels::where('id', '=', $hotelID)->first();
        foreach ($rooms as $room) {
            $room->hotelName = $hotel->name;
            $room->total = self::calcRoomTotal($room);
           
        }
        
       

        $returnHTML = view('hotel.roomsList')->with('rooms', $rooms)->render();

        return response()->json([
            'html' => $returnHTML
            
        ]);
        
    }

     //fetches details for single room
    //returns blade template back to javascript. javascript will render the template
    public function roomDetails(Request $request) {
        $roomID = $request->query('id');
        $roomID = str_replace("room-", "", $roomID);
        $room = Rooms::where('id', $roomID)->first();
        $room->total = self::calcRoomTotal($room);
        
       
        $returnHTML = view('hotel.roomDetails')->with('room', $room)->render();
        return response()->json([
            'html' => $returnHTML
            
        ]);
        

    }



    public function logClick(Request $request) {
        $fullID = $request->id;
        $piecesOfID = explode("-", $fullID);
        $typeOfPlace = $piecesOfID[0];
        $idOfPlace = $piecesOfID[1];
        if ($typeOfPlace == "hotel") {
            $LogHotel = new LogHotelClicks;
            $LogHotel->hotel_id = $idOfPlace;
            $LogHotel->save();

        }else {
            $LogRoom = new LogRoomClicks;
            $LogRoom->room_id = $idOfPlace;
            $LogRoom->save();
        }

        //Log::info($idOfPlace);


    }


    public static function calcRoomTotal($room) {
        $total = $room->price * 1.14;
        return $total;

    }


    


}
