
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>This is the customer list page</h2>
  <table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>email</th>
        </tr>
    </thead>
    @foreach ($arrayNames as $name)
    <tbody>
        <tr>  
            <td> {{$name["id"]}}</td>
            <td> {{$name["name"]}}</td>
            <td>{{$name["email"]}}</td>
            
        </tr>
    </tbody>
    @endforeach
</table>

</div>

</body>
</html>

      

        {{-- @foreach ($arrayNames as $name)
            {{$name["id"]}}
        @endforeach --}}
        