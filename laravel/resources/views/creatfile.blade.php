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
    <h1>Add file</h1>
    
    <form action="#" method="post" enctype="multipart/form-data">
        {{-- @include('layouts.partials.messages') --}}
        @csrf
        <div class="form-group mt-4">
          <input type="file" name="file" class="form-control" accept=".jpg,.jpeg,.bmp,.png,.gif,.doc,.docx,.csv,.rtf,.xlsx,.xls,.txt,.pdf,.zip">
        </div>

        <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Save</button>
    </form>

</div>

</body>
</html>