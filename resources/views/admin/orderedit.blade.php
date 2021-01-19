@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row" >
            <div class="col-md-9">
                <div class="card col-md-12 " style=" margin-left:10%">
                    <div class="card-header" style="text-align:center">
                    <h3>Edit order </h3>
                    </div>
                    <div class="card-body" style=" margin-left:70px">
                    <form action="/orderupdate/{{ $orders->id }}" method="POST" style="text-align:center">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                        <div class="form-group col-md-11">
                            <label>Delivery Status </label>
                            <input type="text" name="status" value="{{ $orders->status }}" class="form-control">
                        </div>
                        <div class="form-group col-md-11">
                            <label>Payment status</label>
                            <input type="text" name="payment_status" value="{{ $orders->payment_status }}" class="form-control">
                        </div>
                        
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="/orderdatabase" class="btn btn-danger">Cancel</a>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection