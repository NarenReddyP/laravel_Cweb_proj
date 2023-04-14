
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

</head>

<body>
<div class="bg-light p-5 rounded">
    <h1>Files</h1>
    <a href="{{ route('creatfile') }}" class="btn btn-primary float-right mb-3">Add file</a>

    {{-- @include('layouts.partials.messages') --}}

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Size</th>
          <th scope="col">Type</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        {{-- @foreach($files as $file)
          <tr>
            <td width="3%">{{ $file->id }}</td>
            <td>{{ $file->name }}</td>
            <td width="10%">{{ $file->size }}</td>
            <td width="10%">{{ $file->type }}</td>
            <td width="5%"><a href="{{ $file->type }}" class="btn btn-danger btn-sm">Delete</a></td>
          </tr>
        @endforeach --}}
      </tbody>
    </table>
</div>

</body>
</html>