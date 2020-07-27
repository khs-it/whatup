<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome-free-5.13.1-web/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('font/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <title>Flight</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark flight-navbar bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.html">FLIGHT NETWORK MYANMAR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
          
        </button>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav" style="margin-left: 50%;">
            <li class="nav-item text-justify"><a href="{{ route('index') }}" class="nav-link px-4">Home</a></li>
            <li class="nav-item text-justify"><a href="{{ route('detail') }}" class="nav-link px-4">Detail</a></li>
            <li class="nav-item text-justify"><a href="{{ route('booking') }}" class="nav-link px-4">Booking</a></li>
            <li class="nav-item text-justify"><a href="{{ route('contact') }}" class="nav-link px-4">Contact</a></li>
            @guest
               <li class="nav-item text-justify"><a href="{{ route('login') }}" class="nav-link 
            px-4">Admin</a></li>
            @endguest

            @auth
               <li class="nav-item text-justify"><a href="{{ route('admin') }}" class="nav-link 
            px-4">Admin</a></li>
            @endauth

          </ul> 
        </div>
      </div>
    </nav>

    @yield('content')