Here Are the clicks in the last 20 minutes:

<br>

@foreach ($allClicks as $click)

    <p>{{$click->name}}</p>
    <p>{{$click->created_at}}</p>

<br>

@endforeach

