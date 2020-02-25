
<table class="table">
    <tr>
        <th>title</th>
        <th>body</th>
    </tr>
    @foreach ( $user as $item)
        <tr>
            <td>{{$item ->posts}</td>
            <td>{{$item ->posts}}</td>
        </tr>
    @endforeach
</table>