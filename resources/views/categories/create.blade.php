@extends('dashboard')

@section('content')
<style>
    body, html {
        margin: 0;
        padding: 0;
        background-image: url('https://img.freepik.com/premium-photo/dark-gym-with-red-lights-black-bar-that-says-fitness_911201-3358.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        font-family: "Nunito", sans-serif;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
    }

    h2 {
        font-size: 36px;
        color: white;
        text-align: center;
        margin-top: 30px;
    }

    .container {
        width: 700px; /* Adjusted for wider form */
        background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
        border-radius: 10px;
        box-shadow: 0px 0px 8px #FF4136; /* Red glow effect */
        margin: 0 auto;
        margin-top: 50px; /* Space from the top */
        padding: 40px; /* Padding inside the container */
        padding-bottom: 60px; /* Extra padding at the bottom */
        color: white; /* Text color */
    }

    label, .error {
        color: #FF4136; /* Error message and label color */
        font-size: 16px; /* Label and error message font size */
        margin-top: 5px; /* Spacing between the input field and label/error message */
        display: block; /* Make label and error message take full width */
    }

    input[type="text"], textarea {
        background-color: #2C2C54; /* Dark blue background */
        color: white; /* Text color */
        width: 100%; /* Full width */
        padding: 10px; /* Padding inside inputs */
        border: 2px solid #FF4136; /* Red border */
        border-radius: 5px; /* Rounded corners */
        font-size: 16px; /* Font size */
    }

    button.btn-green {
        background-color: #FF4136; /* Red background */
        width: 100%; /* Full width */
        padding: 15px 0; /* Padding top and bottom */
        border: none; /* No border */
        border-radius: 5px; /* Rounded corners */
        color: white; /* Text color */
        font-size: 20px; /* Font size */
        cursor: pointer; /* Pointer cursor on hover */
        transition: 0.3s; /* Smooth transition for hover effect */
        display: block; /* Display as block to take full width */
        margin: 20px auto; /* Center button and add spacing above and below */
    }

    button.btn-green:hover {
        opacity: 0.7; /* Hover effect */
    }
</style>

<div class="container">
    <h2>Create <b>Category</b></h2>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment" required></textarea>

        <button type="submit" class="btn-green">Create Categories</button>
    </form>
</div>

@endsection
