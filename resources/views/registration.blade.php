@extends('layout')
@section('title','Registration')
@section('content')
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
    padding: 20px 20px 20px 0; /* Consistent padding with the login page */
    align-items: center;
    justify-content: flex-start; /* Align box to the left for registration */
}

.registration-box {
    background-color: rgba(255, 255, 255, 0.5); /* Matching the login box transparency */
    border-radius: 50px; /* Rounded edges as in the login box */
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    padding: 20px; /* Keep padding, which affects inner content alignment */
    margin-left: 10px; /* Gap on the left */
    width: 600px; /* Matching width */
    display: flex;
    flex-direction: column;
    align-items: left;
    overflow-y: auto; /* Scrollable content */
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


.logo, .registration-text {
    text-align: center; /* Center align the logo and registration text */
    width: 100%;
}

.logo {
    font-family: 'Arial', sans-serif;
    font-size: 30px;
    font-weight: bolder;
    color: #000;
    margin-bottom: 40px; /* Space below logo */
}

.registration-text {
    font-weight: normal; /* Bold "Register" text */
    font-size: 22px;
    margin-bottom: 30px; /* Space below "Register" */
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
<div class="registration-box">
    <div class="logo">PowerGym</div>
    <div class="registration-text">Register</div> <!-- Adjusted to "Register" -->
    <form action="{{route('registration.post')}}" method="POST">
        @csrf
        <div>

            <input type="text" class="form-control" name="name" placeholder="Fullname">
        </div>

        <div>

            <input type="email" class="form-control" name="email" placeholder="Email address">
        </div>

        <div>

            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>

        <button type="submit" class="btn-custom">Submit</button>
    </form>
    <div class="footer-links">
        <a href="login">Login</a> | <a href="#">Privacy</a> | <a href="#">Terms of Use</a>
    </div>
</div>
@endsection
