<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotels;

class HomeController extends Controller
{
    public function index() {

        $hotels = Hotels::all();
        return view('home')->with('hotels', $hotels);
    }
}
