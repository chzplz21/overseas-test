<div class = "row">
    <div class = "col-md-3">
        <div class = "bedButton">King</div>
        <div class = "bedButton">Daybed</div>
    </div>
    <div class = "col-md-9">
        @for($i=0; $i<$room->people; $i++) {
            <div class = "littlePerson">person</div>
        }
        @endfor
    </div>

</div>

<div class = "row">
    <div class = "col-md-9">
        sdfslkfdj

    </div>
    <div class = "col-md-3 priceDetails">
        <p>Price: {{$room->price}}</p>
        <p>Taxes: {{$room->price}}</p>
        <p>Fees: </p>
        <p>Total: </p>
    </div>

</div>

