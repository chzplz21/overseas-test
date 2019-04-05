<html>

<head>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!--
    <link rel="shortcut icon" href="{{{ asset('images/favicon.ico') }}}">
    -->
    <link rel = "stylesheet" href = "{{asset('public/css/custom.css')}}">
    <link rel = "stylesheet" href = "{{asset('public/css/roomDetails.css')}}">
    <link rel = "stylesheet" href = "{{asset('public/css/modal.css')}}">
    <link rel = "stylesheet" href = "{{asset('public/css/hotel.css')}}">

 
    
</head>

<body>

@yield('content')


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--custom scripts -->
<script src= "{{asset('public/js/HandlingEvents.js')}}"></script>
<script src= "{{asset('public/js/ModalObject.js')}}"></script>
<script src= "{{asset('public/js/RoomObject.js')}}"></script>
<script src= "{{asset('public/js/HotelObject.js')}}"></script>
<script src =  "{{asset('public/js/custom.js')}}"> </script>
<script src= "{{asset('public/js/testingClicks.js')}}"></script>

</body>


