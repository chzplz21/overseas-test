
@foreach ($rooms as $room)
<div class = "singleRoomParent">
        <div class="row" data-id= "{{$room->id}}"">
                <p class = "roomDetails col-md-4">{{$room->name}}</p>
                <p class = "col-md-2 roomDetails">ON REQUEST</p>
                <p class = "col-md-2 roomDetails detailsButton">DETAILS</p>
                <p class = "col-md-2 roomDetails">{{$room->price}}</p>
                <p class = "col-md-2 roomDetails">REQUEST</p>
        </div>
        <div class = "roomFull container">         
        </div>
</div>
    
@endforeach

