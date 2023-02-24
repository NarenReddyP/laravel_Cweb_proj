<!DOCTYPE html>
<html>
<head>
    <title>WB Solutions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<style>
.btn-info{
   float: right;

}
#loginbtn{
    text-decoration: none;
    color: white;
    font-weight: 600;
}
    </style>
</head>

<body>
{{-- @extends('layout')
  
@section('content') --}}
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Reset Password</div>
                  <div class="card-body">
  
                    @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
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
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
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
  </div>
</main>
{{-- @endsection --}}


</body>
</html>