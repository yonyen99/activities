<form action="{{route('store')}}" method="POST">
    {{-- @method('POST') --}}
@csrf
<input  type="text" placeholder="title" name="title">
<input  type="text" placeholder="body" name="body">

<button type="submit">submit</button>
</form>