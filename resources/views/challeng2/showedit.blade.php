

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="showpost">Update Post</a>
                    
                </div>

                <div class="card-body">
                 

                    <form method="POST"action="{{ route('updatepost',$post->id) }}">
                            @csrf
                            @method('patch')
                         
                            {{-- title --}}
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
    
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $post->title }}" required autocomplete="title" autofocus>
    
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            {{-- body --}}
                            <div class="form-group row">
                                <label for="body" class="col-md-4 col-form-label text-md-right">{{ __('Body') }}</label>
    
                                <div class="col-md-6">
                                    <input id="body" type="text" class="form-control @error('title') is-invalid @enderror" name="body" value="{{ $post->body }}" required autocomplete="body" autofocus>
    
                                    @error('body')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
