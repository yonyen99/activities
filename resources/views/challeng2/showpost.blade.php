
@extends('layouts.app')

@section('content')
<table class="table ">
    <tr>
        <th>#</th>
        <th>title</th>
        <th>body</th>
        <th>Action</th>
    </tr>
    @foreach ($posts  as $item)
        <tr>
           
            <td>{{$item ->id}}</td>
            <td>{{$item ->title}}</td>
            <td>{{$item ->body}}</td>
            <td>
                 <a href="{{route('showpostedit',$item ->id)}}">Edit</a> |
                 <a href="{{route('deletepost',$item ->id)}}">Delete</a>
            </td>
            
        </tr>
    @endforeach
</table>
@endsection


