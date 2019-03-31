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
        $request = "boo";
        $hotel = new HotelController;
        $rooms = $hotel->rooms($request);
        fwrite(STDERR, print_r($rooms, TRUE));

        //$this->assertTrue(true);
    }

    public function testSingleRoom()
    {   
        $id = 1;
        //$getRequest = $this->get('/user', ['id' => 1]);
        $hotel = new HotelController;
        $room = $hotel->roomDetails($id);
        fwrite(STDERR, print_r($room, TRUE));

        //$this->assertTrue(true);
    }
}
