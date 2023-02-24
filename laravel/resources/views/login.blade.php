<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<title>Sign In & SignUp Form</title>


<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;

}
body, input{
  font-family: 'Poppins', sans-serif;
}
.container{
  position: relative;
  width: 100%;
  min-height: 100vh;
  background-color: #fff;
  overflow: hidden;
}
.container:before{
  content: '';
  position: absolute;
  width: 2000px;
  height: 2000px;
  border-radius: 50%;
  background: linear-gradient(-45deg, #F72585, #B5179E, #7209B7, #4361EE); /*#4481eb, #04befe */
  top: -10%;
  right: 48%;
  transform: translateY(-50%);
  z-index: 6;
  transition: 1.8s ease-in-out;
}

.forms-container{
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}

.signin-signup{
  position: absolute;
  top: 50%;
  left: 75%;
  transform: translate(-50%, -50%);
  width: 50%;
  display: grid;
  grid-template-columns: 1fr;
  z-index: 5;
  transition: 1s 0.7s ease-in-out;
}

form{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 5rem;
  overflow: hidden;
  grid-column: 1 / 2;
  grid-row: 1 / 2;
  transition: 0.2s 0.7s ease-in-out;
}

form.sign-in-form{
  z-index: 2;
}
form.sign-up-form{
  z-index: 1;
  opacity: 0;
}

.title{
  font-family: 'Teko',sans-serif;
  font-size: 2.0rem;
  text-align: center;
  text-transform: uppercase;
  color: #F72585;
  margin-bottom: 10px;
}
.title:hover{
  letter-spacing: 1px;
  background: linear-gradient(-45deg, #F72585, #B5179E, #7209B7, #4361EE);
    border-radius: 30px;
    padding: 0px 25px;
    color: #fff;
}
.input-field{
  max-width: 380px;
  width: 100%;
  height: 55px;
  background-color: #f0f0f0;
  margin: 10px 0;
  border-radius: 55px;
  display: grid;
  grid-template-columns: 15% 85%;
  padding: 0 0.4rem;
}
.input-field i{
  text-align: center;
  line-height: 55px;
  color: #acacac;
  font-size: 1.1rem;
}
.input-field input{
  background: none;
  outline: none;
  border: none;
  line-height: 1;
  font-weight: 600;
  font-size: 1.1rem;
  color: #333;
}
.input-field input::placeholder{
  color: #aaa;
  font-weight: 500;
}
.btn{
  width: 150px;
  height: 49px;
  border: none;
  outline: none;
  border-radius: 49px;
  cursor: pointer;
  background-color: #F72585;   /*#5995fd; #149bcc(blue) */
  color: #fff;
  text-transform: uppercase;
  font-weight: 600;
  margin: 10px 0;
  transition: 0.5s;
}
.btn:hover{
  /* background-color: #075270; #4d84e2;*/
  background: linear-gradient(-45deg, #F72585, #B5179E, #7209B7, #4361EE);
}
.social-text{
  padding: 0.7rem 0;
  font-size: 1rem;
}

.social-media{
  display: flex;
  justify-content: center;
}
.social-icon{
  height: 46px;
  width: 46px;
  border: 1px solid #333;
  margin: 0 0.45rem;
  display: flex;
  justify-content: center;
  align-items: center;
  text-decoration: none;
  color: #333;
  font-size: 1.1rem;
  border-radius: 50%;
  transition: 0.3s;
}
.social-icon:hover{
  color: #F72585;
  border-color: #F72585;
  background: linear-gradient(-45deg, #F72585, #B5179E, #7209B7, #4361EE);
}
.panels-container{
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
}
.panel{
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  justify-content: space-around;
  text-align: center;
  z-index: 7;
}
.left-panel{
  pointer-events: all;
  padding: 3rem 17% 2rem 12%;
}
.right-panel{
  pointer-events: none;
  padding: 3rem 12% 2rem 17%;
}

.panel .content{
  color: #fff;
  transition: 0.9s 0.6s ease-in-out;
}
.panel h3{
  font-weight: 600;
  line-height: 1;
  font-size: 1.5rem;
}
.panel p{
  font-size: 0.95rem;
  padding: 0.7rem 0;
}
.btn.transparent{
  margin: 0;
  background: none;
  border: 2px solid #fff;
  width: 130px;
  height: 41px;
  font-weight: 600;
  font-size: 0.8rem;
}

.image{
  width: 100%;
  transition: 1.1s 0.4s ease-in-out;
}

.right-panel .content, .right-panel .image{
  transform: translateX(800px);
}

/* ANIMATION  */
.container.sign-up-mode:before{
  transform: translate(100%, -50%);
  right: 52%;
}

.container.sign-up-mode .left-panel .image,
.container.sign-up-mode .left-panel .content{
  transform: translate(-800px);
}
.container.sign-up-mode .right-panel .content,
.container.sign-up-mode .right-panel .image{
  transform: translateX(0px);
}

.container.sign-up-mode .left-panel{
  pointer-events: none;
}
.container.sign-up-mode .right-panel{
  pointer-events: all;
}

.container.sign-up-mode .signin-signup{
  left: 25%;
}

.container.sign-up-mode form.sign-in-form{
  z-index: 1;
  opacity: 0;
}
.container.sign-up-mode form.sign-up-form{
  z-index: 2;
  opacity: 1;
}

#gendertags{
  font-size: 12px;
}

/* ------ Media Query for 870------- */

@media (max-width: 870px){
 .container{
   min-height: 800px;
   height: 100vh;
 }
 .container:before{
   width: 1500px;
   left: 1500px;
   left: 30%;
   bottom: 68%;
   transform: translateX(-50%);
   right: initial;
   top: initial;
   transition: 2s ease-in-out;

 }
 .signin-signup{
   width: 100%;
   left: 50%;
   top: 95%;
   transform: translate(-50%, -100%);
   transition: 1s 0.8s ease-in-out;
 }

 .panels-container{
   grid-template-columns: 1fr;
   grid-template-rows: 1fr 2fr 1fr;
 }
  .panel{
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
    padding: 2.5rem 8%;
  }

  .panel .content{
    padding-right: 15%;
    transition: 0.9s 0.8s ease-in-out;
  }
  .panel h3{
    font-size: 1.2rem;
  }
  .panel p{
    font-size: 0.7rem;
    padding: 0.5rem 0;
  }

  .btn.transparent{
    width: 110px;
    height: 35px;
    font-size: 0.7rem;
  }

  .image{
    width: 200px;
    transition: 0.9s 0.6s ease-in-out;
  }

  .left-panel{
    grid-row: 1 / 2;
  }

  .right-panel{
    grid-row: 3 / 4;
  }

 .right-panel .content, .right-panel .image{
   transform: translateY(300px);
 }

.container.sign-up-mode:before{
  transform: translate(-50%, 100%);
  bottom: 32%;
  right: initial;
}

.container.sign-up-mode .left-panel .image,
.container.sign-up-mode .left-panel .content{
  transform: translateY(-300);
}

.container.sign-up-mode .signin-signup{
  top: 5%;
  transform: translate(-50%, 0);
  left: 50%;
}
.errorstag{
  font-size: 10px;

}


}

/* ------ Media Query for 570------- */


@media (max-width: 570px){
form{
  padding: 0 1.5rem;
}
.image{
  display: none;
}
.panel .content{
  padding: 0.5rem 1rem;
}
.container:before{
  bottom: 72%;
  left: 50%;

}
.container.sign-up-mode:before{
  bottom: 28%;
  left: 50%;
}

.errorstag{
  font-size: 10px;
  
}

#togglePassword{
  padding-bottom: 10px;
  margin-left: -5px;
  float: right;
}


}

.text-danger{
  color: #CB1C8D;

}
#forgetpass:hover{color:#CB1C8D;}
#togglePassword:hover{color:#CB1C8D;}

</style>


</head>
<body>

<div class="container">
  <div class="forms-container">
    <div class="signin-signup">

    <!--Sign In Form-->

{{-- <?php
if(isset($_SESSION['fail']))
{
  echo '<div class="alert alert-danger alert-dismissable" id="flash-msg22">
<h4 style="color:#CB1C8D;><i class="icon fa fa-check"></i>Email address is already exists!</h4>
</div>';
}

unset($_SESSION['fail']);

?>  --}}
<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
<span class="text-danger"><?php if (isset($mobile_error)) echo $mobile_error; ?></span>
<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
<span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>



      <form action="{{url('loginform')}}" class="sign-in-form" method="POST" enctype="multipart/form-data">
        @csrf
        <h2 class="title">Sign In</h2>
        <?php echo '' ?>
       <div class="input-field">
         <i class="fas fa-user"></i>
         <input type="text"  name="luserName" placeholder="UserName" >
       </div>
       <span class="errorstag" style="color:red;text-align:center;"><div class="error">{{$errors->first('luserName')}}</div></span>

       <div class="input-field">
         <i class="fas fa-lock"></i>
         <span><input type="password" name="lpassword" placeholder="Password" id="id_password">
         <i class="far fa-eye" id="togglePassword" style="margin-left: 10px; cursor: pointer;"></i></span>
       </div>
       <span class="errorstag" style="color:red;text-align:center;"><div class="error">{{$errors->first('lpassword')}}</div></span>

       <div class="form-group row">
        <div class="col-md-6 offset-md-4">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember"> Remember Me <i class="fa fa-check" aria-hidden="true"></i>
                </label>
            </div>
         </div>
        </div>


       <input type="submit" name="SUBMITsIN" value="login" class="btn solid">

       <a href="{{ route('forget.password.get') }}" style="text-decoration: none;color:#7209B7;">Forgot password?</a>

       <p class="social-text">Or Sign in with social platforms</p>
       <div class="social-media">
         <a href="#" class="social-icon">
           <i class="fab fa-facebook-f"></i>
         </a>
         <a href="#" class="social-icon">
           <i class="fab fa-twitter"></i>
         </a>
         <a href="#" class="social-icon">
           <i class="fab fa-google"></i>
         </a>
         <a href="#" class="social-icon">
           <i class="fab fa-linkedin-in"></i>
         </a>
       </div>
     </form>

    <!--Sign Up Form-->

    {{-- @if ($message = Session::get('success'))
<div style="color:green;" class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif --}}

@if ($message = Session::get('success'))
<div style="color:green;" class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if ($message = Session::get('Passwordd'))
<div style="color:#d5137a;" class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

     <form action="{{url('signupform')}}" class="sign-up-form" method="POST" enctype="multipart/form-data">
        @csrf
       
        {{-- @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror --}}

       <h2 class="title">Sign Up</h2>
      <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" name="userName" placeholder="UserName" >
      </div>
      <span class="errorstag" style="color:red;text-align:center;"><div class="error">{{$errors->first('userName')}}</div></span>

      <div class="input-field">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" placeholder="Email" >
      </div>
      <span class="errorstag" style="color:red;text-align:center;"><div class="error">{{$errors->first('email')}}</div></span>

      <div class="input-field">
        <i class="fas fa-mobile"></i>
        <input type="tel" name="mobile" placeholder="Phone number" minLength="10" maxLength="10" pattern="[7-9]{1}[0-9]{9}" >
      </div>
      <span class="errorstag" style="color:red;text-align:center;"><div class="error">{{$errors->first('mobile')}}</div></span>

      <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Password" >
      </div>
      <span class="errorstag" style="color:red;text-align:center;"><div class="error">{{$errors->first('password')}}</div></span>

      <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="password" name="Cpassword" placeholder="Confirm password" >
      </div>
      <span class="errorstag" style="color:red;text-align:center;"><div class="error">{{$errors->first('Cpassword')}}</div></span>


      <span id="gendertags">Select Your Gender   <input type="radio" id="Male" checked name="Gender" value="Male"><label for="html"> Male</label>
      <input type="radio" id="Female" name="Gender" value="Female"><label for="css"> Female</label>
      <input type="radio" id="Others" name="Gender" value="Others"><label for="javascript"> Others</label></span>


      <input type="submit" name="SUBMITsUP"  value="Sign Up" class="btn solid">

      <p class="social-text">Or Sign up with social platforms<br/>*Ph.no starting with 9/8/7 and other 9 digit using any number</p>
      <div class="social-media">
        <a href="#" class="social-icon">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="social-icon">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="social-icon">
          <i class="fab fa-google"></i>
        </a>
        <a href="#" class="social-icon">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>
    </form>

  </div>
  </div>

 <div class="panels-container">
 <div class="panel left-panel">
   <div class="content">
     <h3>New here ?</h3>
     <p>The pain itself is the main reason to love the customer. Does it prevent some people from doing so?</p>
     <button class="btn transparent" id="sign-up-btn">Sign up</button>
   </div>

   <img src="{{ asset('assets/ImgLR/World_1.svg') }}" class="image" alt="">
 </div>

 <div class="panel right-panel">
   <div class="content">
     <h3>One of us ?</h3>
     <p>The pain itself is the main reason to love the customer. Does it prevent some people from doing so?</p>
     <button class="btn transparent" id="sign-in-btn">Sign in</button>
   </div>

   <img src="{{ asset('assets/ImgLR/Developer_activity1.svg') }}" class="image" alt="">
 </div>
</div>
</div>

<script src="{{url('/assets/js/GJS/app.js')}}"></script>
<script>
/* password EYE view   */
const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
/* END password EYE view   */

// $(document).ready(function () {
//     $("#flash-msg").delay(3000).fadeOut("slow");
// });

// $(document).ready(function () {
//     $("#flash-msg1").delay(3000).fadeOut("slow");
// });

// $(document).ready(function () {
//     $("#flash-msg22").delay(3000).fadeOut("slow");
// });

$(document).ready(function () {
    $(".alert-success").delay(3000).fadeOut("slow");
});

</script>



</body>
</html>

