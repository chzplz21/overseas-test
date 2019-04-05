
@foreach ($rooms as $room)

<div class = "singleRoomParent" data-id= "room-{{$room->id}}">
        <div class="row" >
                <p class = "roomDetails col-md-4">{{strtoupper($room->name)}}</p>
                <p class = "col-md-2 roomDetails onRequest">ON REQUEST</p>
                <p class = "col-md-2 roomDetails detailsButton">DETAILS</p>
                <p class = "col-md-2 roomDetails">{{$room->price}} <span class = "usd">USD per night</span></p>
                <p class = "col-md-2 roomDetails requestButton"><b>REQUEST</b></p>
        </div>
        <div class = "roomFull container">         
        </div>
        <div style="display: none" class = "modalWrapper">   
                @include('modal.modal')
                @include('modal.thankyou') 
                     
        </div>
</div>
    
@endforeach

