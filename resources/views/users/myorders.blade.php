
@extends('layouts.app')

@section('content')
<?php
use App\Http\Controllers\UsersController;
$total=UsersController::cartItem();
?>
                <div class="custom product">
                <div class="col-sm-10">
                <div class="trending-wrapper">
              
                <h1 style="text-align:center;color: #d91616">My Orders</h1>

             

                @foreach($orders as $item)
                <div class="row searched-item " style="margin-bottom:20px; border-bottom:1px solid #ccc;padding-bottom:20px">
                    <div class="col-sm-4">
                        <a href="fruitview/{{$item->id}}">
                        <img class="trending-image"src="{{$item->photos}}"style="width:150px; height:120px"> 
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <br>
                            <h3>{{$item->fruitname}}</h3>
                        
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <h5>Delivery status : {{$item->status}}</h5>
                            <h5>Address : {{$item->address}}</h5>
                            <h5>Payment status : {{$item->payment_status}}</h5>
                            <h5>Delivery method : {{$item->payment_method}}</h5>
                            
                        
                        </div>
                    </div>
                    
                    
                </div>
                @endforeach

              

              
                </div>
                </div>
                @endsection 