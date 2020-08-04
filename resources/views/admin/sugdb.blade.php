
@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div text-align="center" class="card-header" style="background-color: #f6e785"> 
                <h4 class="card-title" style="text-align: center"> User Suggestions</h4>
                @if (session('info'))
                        <div class="alert alert-success" role="alert">
                            {{ session('info') }}
                        </div>
                    @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" style="background-color: #f6e785">
                        <thead class="text-primary">
                            <th>Name</th>
                            
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Suggestion/Queries</th>
                            <th>DELETE</th>
                        </thead>
                        <tbody>
                            @foreach ($sug as $row)

                            <tr>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->phone }}</td>
                                <td>{{ $row->suggestion }}</td>
                                
                                <td>
                                    <form action="/suggestiondelete/{{ $row->id }}" method="post">
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