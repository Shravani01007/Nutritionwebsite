@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row" >
            <div class="col-md-9">
                <div class="card col-md-12 " style=" margin-left:10%">
                    <div class="card-header" style="text-align:center">
                    <h3>Edit Fruit Description</h3>
                    </div>
                    <div class="card-body" style=" margin-left:70px">
                    <form action="/fruitupdate/{{ $fruits->id }}" method="POST" style="text-align:center">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                        <div class="form-group col-md-11">
                            <label></label>
                            <input type="text" name="fruitname" value="{{ $fruits->fruitname }}" class="form-control">
                        </div>
                        <div class="form-group col-md-11">
                            <label>Change Fruit Description</label>
                            <textarea cols="60" rows="10" type="text" name="description" style="height:300px" class="form-control">{{ $fruits->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="/fruitdatabase" class="btn btn-danger">Cancel</a>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection