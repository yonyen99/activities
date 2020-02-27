
@extends('layouts.app')

@section('content')
<table class="table ">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
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
                 <a href="{{route('editprofile',$item->id)}}">Edit</a> |
                 <a href="{{route('deleteProfile',$item->id)}}">Delete</a>
            </td>
            
        </tr>
    @endforeach
</table>
@endsection


