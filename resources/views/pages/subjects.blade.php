<h1>Subject List</h1>
<table>
<tr>
    <th>name</th>
    <th>scor</th>
</tr>
@foreach ( $subjects as $item)
<tr>
    <td>{{$item['name']}}</td>
    <td>{{$item['score']}}</td>
</tr>
@endforeach
</table>