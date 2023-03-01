<!DOCTYPE html>
<html>
<head>
    <title>WB Solutions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
    <style>
  img{
    align-items: center;
    padding-left: 30%;
  }
        </style>
</head>

<body>
{{-- @extends('layout')
  
@section('content') --}}

{{-- @if ($errors->any())
   <ul>
     @foreach ($errors->all() as $error)
        <li>{{ $error }} </li>
     @endforeach
   </ul>
@endif --}}


<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Reset Password</div>
                  <div class="card-body">


                      @if ($message = Session::get('updatemessage'))
                      <div style="color:green;" class="alert alert-success alert-dismissible fade show" role="alert">
                       <strong>{{ $message }}</strong>
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                       </div>
                      @endif

  
                      <form action="{{ route('passwordupdated') }}" method="POST">
                          @csrf
                          <input type="hidden" name="remember_token" value="{{ $user[0]['remember_token'] }}">

                          {{-- <input type="hidden" name="email" value="{{ $user[0]['email'] }}"> --}}
  
                          {{-- <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus >
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div> --}}
  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" placeholder="Enter New password">
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password-confirm" class="form-control" name="password_confirmation" placeholder="Enter confirm new password">
                                  @if ($errors->has('password_confirmation'))
                                      <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Reset Password
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
      <img src="{{ asset('assets/C_img/forget-pin.PNG') }}" alt="image">
  </div>
</main>
{{-- @endsection --}}


   <script>
    $(document).ready(function () {
        $(".alert-success").delay(4000).fadeOut("slow");
    });

    $(document).ready(function () {
        $(".alert-danger").delay(3000).fadeOut("slow");
    });

    </script>

</body>
</html>