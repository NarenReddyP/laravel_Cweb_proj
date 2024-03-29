<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Paypal Integration With Laravel</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
<style>
.btn-primary {
  position: relative;
  /* background-color: #ea19c0; */
  border: none;
  /* font-size:15px; */
  /* color: #FFFFFF; */
  /* padding: 10px; */
  /* width: 150px; */
  /* text-align: center; */
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  /* text-decoration: none; */
  overflow: hidden;
  cursor: pointer;
  /* border-radius: 5px; */
}

.btn-primary:after {
  content: ""; 
  background: #d8247b;
  display: block;
  position: absolute;
  padding-top: 300%;
  padding-left: 350%;
  margin-left: -20px!important;
  margin-top: -120%;
  opacity: 0;
  transition: all 1.5s;
}

.btn-primary:active:after {
  padding: 0;
  margin: 0;
  opacity: 1;
  transition: 0s;
}

</style>

  </head>
  <body>
    <div class="container">
      <div class="row">
       <div class="col-md-8 col-md-offset-2">

       <h3 class="text-center" style="margin-top:90px;">Paypal Intergration With Laravel</h3>
        <div class="panel panel-default" style="margin-top:60px">
       
        @if($message = \Session::get('success'))
        <div class="alert alert-success fade in">
          <button type="button" class="close" data-dismiss="alert" arial-hidden="ture">
                 {!! $message !!}
          </button>
        </div>
        <?php \Session::forget('success');  ?>
        @endif

        
        @if($message = \Session::get('error'))
        <div class="alert alert-danger fade in">
          <button type="button" class="close" data-dismiss="alert" arial-hidden="ture">
                 {!! $message !!}
          </button>
        </div>
        <?php \Session::forget('error');  ?>
        @endif

        <div class="panel-heading" style="text-align: center; font-weight: 600;color:#d91a79;background-image: linear-gradient(to bottom right, #dd7cc2, #a6c2f6);"><strong>Paywith Paypal</strong></div>
        <div class="panel-body" style="box-shadow: 8px 8px 15px #7c898d;">
            <form class="form-horizontal" method="POST" action="{{ route('paypal') }}">
                @csrf
                <div class="form-group {{ $errors->has('amount')? 'has-error':''}}">
            <label for="amount" class="col-md-4 control-label">Enter Amount</label>
                
                <div class="col-md-6">
            <input class="form-control" id="amount" type="text" name="amount" value="{{ old('amount') }}" placeholder="Plase enter amount" autofocus>
                   @error('amount')
                     <span class="help-block">
                       <strong>{{ $message }}</strong>
                     </span>
                   @enderror

                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button class="btn btn-primary" type="submit">
                        Paywith Paypal
                    </button>
                </div>
            </div>

          </form>
          
        </div>
      </div>
      <img style="height:200px;padding-top:20px;" src="{{ asset('assets/C_img/paypal-icon.JPG') }}" />
    </div>
  </div>
    
    
    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  
  
  <script>
    $(document).ready(function () {
      $(".alert-success").delay(4000).fadeOut("slow");
  });
  </script>
  </body>
  </html>
  