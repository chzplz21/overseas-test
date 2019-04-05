<form method = "post"  class = "modalForm" >

    @if(count($errors))
        <div class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
            {{$error}}
            <br>
        @endforeach

        </div>

    @endif
   
   <p class = "BookingDetails nameOfPlace"> {{$room->hotelName}}</p>
   <p class = "BookingDetails nameOfPlace"> {{$room->name}}</p>
   <div class = "bookingSmallDetails">
    <p class = "BookingDetails"> Date: {{$room->date}}</p>
    <p class = "BookingDetails "> Price: {{$room->price}}</p>
    <p class = "BookingDetails "> Taxes: {{$room->taxes}}</p>
    <p class = "BookingDetails "> Total: {{$room->total}}</p>
   </div>


    {{ csrf_field() }}
    <div class="form-group">
            <label >Name</label>
            <input name = "name" class="form-control modalInput name" >
            <label >Email</label>
            <input name = "email" class="form-control modalInput email" >   
            <label >Credit Card</label>
            <input name = "creditCard" class="form-control modalInput creditCard" >
            <label >Credit Card Number</label>
            <input name = "creditCardNumber" class="form-control modalInput creditCardNumber" >
            <input name = "roomID" type="hidden" value = "{{$room->id}}">

    </div>

    <button type="button" class="btn btn-primary modalSubmit">Submit</button>
    <button type="button" class="btn btn-danger modalCancel">Cancel</button>

</form>