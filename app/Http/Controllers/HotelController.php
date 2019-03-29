<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotels;
use App\Models\Rooms;

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
}
