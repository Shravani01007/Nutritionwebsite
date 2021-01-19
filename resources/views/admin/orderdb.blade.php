
@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div text-align="center" class="card-header" style="background-color: #f6e785"> 
                <h4 class="card-title" style="text-align: center"> Order Database</h4>
                @if (session('info'))
                        <div class="alert alert-success" role="alert">
                            {{ session('info') }}
                        </div>
                    @endif
            </div>
            <div class="card-body" >
                <div class="table-responsive">
                    <table class="table" style="background-color: #f6e785">
                        <thead class="text-primary">
                            
                            
                           
                            <th>Name</th>
                            <th>Address</th>
                            <th>Delivery status</th>
                            <th>Payment method</th>
                            <th>Payment status</th>
                            <th>EDIT/<br>DELETE</th>
                            
                        </thead>
                        <tbody>
                            @foreach ($orders as $row)

                            <tr>
                               
                                <td>{{ $row->users_id }}<br>
                                @foreach($fruits as $fruit)
                                @if ($fruit->id == $row->addfruits_id)
                                <img src="{{ $fruit->photos }}" style="height: 10rem; width: 10rem">@endif @endforeach</td><td>{{ $row->address}}</td>
                                <td><pre>{{ $row->status }}</pre>
                                <td>{{ $row->payment_method }}<br><br>
                              <td> {{ $row->payment_status }}</td>
                            
                                <td>
                                    <a href="/orderedit/{{ $row->id }}" class="btn btn-success">EDIT</a><br><br>
                                    <form action="/orderdelete/{{ $row->id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                    </form>
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection