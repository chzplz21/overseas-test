
@foreach ($rooms as $room)
<div class = "singleRoomParent" data-id= "{{$room->id}}">
        <div class="row" >
                <p class = "roomDetails col-md-4">{{$room->name}}</p>
                <p class = "col-md-2 roomDetails">ON REQUEST</p>
                <p class = "col-md-2 roomDetails detailsButton">DETAILS</p>
                <p class = "col-md-2 roomDetails">{{$room->price}}</p>
                <p class = "col-md-2 roomDetails requestButton">REQUEST</p>
        </div>
        <div class = "roomFull container">         
        </div>
        <div class = "modalWrapper">   
                
                @include('modal.modal')
                @include('modal.thankyou') 
                     
        </div>
</div>
    
@endforeach

