<!DOCTYPE html>
<html lang="en">

<head>
    <title>Company Web</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Favicon-->

        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <!--Fontawesome Icons-->
        
        <!-- Including the bootstrap CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
.container:hover{
  background-color: #CB1C8D;
  border-radius: 25%;
  box-shadow: 8px 10px 10px gray;
}
#homebtn{
    text-decoration: none;
    color: white;
}
#btnhome{
    float: right;
}



</style>

</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Chnage Password') }}</div>

                    <form action="{{ route('update-password') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @elseif (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <div class="mb-3">
                                <label for="oldPasswordInput" class="form-label">Old Password</label>
                               <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                                    placeholder="Old Password">
                                    
                                @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="newPasswordInput" class="form-label">New Password</label>
                                <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                    placeholder="New Password">
                                @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                                <input name="new_password_confirmation" type="password" class="form-control @error('new_password_confirmation') is-invalid @enderror" id="confirmNewPasswordInput"
                                    placeholder="Confirm New Password">
                                    @error('new_password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="card-footer">
                            <button class="btn btn-success" type="submit" name="submitbtn">Submit</button>
                            <button id="btnhome" class="btn btn-info" name="submitbtn"><a id="homebtn" href="{{ url('home') }}">Home</a></button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

   <div id="tabldata">
   <h3 style="text-align:center;padding-top: 10px; ">Your Details Here</h3>
   <table class="table table-bordered border-primary table-striped mt-5 col-sm-8" align="center">
       <thead class="bg-dark text-white fw-bold">
           <th>Username</th>
           <th>Email</th>
           <th>Mobile</th>
       </thead>
     <tbody>

        @foreach ($session_data as $key=>$value)
        <tr>
            <td>{{ $value->username }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->mobile }}</td>
        </tr>
        @endforeach

        <tr></tr>
     </tbody>
   </table>
   
    </div>


    <script>
        $(document).ready(function () {
            $(".alert-danger").delay(4000).fadeOut("slow");
        });
        
        $(document).ready(function () {
            $(".alert-success").delay(4000).fadeOut("slow");
        });
    </script>

</body>
</html>