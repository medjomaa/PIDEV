@extends('frontend')
@section('title','Login')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title','custom auth laravel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
<style>
body {
    background-color: #1b1b32;
    background-image: url('https://r2.erweima.ai/imgcompressed/compressed_b618ba1c41883ba7c191ea610eb5559d.webp');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    height: 100vh;
    margin: 0;
    padding: 20px 20px 20px 0; /* Padding added to top, right, and bottom */
    align-items: center;
    justify-content: flex-end; /* Align box to the right */
}

.login-box {
    background-color: rgba(255, 255, 255, 0.5); /* Increased transparency */
    border-radius: 50px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    
    padding: 10px 20px 20px; /* Adjusted padding for wider fields */
    width: 600px; /* Increased box width */
    max-height: calc(100% - 40px); /* Adjust height to account for body padding */
    display: flex;
    flex-direction: column;

    overflow-y: auto; /* Ensure content is scrollable if it exceeds the box height */
}
.logo, .log-in-text {
    text-align: center; /* Center align the logo and "Log in" text */
    width: 100%;
}
.logo {
    font-family: 'Arial', sans-serif;
    font-size: 30px;
    font-weight: bolder;
    color: #000;
    margin-bottom: 40px; /* Increased space below logo */
}

.log-in-text {
    font-weight: normal; /* Make "Log in" text bolder */
    font-size: 22px;
    margin-bottom: 30px; /* Increased space below "Log in" */
}

.form-control, .btn-custom {
    background-color: #ffffff;
    border: 2px solid #cc0000;
    border-radius: 5px;
    color: #000;
    padding: 15px;
    width: 100%; /* Full width of parent, accounting for padding */
    box-sizing: border-box; /* Include padding and border in the element's total width */
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 20px;
}

.btn-custom {
    background-color: #cc0000;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
}
.footer-links {
    margin-top: auto;
    font-size: 14px;
    text-align: center; /* Center the footer links */
}

.footer-links a {
    color: #000;
    text-decoration: none;
    margin: 0 10px; /* Keeps spacing between links */
}

</style>
<!-- Before your login form -->
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<!-- Your login form continues below -->

<div class="login-box">
    <div class="logo">PowerGym</div>
    <div class="log-in-text">Log in</div>
    <form action="{{route('login.post')}}" method="POST">
        @csrf
        <div>
            <input type="email" class="form-control" name="email" placeholder="Email address">
        </div>

        <div>
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>

        <button type="submit" class="btn-custom">Login</button>
    </form>
    <div class="footer-links">
    <a href="{{ route('registration') }}">Sign Up</a> | <a href="{{ route('privacy-policy') }}">Privacy</a> | <a href="{{ route('terms-of-use') }}">Terms of Use</a>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
@endsection
