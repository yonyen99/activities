@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">You are login as:</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <p> id : {{ Auth::user()->id }} </p>
                        <p> Name : {{ Auth::user()->name }}</p>
                        <p> Email : {{ Auth::user()->email }}</p>
                        <p> Phone : {{ Auth::user()->profile->phone}}</p>
                        <p> Address : {{ Auth::user()->profile->address }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
