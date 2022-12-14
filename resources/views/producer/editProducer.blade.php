<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add Product</title>
  </head>
  <body>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
        <div class="col-md-12">
                <h2>Update product</h2>
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>                    
                @endif
                <form action="{{url('update')}}" method="POST">
                    @csrf
                    <div class="md-3">
                        <label for="id" class="form-label">Producer ID</label>
                        <input type="text" class="form-control" name="id" 
                               value="{{$data->producerID}}" readonly>
                    </div>
                    <div class="md-3">
                        <label for="name" class="form-label">Producer Name</label>
                        <input type="text" class="form-control" name="name" 
                               value="{{$data->producerName}}">
                    
                     <br>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{url('list')}}" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>