<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\LogHotelClicks;
use App\Models\LogRoomClicks;
use Illuminate\Support\Facades\Mail;
use App\Mail\LogEmail;
use Illuminate\Support\Facades\Log;
use DateTime;
use Illuminate\Support\Facades\DB;


class SendLogEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'logEmails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends emails every 20 minutes of most recent clicks';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      //within 20 minutes 
      $date = new DateTime;
      $date->modify('-20 minutes');
      $formatted_date = $date->format('Y-m-d H:i:s');
      
      //Gets hotel clicks within last 20 minutes
      $RecentClicksHotels = DB::table('log_hotel_clicks')->
      join('hotels', 'log_hotel_clicks.hotel_id', '=', 'hotels.id')->
      select('log_hotel_clicks.created_at', 'hotels.name')->
      where('created_at', '>',$formatted_date)->get();

      //Gets room clicks within last 20 minutes
      $RecentClicksRooms = DB::table('log_room_clicks')->
      join('rooms', 'log_room_clicks.room_id', '=', 'rooms.id')->
      select('log_room_clicks.created_at', 'rooms.name')->
      where('created_at', '>',$formatted_date)->get();

      //merges hotel clicks with room clicks
      $allClicks = $RecentClicksHotels->merge($RecentClicksRooms);
      
      $recieverAddress = config('mail.username');

      Mail::to($recieverAddress)->send(new LogEmail($allClicks));
      return $allClicks;
       
     

    }
}
