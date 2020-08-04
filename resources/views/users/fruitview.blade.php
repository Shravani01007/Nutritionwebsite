@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body" >
        <div class="col-md-4" style="float:left;padding-top:100px">
        <img class="card-img-top" style="height:350px" src="{{ $fruits->photos}}" alt="Card Image" style="height:250px;width=100%">
        <br> <br>
        </div>
        <div class="col-md-8" style="float:right">
        <p style="text-align: center ;font-family: Sofia">{{$fruits->fruitname}}</p>
        <h6 style="text-align:left ;font-size:25px"><pre style="font-family: Arial">{{ $fruits->description}}</pre></h6>
        </div>
    </div>
</div>
@endsection