@extends('layouts.app')

@section('content')


   <h1>Overseas Leisure Test</h1>   

    @foreach ($hotels as $hotel)
        @include('hotel.hotel')  
    @endforeach


@endsection