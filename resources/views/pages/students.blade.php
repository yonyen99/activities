{{-- <h1>There are students as following:</h1>
@foreach ($students as $item)
  <li>{{$item}}</li>
@endforeach --}}

<h1>Student model</h1>
{{-- show form student by studentController --}}
{{-- <a href="showFormStudent" type="button">Add new</a> --}}
{{-- show form resource controller --}}
<a href=" studentsNew/create" type="button">Add new</a>
<table>
  <tr>
    <th>id</th>
    <th>firstName</th>
    <th>lastName</th>
    <th>age</th>
    <th>action</th>
  </tr>
  @foreach ( $Students as $item)
      <tr>
        <td>{{$item -> id}}</td>
        <td>{{$item -> FirstName}}</td>
        <td>{{$item -> LastName}}</td>
        <td>{{$item -> age}}</td>
        {{-- <td><a href="{{route('showedit',$item->id)}}"><button>Edit</button></a></td> --}}
        <td><a href="{{route('studentsNew.edit',$item->id)}}"><button>Edit</button></a></td>
        {{-- <td><a href="{{route('deleteStudent',$item->id)}}"  onclick="return confirm('Are you sure you want to delete this item?');"><button>delete</button></a></td> --}}
        <td><form action="{{route('studentsNew.destroy',$item->id)}}" method="POST">
          @method('DELETE')
          @csrf
          <button type="submit">Delete</button>
        </form></td>
      </tr>
  @endforeach
</table>