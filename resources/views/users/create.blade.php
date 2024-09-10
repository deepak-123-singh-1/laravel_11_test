<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .toast-container {
            top: 1rem;
            right: 1rem;
        }
        .toast {
            transform: translateX(100%);
            transition: transform 0.5s ease-in-out;
        }
        .toast.show {
            transform: translateX(0);
        }
    </style>
</head>
<body>
   
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary text-white text-center">
        <div class="container-fluid">
            <a class="navbar-brand" href="javascript:void(0)">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <!-- <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Link</a>
                </li> -->
            </ul>
            <form class="d-flex">
                <!-- <input class="form-control me-2" type="text" placeholder="Search"> -->
                <!-- <a href="" class="btn btn-primary" type="button">Add user</a> -->
                <a href="{{ route('users') }}" class="btn bg-dark text-white" type="button">Back to list</a>

            </form>
            </div>
        </div>
    </nav>


    <div class="container mt-3">
        
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" name='name' placeholder="Name" value="{{ old('name') }}">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <input type="email" class="form-control" name='email' placeholder="Email" value="{{ old('email') }}">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="input-group mb-3">
                <input type="password" class="form-control" name='password' placeholder="Password" value="{{ old('password') }}">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <input type="password" class="form-control" name='confirm_password' placeholder="Confirm Password" value="{{ old('confirm_password') }}">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <input type="number" class="form-control" name='mobile' placeholder="Mobile" value="{{ old('mobile') }}">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" name='profile' accept="jpg, png" value="{{ old('name') }}">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        
    </div>
</body>
</html>

<!-- <button id="showToastBtn" class="btn btn-primary">Show Toast</button>

<div class="toast-container position-fixed p-3" style="z-index: 1100;">
  <div id="myToast" class="toast bg-success text-white" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header bg-success text-white">
      <strong class="me-auto">Success</strong>
      <small>Just now</small>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      This is a success toast notification with sliding animation!
    </div>
  </div>
</div> -->

    
<!-- 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.getElementById('showToastBtn').addEventListener('click', function () {
    var toastElement = document.getElementById('myToast');
    var toast = new bootstrap.Toast(toastElement);
    toast.show();
  });
</script> -->