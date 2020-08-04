@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 2px">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="icons/12.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="icons/11.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="icons/13.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="icons/14.jpg" class="d-block w-100" alt="...">
            </div>  
            <div class="carousel-item">
              <img src="icons/15.jpg" class="d-block w-100" alt="...">
            </div>   
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        </div>
        
        <div class="box container-fluid" style="background-color: #d8e46b; height: 180px">
            <div class="row" style="text-align: center; padding-top: 4rem">
            <div class="col-sm-8">
                <h2 style="font-family: serif; color:#d91616 ">Search for Home Remedies on your problems now!</h2>
            </div>
            <div class="col-sm-4">
                <button class="btn btn-outline-danger" onclick="location.href='/homeremedies'">Click Here</button>
            </div>
            </div>
        </div>
        
        <!--card-->
        
        <div class="container" style="margin-top: 1rem">
        <div class="row" style="text-align: center">
            <div class="col-lg-6">
                <div class="card" style="width: 550px">
                    <img class="card-img-top" src="icons/nutrition.jpg" alt="Card Image">
                    <div class="card-body">
                        <p style="font-family:Sofia">Nutrition Programs</p>
                        <a href="/generalinfo" class="btn btn-warning">Find out more</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card" style="width: 550px">
                    <img class="card-img-top" src="icons/homeremedy.PNG" alt="Card Image">
                    <div class="card-body">
                        <p style="font-family:Sofia">Basic Home Remedies</p>
                        <a href="/homeremedies" class="btn btn-warning">Find out more</a>
                    </div>
                </div>
            </div>
            </div><br>
            <div class="row" style="text-align: center">
            <div class="col-lg-6">
                <div class="card" style="width: 550px">
                    <img class="card-img-top" src="icons/naturopathy.jpg" alt="Card Image">
                    <div class="card-body">
                        <p style="font-family:Sofia">Naturopathy</p>
                        <a href="/naturopathy" class="btn btn-warning">Find out more</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card" style="width: 550px">
                    <img class="card-img-top" src="icons/homeopathy.jpg" alt="Card Image">
                    <div class="card-body">
                        <p style="font-family:Sofia">Homeopathy</p>
                        <a href="/homeopathy" class="btn btn-warning">Find out more</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
            
            
            
        
        
        
        <!--login form-->
        <div class="container-fluid" style="background-color: #e2f1a0; margin-top: 2rem">
            <div class="row" style="text-align: center; padding-top: 2rem; padding-bottom: 2rem">
                <div class="col-lg-4">
                    <h3 style="font-family:Sofia">Get In Touch!</h3><br>
                    <a href="#" style="font-size: 20px; padding-bottom: 10px; color: black"><i class="fa fa-phone"></i>  9876543210/ 022-28976543</a> <br>
                    <a href="#" style="font-size: 20px; color: black"><i class="fa fa-envelope"></i>   homecure@gmail.com</a>
                </div>
                <div class="col-lg-4">
                    <h3 style="font-family:Sofia">Suggestions & Queries</h3><br>               
                    <form action="{{ url('/suggestionadded') }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                        <i class="fa fa-user-circle"></i> <input type="text" placeholder="Full Name..." id="name" name="name" style="width: 60%; margin-bottom: 5px"><br>
                        <i class="fa fa-envelope"></i> <input type="text" placeholder="Email..." id="email" name="email" style="width: 60%; margin-bottom: 5px"><br>
                        
                        <i class="fa fa-phone"></i><input type="text" id="phone" placeholder="phone" name="phone" style="width: 60%; margin-bottom: 5px"><br><br>
                        <input type="text" id="suggestion" name="suggestion"placeholder="Type your Suggestions/ Queries here..." style="height: 7rem; width: 60%; "><br>
                        <button id="submit" style="width: 100px; height: 30px; margin-top: 5px; background-color: #6d8700">Submit</button>
                    </form>
                </div>
                <div class="col-lg-4" style="margin-top: 2rem">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner" style="padding-bottom: 10px">
                        <div class="carousel-item active">
                            <p class="d-block w-100"><i class="fa fa-quote-right"></i>  “Just a note to thank you for your care and attention over the past few months. The difference you have made to me is brilliant. My family definitely appreciate a calmer me! I think you realise that it took me a long time(over 2 years) to find a replacement for the homeopath I had been with for some 12 years when she retired, and I am grateful for the time and patience you showed me. At the moment your remedies are keeping me on top of my hectic lifestyle.” <br> B.S.</p>
                        </div>
                        <div class="carousel-item ">
                            <p class="d-block w-100"><i class="fa fa-quote-right"></i>  “Initially, I was a little doubting that homeopathy might be effective for me but I was proved wrong on the first visit! Catherine is warm, welcoming and intuitive and the course of treatment has been exceedingly successful for me.” <br> Gill Harper</p>
                        </div>
                        <div class="carousel-item ">
                            <p class="d-block w-100"><i class="fa fa-quote-right"></i>  “Just a note to thank you for your care and attention over the past few months. The difference you have made to me is brilliant. My family definitely appreciate a calmer me! I think you realise that it took me a long time(over 2 years) to find a replacement for the homeopath I had been with for some 12 years when she retired, and I am grateful for the time and patience you showed me. At the moment your remedies are keeping me on top of my hectic lifestyle.” <br> B.S. Cookham</p>
                        </div>
                        <div class="carousel-item ">
                            <p class="d-block w-100"><i class="fa fa-quote-right"></i>  “Just a note to thank you for your care and attention over the past few months. The difference you have made to me is brilliant. My family definitely appreciate a calmer me! I think you realise that it took me a long time(over 2 years) to find a replacement for the homeopath I had been with for some 12 years when she retired, and I am grateful for the time and patience you showed me. At the moment your remedies are keeping me on top of my hectic lifestyle.” <br> B.S. Cookham</p>
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
            </div>
        </div>
      
@endsection 