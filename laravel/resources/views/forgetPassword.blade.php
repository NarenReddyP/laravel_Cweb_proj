<!DOCTYPE html>
<html>
<head>
    <title>WB Solutions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
.btn-info{
   float: right;

}
#loginbtn{
    text-decoration: none;
    color: white;
    font-weight: 600;
}

img{
    align-items: center;
    padding-left: 30%;
  }
        </style>
    </style>
</head>

<body>
{{-- @extends('layout')
  
@section('content') --}}
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8" style="box-shadow: 8px 8px 15px #7c898d;>
              <div class="card">
                  <div class="card-header" style="text-align: center; font-weight: 600;color:#d91a79;background-image: linear-gradient(to bottom right, #dd7cc2, #a6c2f6);">Reset Password</div>
                  <div class="card-body">
  
                    {{-- @if (Session::has('resetsuccess'))
                         <div id="successmsg" class="alert alert-success" role="alert">
                            {{ Session::get('resetsuccess') }}
                        </div>
                    @endif --}}


                    @if ($message = Session::get('resetsuccess'))
                   <div style="color:green;" class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                   </button>
                    </div>
                   @endif

                   @if (Session::get('errorsuccess'))
                   @php //dd(Session::get('errorsuccess'))@endphp
                   <div style="color:red;" class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ Session::get('errorsuccess')    }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                   </button>
                    </div>
                   @endif
                      
                     
                    {{-- <h1>Forget Password Email</h1> --}}
   
                    {{-- You can reset password from bellow link: --}}
                    {{-- <a href="{{ route('reset.password.get', $token) }}">Reset Password</a> --}}
                     
                      <form action="{{ route('forget.password.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" placeholder="Enter your email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Send Password Reset Link
                              </button>
                              <button type="submit" class="btn btn-info">
                                <a id="loginbtn" href="{{ url('login') }}">Back</a>
                            </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
      <img src="{{ asset('assets/C_img/forgot-password-4571933.PNG') }}" alt="image">
  </div>
</main>
{{-- @endsection --}}


    <script>
    $(document).ready(function () {
        $(".alert-success").delay(3000).fadeOut("slow");
    });

    $(document).ready(function () {
        $(".alert-danger").delay(3000).fadeOut("slow");
    });

    </script>

</body>
</html>