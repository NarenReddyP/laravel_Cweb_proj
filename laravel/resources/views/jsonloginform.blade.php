<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="{{ asset('assets/json_assets/css/regjsonstyle.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="" style="padding:10px;">
        <div class="sidemenu-header">
            <a href="dashboard-analytics.html" class="navbar-brand  align-items-center">
                <img src="{{ asset('assets/json_assets/img/logo.png') }}" alt="image">
                {{-- <span>Olaf</span> --}}
            </a>
            <div class="responsive-burger-menu d-block d-lg-none">
                <span class="top-bar"></span>
                <span class="middle-bar"></span>
                <span class="bottom-bar"></span>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
       <div style="color:green;" class="alert alert-success alert-dismissible fade show" role="alert">
         <strong>{{ $message }}</strong>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
     @endif

    @if ($message = Session::get('Passwordd'))
<div style="color:#f5f0f0;" class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Login Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="{{ route('jsonloginformU') }}" method="POST">
                    @csrf
					<input class="text" type="text" name="jsonUsername" placeholder="Username" required=""><br>
					{{-- <input class="text email" type="email" name="email" placeholder="Email" required=""> --}}
					<input class="text" type="password" name="jsonpassword" placeholder="Password" required=""><br>
					{{-- <input class="text w3lpass" type="password" name="password" placeholder="Confirm Password" required=""> --}}
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>Remember Me</span> <span style="float: right;"><a href="" style="text-decoration:none;color:#fff;padding:10px;">Forgot Password?</a></span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGNIN">
				</form>
				<p>Don't have an Account? <a href="{{ route('jsonregisterform') }}"> Register Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2023 Colorlib Signup Form. All rights reserved | Design by <a href="#" target="_blank">Induco Solutions LTD</a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li style="color:#fff;font-weight:900;font-size:30px;text-align:center;">1</li>
			<li style="color:#fff;font-weight:900;font-size:30px;text-align:center;">2</li>
			<li style="color:#fff;font-weight:900;font-size:30px;text-align:center;">3</li>
			<li style="color:#fff;font-weight:900;font-size:30px;text-align:center;">4</li>
			<li style="color:#fff;font-weight:900;font-size:30px;text-align:center;">5</li>
			<li style="color:#fff;font-weight:900;font-size:30px;text-align:center;">5</li>
			<li style="color:#fff;font-weight:900;font-size:30px;text-align:center;">4</li>
			<li style="color:#fff;font-weight:900;font-size:30px;text-align:center;">3</li>
			<li style="color:#fff;">2</li>
			<li style="color:#fff;font-weight:900;font-size:30px;text-align:center;">1</li>
		</ul>
	</div>
	<!-- //main -->


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $(".alert-success").delay(4000).fadeOut("slow");
    });
    $(document).ready(function () {
        $(".alert-danger").delay(4000).fadeOut("slow");
    });
</script>


</body>
</html>