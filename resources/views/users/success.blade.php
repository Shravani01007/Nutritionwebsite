@extends('layouts.app')

@section('content')
@if (session('info'))
                        <div class="alert alert-success" role="alert">
                            {{ session('info') }}
                        </div>
                    @endif

<div class="container">
            <img src="icons/s1.jpg" style="width: 100%">
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
        
        <!--stories-->
        <div class="container" style="margin-top: 2rem; text-align: center">
            <div class="row" style="background-color: #d4ed8a">
                <div class="col-sm-6" style="padding-top: 3.5rem; font-size: 20px">
                    <i class="fa fa-quote-right"></i>
                    <p>"During this pandemic, my family is trying all the natural remedies for cough and sore throat. These have helped us to stay fit during these unfit times. I would suggest these remedies to everyone. This page was helpful for me. Thank you."<br>B. Chatturvedi</p>
                </div>
                <div class="col-sm-6">
                    <img  class="image" src="icons/happy.jpeg">
                </div>
            </div>
            <div class="row" style="background-color: #d2e33b">
                <div class="col-sm-6" >
                    <img class="image" src="icons/sleep.jpg">
                </div>
                <div class="col-sm-6" style="padding-top: 3.5rem; font-size: 20px">
                    <i class="fa fa-quote-right"></i>
                    <p>"Earlier I had problems while sleeping. As i couldnt get enough sleep, it would reflect on my work. The remedies suggested by them really worked for me. These are definitely better than sleeping pills as these are natural. I sleep well every night and thus I'm able to concentrate on my work."<br>V. M. Mahajan</p>
                </div>
            </div>
            <div class="row" style="background-color: #d4ed8a">
                <div class="col-sm-6" style="padding-top: 3.5rem; font-size: 20px">
                    <i class="fa fa-quote-right"></i>
                    <p>"I felt really relieved with the outcome of these home remedies. It was of great help. Remedies took a day more than medicines but surely long-term betterment for the body...good work. I practice meditation daily and it has shown positive impact on my overall life."<br>S. Cooper</p>
                </div>
                <div class="col-sm-6">
                    <img class="image" src="icons/meditation.jpg">
                </div>
            </div>
        </div><br>
        
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