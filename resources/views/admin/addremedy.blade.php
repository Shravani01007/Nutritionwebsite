@extends('layouts.master')

@section('content')
<form enctype="multipart/form-data" method="POST" action="{{ url('/remedyadded') }}">
                        @csrf
                        {{ csrf_field() }}

                        
                        <div class="form-group row">
                            <label for="fruitname" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="fruitname" type="text" class="form-control @error('fruitname') is-invalid @enderror" name="fruitname" value="{{ old('fruitname') }}" required autocomplete="name" autofocus>

                                @error('fruitname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="disease" class="col-md-4 col-form-label text-md-right">{{ __('Illness') }}</label>

                            <div class="col-md-6">
                                <input id="disease" type="text" class="form-control @error('disease') is-invalid @enderror" name="disease" value="{{ old('disease') }}" required autocomplete="disease" autofocus>

                                @error('disease')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       
                        <div class="form-group row">
                             <label for="exampleFormControlFile1 " class="col-md-4 col-form-label text-md-right">{{ __('Upload image') }}</label>
                            <div  class="col-md-6 text-md-right">
                            <input type="file" class="form-control-file  @error('photos') is-invalid @enderror" id="exampleFormControlFile1" name="photos[]" required>
                            @error('photos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __(' Home Remedy') }}</label>

                            <div class="col-md-6">
                            <pre><textarea  wrap="hard" id="description" type="description" class="form-control @error('description') is-invalid @enderror" name="description" cols="60" rows="10" value="{{ old('description') }}" required autocomplete="description"  >
                             </textarea></pre>
                                

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>

                        
                    </form>
                    
@endsection