<?php
use App\Http\Controllers\UsersController;
$total=UsersController::cartItem();
?>


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HomeCure') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
   
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="app" >
    <div class="conatiner-fluid">
            <div class="row" style="text-align: center">
                <div class="col-md-6" style="background-color: #f6e785; height: 10rem">
                   <ul class="one"> 
                        <li><img src="../icons/logo.png" style="height: 7rem; width: 7rem"></li>
                        <li> 
                            <h6 style="color: #017d1e"> Care with nature’s touch</h6>
                            <h1 style="color: #017d1e"> HomeCure</h1>
                            <h5 style="color: #d91616"> Online Nutrition and Home Remedy</h5>
                       </li>
                    </ul>
                </div>
                <div class="col-md-4" style="background-color: #f6e785; height: 10rem">
                    <ul class="blocks mr-auto">  
                       <!-- Authentication Links -->
                       @guest
                            <li style="margin: 10px" >
                                <a  href="{{ route('login') }}"style="color: #d91616 ">{{ __('Login') }}  </a>
                            </li>
                            @if (Route::has('register'))
                                <li style="margin: 10px" >
                                    <a  href="{{ route('register') }}"style="color: #d91616">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li>
                                <a style="text-align:right"class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">    

                <div class="col-md-2" style="background-color: #f6e785; height: 10rem;padding-top:50px">
                    <a href="/cartlist" style="text-align: center;"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Cart({{$total}})</a>
                </div>
            </div>
        </div>   

                
              
                    
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="background-color: #6d8700 !important ">
            <div class="container">
                
                <button class="navbar-toggler  ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" style="color: #e2f1a0" href="{{ url('/') }}">Welcome<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link" style="color: #e2f1a0" href="{{ url('/about') }}">About HomeCure</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" style="color: #e2f1a0" href="{{ url('/generalinfo') }}">Nutrition</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: #e2f1a0"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #6d8700">
                        <a class="dropdown-item" style="color: #e2f1a0" href="{{ url('/naturopathy') }}">Naturopathy</a>
                        <a class="dropdown-item" style="color: #e2f1a0" href="{{ url('/homeopathy') }}">Homeopathy</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" style="color: #e2f1a0" href="{{ url('/homeremedies') }}">Basic Home Remedies</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #e2f1a0" href="{{ url('/successstories') }}">Success Stories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #e2f1a0" href="{{ url('/contact') }}">Contact</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="POST" action="{{url('/usersearch')}}">
            {{csrf_field()}}
                <input class="form-control mr-sm-2" type="search" name="search" required value="<?php echo isset($_POST['search']) ? $_POST['search']: '' ?>" aria-label="Search"/>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color: #e2f1a0">Search</button>
            </form>
                </div>
            </div>
        </nav>
        <main class="py-4">
        <div display="none">{{ Auth::user()->id }}</div>
        <div class="card">
    <div class="card-body" >
        <div class="col-md-4" style="float:left;padding-top:100px">
        <img class="card-img-top" style="height:350px" src="{{ $fruits->photos}}" alt="Card Image" style="height:250px;width=100%">
        <br> <br>
        </div>
        <div class="col-md-8" style="float:right">
        <p style="text-align: center ;font-family: Sofia">{{$fruits->fruitname}}</p>
        <h6 style="text-align:left ;font-size:25px"><pre style="font-family: Arial">{{ $fruits->description}}</pre></h6>
        <form action="/add_to_cart" method="POST">
        @csrf
        <input type="hidden" name="addfruits_id" value="{{$fruits->id}}">
        <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">  
        <button class="btn btn-primary">Add to Cart</button>
        </form>
        </div>
    </div>
</div>
        </main>
        
    </div>
    
    
    
      
</body>
</html>
<script src="{{ asset('js/jquery-3.5.1.min.js') }}" ></script>



