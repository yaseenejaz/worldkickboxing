<!DOCTYPE html>
<html>
<head>
    @yield('title')

 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap-editable.css') }}">
    <link rel="stylesheet" type="text/css"
          href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/jquery.toast.css') }}">
   
     <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script> 
 <!--    <link rel="stylesheet" type="text/css" href="{{asset('frontend/jqueryed/css/jqueryui-editable.css')}}">
   
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap-editable.css')}}"> -->



    @yield('link')

</head>
<body>

<header>

    <div class="logo-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-sm-12 col-md-4 col-lg-4">
                    <div class="logo">
                        <img src="{{ asset('frontend/images/logo.png') }}">
                    </div>
                </div>
                <div class="col-xl-8 col-sm-12 col-md-8 col-lg-8">
                    <div class="sc-icon">
                        <div class="t-btn">
                            <a href="#">Join Federation</a>
                        </div>
                        <div class="icon-box">
                            <i class="fa fa-instagram"></i>
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-facebook"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-sm-4 col-md-12 col-lg-12">

                    <nav class="navbar navbar-expand-lg navbar-light bg-light">

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav nav-kick">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('index') }}">Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('tournament.index') }}">Tournament</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about.index') }}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact.index') }}">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('pricing.index') }}">Pricing</a>
                                </li>
                                @if(auth()->check())
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ auth()->user()->name }}
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="{{ route('user', auth()->user()->slug) }}">Your Profile</a>
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </nav>

                    <div class="icon-menu">
                        <i class="fa fa-bars"></i>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
