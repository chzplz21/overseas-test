
<div class = "row">
    <div class = "col-md-3">
        <button class = "btn bedButton">King</button>
        <button class = "btn bedButton">Daybed</button>
    </div>
    <div class = "col-md-9">
        @for($i=0; $i<$room->people; $i++) 
            <i class="fas fa-user"></i>
    
        @endfor
    </div>

</div>

<div class = "row">
    <div class = "dateHolder col-md-9">
        <p>{{$room->date}}</p>
        <hr>
        <p>${{$room->price}} USD</p>
        <br>
        <p>Conditions and Offers:</p>
        <p>Meal Plan, Breakfast Included</p>


    </div>
    <div class = "col-md-3 priceDetails">
        <p>Price: {{$room->price}} USD</p>
        <p>Taxes: {{$room->taxes}} USD</p>
        <p>Fees: 0.00 USD</p>
        <p>Total: <b>{{$room->total}}</b> USD</p>
    </div>

</div>

