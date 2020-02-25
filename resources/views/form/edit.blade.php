<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                       <h2 class="text-center">Please Update</h2>
                </div>
                <div class="card-body">
                        <form action="{{route('updateprofile',$user->id)}}" method="POST">
                                @method('patch')
                                @csrf
                                <div class="form-group">
                                    <input type="text" value="{{$user->name}}" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" value="{{$user->email}}" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" value="{{$user->profile->phone}}" name="phone" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" value="{{$user->profile->address}}" name="address" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-info">Update</button>
                            
                            </form>
                </div>
            </div>
               
        </div>
</div>
<div class="col-4"></div>
