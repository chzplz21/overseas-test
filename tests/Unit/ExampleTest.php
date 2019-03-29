<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\HotelController;

class HotelTests extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRoomsRetrieve()
    {   
        //$request = ""
        $hotel = new HotelController;
        $rooms = $hotel->rooms($request);
        fwrite(STDERR, print_r($rooms, TRUE));
        //$this->assertTrue(true);
    }
}
