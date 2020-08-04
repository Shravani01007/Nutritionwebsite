
@extends('layouts.app')

@section('content')
<div class="row">
 @if(count($data)>0)
    @foreach($data as $row)
                    
                <div class="col-md-4">
                <div class="info card" style="margin-top:10px">
                    <img class="card-img-top" src="{{ $row->photos}}" alt="Card Image" style="height:250px;width=100%">
                    <div class="card-body" style="color: aliceblue">
                        <p style="text-align: center">{{$row->fruitname}}</p>
                        <h6 style="text-align: center">{{ $row->disease}}</h6>
                        <p style="text-align: center"><a  href="/fruitview/{{$row->id}}" class="btn btn-success">View Details</a></p>
                    </div>
                </div>
                </div>
                @endforeach
                @endif
            </div>

            @endsection
            