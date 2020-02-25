@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <p>your id : {{ Auth::user()->id }} </p>
                        <p>your name : {{ Auth::user()->name }}</p>
                        <p>your email : {{ Auth::user()->email }}</p>
                        <p>your phone : {{ Auth::user()->profile->phone}}</p>
                        <p>your address : {{ Auth::user()->profile->address }}</p>

                        <a href="index"><button type="submit">Add</button></a>
                        <a href="show"><button type="submit">Show</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
