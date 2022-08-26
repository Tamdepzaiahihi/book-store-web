<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Information</title>
  </head>
  <body>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Admin</h2>
                @if (Session::has('success'))
                        <div class="alet alert-success" role="alert">
                        {{Session::get('success')}}
                        </div>
                @endif
                <form action="{{url('saveadmininfo')}}" method="POST">
                    @csrf
                    <div class="md-3">
                        <label for="username" class="form-label">User ID</label>
                        <input type="text" class="form-control" name="username" 
                               value="{{$data->adminID}}" readonly>
                    </div>
                    <div class="md-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" 
                               value="{{$data->adminFullname}}">
                    </div>
                    <div class="md-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" 
                               value="{{$data->adminPass}}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{url('listAdmin')}}" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>
