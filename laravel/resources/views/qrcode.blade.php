<!DOCTYPE html>
<html>
<title>QR Code Generator</title>

<head>
<!-- Include Bootstrap for styling -->
<link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

<style>
	.qr-code {
	max-width: 200px;
	margin: 10px;
	}
    #backhome{
        float: right;
    }
    /* #qralertmsg{
        color:#415e16;
        align-items: center;
    } */
    .form-horizontal{
        padding-right: 15%;
    }
</style>


</head>

<body>
<div class="container-fluid">
	<div class="text-center">

	<!-- Get a Placeholder image initially,
	this will change according to the
	data entered later -->
	<img src=
        "https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
		class="qr-code img-thumbnail img-responsive" />
	</div>
   
    

    <form action="{{ route('qrcodedata') }}" method="POST" enctype="multipart/form-data">
        @csrf
	<div class="form-horizontal">
	<div class="form-group">
		<label class="control-label col-sm-2"
		for="content">
		Content:
		</label>
		<div class="col-sm-10">

		<!-- Input box to enter the
			required data -->
		<input name="qrcode" type="text" size="60"
			maxlength="60" class="form-control"
			id="content" placeholder="Enter content" />
		</div>
        <span class="errorstag" style="color:red;text-align:center;"><div class="error">{{$errors->first('qrcode')}}</div></span>

	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">

		<!-- Button to generate QR Code for
		the entered data -->
		<button type="submit" class=
			"btn btn-success" id="generate">
			Generate
		</button>
        
        <a href="{{ route('home') }}"><button type="button" class=
			"btn btn-info" id="backhome">
			Back
		</button></a>

		</div>
        <div class="col-sm-offset-2 col-sm-10" style="padding-top:20px;">
            <p><strong>NOTE:</strong> Please enter valid Domain names only.</p>
        </div>
	</div>
	</div>
        </form>


        {{-- @if ($message = Session::get('qrmessage'))
        <div id="qralertmsg" class="alert alert-success" role="alert">
          <p id="qralertmsg"><strong>{{ $message }}</strong></p>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif --}}
    

    
    
    {{-- @if ($message = Session::get('Passwordd'))
    <div style="color:#d5137a;" class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ $message }}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif --}}

</div>

<script src=
	"https://code.jquery.com/jquery-3.5.1.js">
</script>

<script>
	// Function to HTML encode the text
	// This creates a new hidden element,
	// inserts the given text into it
	// and outputs it out as HTML
	function htmlEncode(value) {
	return $('<div/>').text(value)
		.html();
	}

	$(function () {

	// Specify an onclick function
	// for the generate button
	$('#generate').click(function () {

		// Generate the link that would be
		// used to generate the QR Code
		// with the given data
		let finalURL =
'https://chart.googleapis.com/chart?cht=qr&chl=' +
		htmlEncode($('#content').val()) +
		'&chs=160x160&chld=L|0'

		// Replace the src of the image with
		// the QR code image
		$('.qr-code').attr('src', finalURL);
	});
	});
</script>

{{-- <script>
$(document).ready(function () {
    $(".alert-success").delay(3000).fadeOut("slow");
});
</script> --}}

</body>

</html>
