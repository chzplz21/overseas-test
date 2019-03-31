@extends('layouts.app')

@section('content')


    
    <h1 id = "hey">Hey</h1>

    <input id = "kk"></input>

    

    @foreach ($hotels as $hotel)
        @include('hotel.hotel')  
    @endforeach


@endsection