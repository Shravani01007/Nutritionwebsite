
@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div text-align="center" class="card-header" style="background-color: #f6e785"> 
                <h4 class="card-title" style="text-align: center"> Fruit Database</h4>
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
                            <th>Remedy</th>
                            <th>Illness</th>
                            <th>EDIT/<br>DELETE</th>
                            
                        </thead>
                        <tbody>
                            @foreach ($fruits as $row)

                            <tr>
                               
                                <td>{{ $row->fruitname }}<br><br><img src="{{ $row->photos }}" style="height: 10rem; width: 10rem"></td>
                                <td><pre>{{ $row->description }}</pre></td>
                                <td>{{ $row->disease }}<br><br>
                            
                                <td>
                                    <a href="/remedyedit/{{ $row->id }}" class="btn btn-success">EDIT</a><br><br>
                                    <form action="/remedydelete/{{ $row->id }}" method="POST">
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