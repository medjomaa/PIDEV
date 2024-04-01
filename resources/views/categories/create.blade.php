@extends('dashboard')

@section('content')

<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">

<style>
body {
    background-image: url('https://img.freepik.com/premium-photo/dark-gym-with-red-lights-black-bar-that-says-fitness_911201-3358.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

input, textarea {
    background-color: #0a0a23;
    border: 1px solid #cc0000;
    color: #ffffff;
    padding: 10px;
    margin: 8px 0;
    width: 100%;
}

input[type="submit"], button.btn-green {
    background-color: #cc0000;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

input[type="submit"]:hover, button.btn-green:hover {
    background-color: #ff4d4d;
}

.container {
    padding: 20px;
    background-color: rgba(27, 27, 50, 0.85);
    color: rgb(192, 192, 192);
    border-radius: 5px;
    max-width: 500px;
    margin: auto;
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
}
</style>

<div class="container">
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <h2>Create <b>Category</b></h2>
</br>
        <div>
            <label for="name" style="color: #ffffff;">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="comment" style="color: #ffffff;">Comment:</label>
            <textarea id="comment" name="comment" required></textarea>
        </div>

        <div>
            <button type="submit" class="btn-green">Create Event</button>
        </div>
    </form>
</div>

@endsection
