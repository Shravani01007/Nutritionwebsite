
@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div text-align="center" class="card-header" style="background-color: #f6e785"> 
                <h4 class="card-title" style="text-align: center"> Registered Users</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" style="background-color: #f6e785">
                        <thead class="text-primary">
                            <th>Name</th>
                            
                            <th>Email</th>
                            <th>Usertype</th>
                            <th>Contact</th>
                            
                        </thead>
                        <tbody>
                            @foreach ($users as $row)

                            <tr>
                                <td>{{ $row->name }}</td>
                                
                                <td>{{ $row->email }}</td>
                                <td>-{{ $row->usertype }}</td>
                                <td>{{ $row->phone }}</td>
                                
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