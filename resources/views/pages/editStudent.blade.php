<h1>Hello</h1>
{{-- <form action="{{route('update',$student->id)}}" method="POST"> --}}
<form action="{{route('studentsNew.update',$student->id)}}" method="POST">
    @method('patch')
    @csrf
    <input type="text" value="{{$student ->FirstName}}" name="fname">
    <input type="text"  value="{{$student ->LastName}}" name="lname">
    <input type="number"value="{{$student ->age}}"  name="age">
    <button type="submit">Update</button>

</form>