
@extends('layouts.app')

@section('content')
<table class="table ">
    <tr>
        <th>user id</th>
        <th>name</th>
        <th>email</th>
        <th>phone</th>
        <th>address</th>
        <th>Action</th>
    </tr>
    @foreach ($user  as $item)
        <tr>
            <td>{{$item ->id}}</td>
            <td>{{$item ->name}}</td>
            <td>{{$item ->email}}</td>
            <td>{{$item ->profile->phone}}</td>
            <td>{{$item ->profile->address}}</td>
            <td>
                 <a href="{{route('editprofile',$item->id)}}"><button type="submit" class="btn btn-info">Edit</button></a>
                 <a href="{{route('deleteProfile',$item->id)}}"><button type="submit" class="btn btn-danger">Delete</button></a>
            </td>
            
        </tr>
    @endforeach
</table>
@endsection


{{-- <table class="table ">
    <tr>
        <th>user id</th>
        <th>name</th>
        <th>email</th>
        <th>phone</th>
        <th>address</th>
        <th>Action</th>
    </tr>
    @foreach ($user  as $item)
        <tr>
            <td>{{$item ->id}}</td>
            <td>{{$item ->name}}</td>
            <td>{{$item ->email}}</td>
            <td>{{$item ->profile->phone}}</td>
            <td>{{$item ->profile->address}}</td>
            <td>
                 <a href="{{route('editprofile',$item->id)}}"><button type="submit" class="btn btn-info">Edit</button></a>
                 <a href="{{route('deleteProfile',$item->id)}}"><button type="submit" class="btn btn-danger">Delete</button></a>
            </td>
            
        </tr>
    @endforeach
</table> --}}