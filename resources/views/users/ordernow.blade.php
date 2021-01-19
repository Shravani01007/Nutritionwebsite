@extends('layouts.app')

@section('content')
@if (session('info'))
                        <div class="alert alert-success" role="alert">
                            {{ session('info') }}
                        </div>
                    @endif
<div class="custom product">
<div class="col-sm-10">
<table class="table">
    <tbody>
    <tr>
      <td>Amount</td>
      <td>Rs. {{$total}}</td>
    </tr>
    <tr>      
      <td>Tax</td>
      <td>Rs. 0</td>
    </tr>
    <tr>      
      <td>Delivery charges</td>
      <td>Rs. 40</td>
    </tr>
    <tr>      
      <th>Total amount</th>
      <th>Rs. {{$total+40}}</th>
    </tr>
  </tbody>
</table>
<div>
<form action="/orderplace" method="POST">
@csrf
  <div class="form-group">
    <textarea name="address" class="form-control" placeholder="enter your address"></textarea>
  </div><br>
  <div class="form-group">
    <label for="payment">Payment Method</label><br><br>
    <input type="radio" value="cash on delivery" class="form-control" style="width:15px;height:15px;display:inline"name="payment" >&nbsp;<span>Online payment</span><br><br>
    <input type="radio" value="cash on delivery" class="form-control" style="width:15px;height:15px;display:inline" name="payment">&nbsp;<span>Cash on delivery</span><br><br>

  </div>
  
  <button type="submit" class="btn btn-success">Order Now</button>
</form>
</div>
</div>
</div>
@endsection 
