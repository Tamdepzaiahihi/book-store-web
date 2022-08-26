<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl1.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap1.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style1.css">

    <title>Sign Up #3</title>
  </head>
  <body>
  

  <div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
              <h3>Register</h3>
              
              </div>
              <form action="{{route('registerAdmin-process')}}" method="POST">
                @if (Session::has('success'))
                  <div class="alet alert-success">
                    {{Session::get('success')}}
                  </div>
                @endif
                @if (Session::has('fail'))
                  <div class="alet alert-danger">
                    {{Session::get('fail')}}
                  </div>
                @endif
                @csrf
                <div class="form-group first">
                <div class="form-group first">
                  <label for="name">Name</label>
				  <input type="text" name="fullname" class="form-control" value="Your Full Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Full Name';}" >
                </div>


                <div class="form-group first">
                  <label for="username">User name</label>
                  <input type="text" class="form-control" name="username" value="User Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}" >
                </div>


                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
                </div>
				
                <div class="form-group last mb-3">
                  <label for="re-password">Re-type Password</label>
                  <input type="password" class="form-control" placeholder="Re-type Your Password" id="re-password">
                </div>
                
                <div class="d-sm-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Agree our <a href="#">Terms and Conditions</a></span>
                    <input type="checkbox" checked="checked"/>
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="#" class="forgot-pass">Have an account? Login</a></span> 
                </div>

                <input type="submit" value="Register" class="btn btn-block btn-primary">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>