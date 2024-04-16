@extends('dashboard')
@section('title','Profile')
@section('content')

<html>
    <header>
<title>Profile</title>
</header>
<body>



<div class="profile-update-wrapper">
        <header class="profile-header">
        <img src="{{ Auth::user()->profile_image ?: 'https://w7.pngwing.com/pngs/981/645/png-transparent-default-profile-united-states-computer-icons-desktop-free-high-quality-person-icon-miscellaneous-silhouette-symbol-thumbnail.png' }}" alt="User Profile Image" class="user-profile-image">
        </header>
        <form class="form-horizontal profile-update" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <!-- Name Field -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your name" value="{{ $user->name }}">
                </div>
                <!-- Email Field -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Your email" value="{{ $user->email }}">
                </div>
            </div>
            <div class="form-row">
                <!-- Password Field -->
                <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="New Password">
                </div>
                <!-- Password Confirmation Field -->
                <div class="form-group">
                    <label for="password_confirmation">Confirm New Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm New Password">
                </div>
            </div>
            <!-- Image Upload Field -->
           <!-- Profile Picture Upload Field -->
            <div class="form-group">
                <label for="profile_image">Profile Picture URL</label>
                <input type="text" class="form-control" id="profile_image" name="profile_image" placeholder="Enter image URL" value="{{ $user->profile_image }}">
            </div>
            <div class="form-group">
                <label for="profile_image_file">Upload Profile Picture</label>
                <input type="file" class="form-control-file" id="profile_image_file" name="profile_image_file">
            </div>

            <!-- Submit Button -->
            <div class="form-btns">
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>

<style>
/* Base Setup */
body {
    font-family: 'Open Sans', sans-serif;
    background-image: url('https://images.unsplash.com/photo-1612090295965-e506249ccecc?q=80&w=3324&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
    color: #fff; /* Keep text color white for contrast */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Add shadow to text for better readability */
    background-size: cover; /* Cover the entire page */
    background-position: center; /* Center the background image */
    background-repeat: no-repeat; /* Do not repeat the background */
    margin: 0;
    padding: 20px;
    text-align: center;
}

/* Profile Header: Image and Name */
.profile-header {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    margin-bottom: 40px; /* Increase spacing */
}

.user-profile-image {
    width: 120px; /* Make the image slightly larger */
    height: 120px; /* Maintain aspect ratio */
    object-fit: cover; /* Ensure the image covers the space */
    border-radius: 50%;
    border: 4px solid #FFD700; /* Gold border for coolness */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.25);
}

/* Form Wrapper */
.profile-update-wrapper {
    width: 90%;
    max-width: 960px;
    margin: 0 auto;
    padding: 40px;
    background-image: linear-gradient(to right, rgba(236, 0, 3, 0.5), rgba(248, 0, 56, 0.5), rgba(251, 0, 95, 0.5), rgba(245, 0, 132, 0.5), rgba(229, 0, 168, 0.5), rgba(209, 44, 192, 0.5), rgba(182, 67, 214, 0.5), rgba(147, 85, 232, 0.5), rgba(115, 105, 238, 0.5), rgba(82, 119, 239, 0.5), rgba(50, 130, 235, 0.5), rgba(25, 139, 227, 0.5));
    border: 1px solid #7369ee;
    box-shadow: 0 0 10px 10px #7369ee; 
    border-radius: 10px;
}


/* Form Rows and Groups */
.form-row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.form-group {
    flex: 0 0 48%; /* Adjust flex basis for 2 columns */
    display: flex;
    flex-direction: column;
}

/* Form Controls */
.form-control {
    padding: 10px;
    border: 2px solid #007BFF; /* Bright blue border */
    border-radius: 5px;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.05);
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.form-control:focus {
    border-color: #0056b3; /* Darker blue on focus */
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

/* Submit Button */
.form-btns {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.btn-primary {
    color: #fff;
    background-color: #28a745; /* Green for contrast */
    border-color: #28a745;
    padding: 10px 30px;
    border-radius: 20px;
    transition: background-color 0.2s ease-in-out;
}

.btn-primary:hover {
    background-color: #218838;
    border-color: #1e7e34;
}
</style>

</body>
</html>
@endsection