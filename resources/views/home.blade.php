@extends('layouts.app')

@section('content')

    <h1>Hey</h1>

    @foreach ($hotels as $hotel)
        @include('hotel.hotel')  
    @endforeach


@endsection