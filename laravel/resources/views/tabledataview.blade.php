<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Vendors Min CSS -->
    <link rel="stylesheet" href="assets/json_assets/css/vendors.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/json_assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/json_assets/css/responsive.css">
    <title>Olaf-Admin Dashboard Template</title>
    <link rel="icon" type="image/png" href="assets/json_assets/img/favicon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
     body{
    padding-left: 5%;
    padding-right: 5%;
    /* padding-top: 5%; */
     }
    #deleteConfirmationPopup{
      text-align: center;
      padding-top: 20px;
      padding-bottom: 10px;
      z-index: 99;
      border: 2px solid #A84448;
     }
     h5{
      padding-bottom: 20px;
     }
     /* table {
      height: 100px;
      overflow-y: scroll;
     } */
    </style>
        </head>
    <body>
      <!-- Delete confirmation popup (hidden by default) -->
      {{-- <div id="deleteConfirmationPopup" style="display:none;">
        <h5>Are you sure you want to delete this record?</h5>
        <button id="cancelDeleteButton" class="btn btn-secondary">Cancel</button>
        <button id="confirmDeleteButton" class="btn btn-danger">Delete</button>
      </div> --}}
      @if ($message = Session::get('message'))
        <div style="color:green;" class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{ $message }}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
<header>
    <nav class="navbar navbar-expand-lg border border-dark navabar navbar-light" style="background-color: #8DC26F;">
        <a class="navbar-brand" href="{{ route('jsonview') }}"><img src="{{ asset('assets/json_assets/img/logo.png') }}" alt="image"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('jsonview') }}" style="font-weight:700;">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
</header>
<form method="POST" action="" enctype="multipart/form-data">
  @csrf
<table class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Date</th>
        <th scope="col" colspan="3">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
        
      <tr>
        <th scope="row">{{ $row->id }}</th>
        <th scope="row">Child Name Inclusion in Birth Register</th>
        {{-- <td>{{ $row->jsonarray }}</td> --}}
        <td>{{ date('Y-m-d H:i:s', strtotime($row->date)) }}</td>
        <td><button id="editButton" class="btn btn-primary"><a href="{{ url('jsonuser') }}/{{ $row->id }}/edit" style="text-decoration:none;color:#fff;text-align: right;">Edit</a></button></td>
        <td><button type="button" id="deleteButton" data-id="" class="btn btn-danger" onclick="deleteuser({{ $row->id }})">Delete</button></td>
        <td><button id="viewButton" class="btn btn-secondary"><a href="{{ url('jsonuserview') }}/{{ $row->id }}/view" style="text-decoration:none;color:#fff;">View</a></button></td>
          {{-- <a href="{{ url('jsonuserdelete') }}/{{ $row->id }}" style="text-decoration:none;color:#fff;">Delete</a> --}}
      </tr>
      @endforeach
    </tbody>
  </table>

</form>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
      function deleteuser(id){
      let text = "Do You Really Want to Delete ?"; 
      if (confirm(text) == true) 
      {
      $.get('{{ url('jsonuserdelete') }}',{id:id},function(data){
      if(data == 1) 
         { 
          alert('Data Deleted Successfully'); 
          location.reload(); 
        } 
      }); 
      }
     }
</script>  
  </body>
  </html>