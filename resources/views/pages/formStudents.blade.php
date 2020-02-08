    @if ($errors ->any())
        <ul>
            @foreach ($errors ->all() as $error)
        <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

{{-- <form action="save" method="POST"> --}}
    <form action="{{route('studentsNew.store')}}" method="POST">
        {{-- @method('POST') --}}
    @csrf
    <input  type="text" placeholder="firstname" name="fname">
    <input  type="text" placeholder="lastName" name="lname">
    <input  type="number" placeholder="age" name="age">

    <button type="submit">submit</button>

</form>