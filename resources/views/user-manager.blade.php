
@extends('dashboard')
@section('title', 'Power Gym - Feedback')
@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="profile-update-wrapper">
    <form class="form-horizontal profile-update" method="POST" action="{{ route('profile.update') }}">
        @csrf
    <!-- Name Field -->
    <div class="form-group clearfix">
        <div class="col-sm-12 control-label">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Your name" value="{{ $user->name }}">
        </div>
    </div>
    <!-- Email Field -->
    <div class="form-group clearfix">
        <div class="col-sm-12 control-label">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Your email" value="{{ $user->email }}">
        </div>
    </div>
    <!-- Password Field -->
    <div class="form-group clearfix">
        <div class="col-sm-12 control-label">
            <label for="password">New Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="New Password">
        </div>
    </div>
    <!-- Password Confirmation Field -->
    <div class="form-group clearfix">
        <div class="col-sm-12">
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm New Password">
        </div>
    </div>
    <!-- Submit Button -->
    <div class="form-btns clearfix">
        <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
    </form>
</div>

<style>
/* Base Setup */
body {
    font-family: 'Open Sans', sans-serif;
    background-color: #fff; /* Light background */
    color: #333; /* Dark text for readability */
    margin: 0;
    padding: 20px;
    text-align: center;
}

/* Form Container */
.profile-update-wrapper {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background: #FFF; /* White background */
    border: 1px solid #FFD3D3; /* Light red border */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    border-radius: 8px; /* Soften the corners */
}

/* Form Styles */
.form-horizontal {
    max-width: 500px;
    margin: auto;
}

.form-group {
    margin-bottom: 15px;
}

.control-label {
    margin-bottom: 5px;
    text-align: left;
    font-weight: bold;
    color: #333; /* Dark text for contrast */
}

.form-control {
    border: 2px solid #FFAAAA; /* Transparent red border */
    background-color: rgba(255, 235, 235, 0.3); /* Transparent white background */
    color: #333;
    padding: 10px;
    border-radius: 20px;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1); /* Inner shadow for depth */
}

.form-control:focus {
    border-color: #FF5757; /* Brighter red on focus */
    outline: none; /* Remove the default outline */
    background-color: #FFF; /* Solid white on focus */
}

/* Button Enhancements */
.btn-primary {
    background-color: #FF5757; /* Red background */
    color: #FFF; /* White text */
    border: none; /* Remove default border */
    padding: 10px 20px;
    border-radius: 20px; /* Rounded edges */
    box-shadow: 0 2px 4px rgba(255, 87, 87, 0.4); /* Soft red shadow for depth */
    transition: background-color 0.3s ease-in-out;
}

.btn-primary:hover {
    background-color: #E04D4D; /* Darker red on hover */
}

@media screen and (min-width: 640px) {
    .form-horizontal {
        padding: 0 4%;
    }
}
</style>



@endsection