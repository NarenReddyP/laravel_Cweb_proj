<!DOCTYPE html>
<html>
<head>
<title>Glass Login Form</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--<script src="script.js" defer></script>-->

<style>
 @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
 *{
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   font-family: 'Poppins', sans-serif;
 }
 body{
   overflow: hidden;

 }
 section{
   display: flex;
   justify-content: center;
   align-items: center;
   min-height: 100vh;
   background: liner-gradient(to bottom, #f1f4f9,#dff1ff);
 }
 section .color{
   position: absolute;
   filter: blur(150px);
 }
 section .color:nth-child(1){
   top: -350px;
   width: 600px;
   height: 600px;
   background: #ff359b;

 }
 section .color:nth-child(2){
   bottom: -250px;
   left: 600px;
   width: 700px;
   height: 700px;
   background: #fffd87;

 }
 section .color:nth-child(3){
   bottom: 50px;
   right: 600px;
   width: 400px;
   height: 400px;
   background: #00d2ff;

 }
 .box{
   position: relative;
 }
 .box .square{
   position: absolute;
   backdrop-filter: blur(5px);
   box-shadow: 0 25px 45px rgba(0,0,0,0.1);
   border: 1px solid rgba(255,255,255,0.5);
   border-right: 1px solid rgba(255,255,255,0.2);
   border-bottom: 1px solid rgba(255,255,255,0.2);
   background: rgba(255,255,255,0.1);
   border-radius: 10px;
   animation: animate 10s linear infinite;
   animation-delay: calc(-1s * var(--i));
 }
 @keyframes animate{
   0%,100%{
     transform: translateY(-40px);
   }
   50%{
     transform: translateY(40px);
   }
 }
.box .square:nth-child(1){
  top: -50px;
  right: -60px;
  width: 100px;
  height: 100px;
}
.box .square:nth-child(2){
  top: 150px;
  left: -100px;
  width: 120px;
  height: 120px;
  z-index: 2;
}
.box .square:nth-child(3){
  bottom: 50px;
  right: -60px;
  width: 80px;
  height: 80px;
  z-index: 2;
}
.box .square:nth-child(4){
  bottom: -80px;
  left: 100px;
  width: 50px;
  height: 50px;

}
.box .square:nth-child(5){
  top: -80px;
  left: 140px;
  width: 60px;
  height: 60px;

}

 .container{
   position: relative;
   width: 400px;
   min-height: 400px;
   background: rgba(255,255,255,0.1);
   border-radius: 10px;
   display: flex;
   justify-content: center;
   align-items: center;
   backdrop-filter: blur(5px);
   box-shadow: 0 25px 45px rgba(0,0,0,0.1);
   border: 1px solid rgba(255,255,255,0.5);
   border-right: 1px solid rgba(255,255,255,0.2);
   border-bottom: 1px solid rgba(255,255,255,0.2);

 }

 .form{
   position: relative;
   width: 100%;
   height: 100%;
   padding: 40px;

 }
 .form h2{
   position: relative;
   color: #fff;
   font-size: 24px;
   font-weight: 600;
   letter-spacing: 1px;
   margin-bottom: 40px;
 }

 .form h2::before{
   content: '';
   position: absolute;
   left: 0;
   bottom: -10px;
   width: 80px;
   height: 4px;
   background: #fff;
 }

 .form .inputBox {
   width: 100%;
   margin-top: 20px;
 }
 .form .inputBox input{
   width: 100%;
   background: rgba(255,255,255,0.2);
   border: none;
   outline: none;
   padding: 10px 20px;
   border-radius: 35px;
   border: 1px solid rgba(255,255,255,0.5);
   border-right: 1px solid rgba(255,255,255,0.2);
   border-bottom: 1px solid rgba(255,255,255,0.2);
   font-size: 16px;
   letter-spacing: 1px;
   color: #fff;
   box-shadow: 0.5px 15px rgba(0,0,0,0.05);
 }
 .form .inputBox input::placeholder{
   color: #fff;
 }
.form .inputBox input[type="submit"]{
  background: #fff;
  color: #8e7e7e;
  max-width: 120px;
  cursor: pointer;
  margin-bottom: 20px;
  font-weight: 600;
}
.form .inputBox input[type="submit"]:hover{
  background: #e27bad;
  color: #fff;
}

.forget{
  margin-top: 5px;
  color: #fff; /*#00d2ff;*/
}
.forget a{
  color: #fff; /*#ff359b;*/
  font-weight: 300;
  text-decoration: none;
}
.forget a:hover{
  color: #fff;
  font-weight: 600;
  text-decoration: underline;
  
}

</style>

</head>

<body>
<section>
    <div class="color"></div>
    <div class="color"></div>
    <div class="color"></div>
    <div class="box">
      <div class="square" style="--i:0;"></div>
      <div class="square" style="--i:1;"></div>
      <div class="square" style="--i:2;"></div>
      <div class="square" style="--i:3;"></div>
      <div class="square" style="--i:4;"></div>

      @if ($message = Session::get('glassuccess'))
      <div style="color:#a2c830;" class="alert alert-success alert-dismissible fade show" role="alert">
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


       <div class="container">
         <div class="form">


           <div class="form-btn">
             <h2>Signup</h2>

           </div>

           <form action="{{ route('glasssignupdata') }}" id="LoginForm" method="POST" enctype="multipart/form-data" >
            @csrf

             <div class="inputBox">
               <input type="text" name="username" placeholder="UserName">
             </div>
             <span class="errorstag" style="color:#e031af;text-align:center;"><div class="error">{{$errors->first('gusername')}}</div></span>

             <div class="inputBox">
               <input type="email" name="email" placeholder="Email">
             </div>
             <span class="errorstag" style="color:#e031af;text-align:center;"><div class="error">{{$errors->first('gemail')}}</div></span>  

             <div class="inputBox">
               <input type="password" name="password" placeholder="Password">
             </div>
             <span class="errorstag" style="color:#e031af;text-align:center;"><div class="error">{{$errors->first('gpassword')}}</div></span>

             <div class="inputBox">
               <input type="password" name="regpassword" placeholder="Re-Enter Password">
             </div>
             <span class="errorstag" style="color:#e031af;text-align:center;"><div class="error">{{$errors->first('regpassword')}}</div></span>

             <div class="inputBox">
               <input type="submit" name="glasssubmit" value="Register">
             </div>
             <p class="forget">Don't have an acccount ? <a href="{{ Route('glasslogin') }}">Sign in</a></p>
           </form>


           </div>
         </div>
       </div>

</section>

<!--- JS for toggle form ------------------------>

<script type="text/javascript">

  var LoginForm = document.getElementById("LoginForm");
  var RegForm = document.getElementById("RegForm");
  var Indicator = document.getElementById("Indicator");

  function register(){
    RegForm.style.transform = "translateX(0px)";
    LoginForm.style.transform = "translateX(0px)";
    Indicator.style.transform = "translateX(120px)";
  }
  function login(){
    RegForm.style.transform = "translateX(400px)";
    LoginForm.style.transform = "translateX(400px)";
    Indicator.style.transform = "translateX(0px)";
  }


  $(document).ready(function () {
    $(".alert-success").delay(3000).fadeOut("slow");
  });


</script>

</body>

</html>
