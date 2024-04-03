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

    h1 {
        font-size: 36px;
        color: white;
        text-align: center;
        margin-top: 30px;
    }

    .case {
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

    .grid {
        display: grid;
        grid-template-columns: 15% 85%; /* Label and input layout */
        grid-gap: 20px; /* Space between grid items */
        margin-top: 20px; /* Space after title */
    }

    #ic {
        font-size: 20px;
        color: white; /* Icon/label color */
    }

    .input, select, textarea {
        background-color: #2C2C54; /* Dark blue background */
        color: white; /* Text color */
        width: 100%; /* Full width */
        padding: 10px; /* Padding inside inputs */
        border: 2px solid #FF4136; /* Red border */
        border-radius: 5px; /* Rounded corners */
        font-size: 16px; /* Font size */
    }

    .btn-green {
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

    .btn-green:hover {
        opacity: 0.7; /* Hover effect */
    }
</style>

<div class="case">
    <h1>Create New Product</h1>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid">
            <label for="name" id="ic">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" class="input">
            @if ($errors->has('name'))
                <span class="error">{{ $errors->first('name') }}</span>
            @endif

            <label for="description" id="ic">Description</label>
            <textarea id="description" name="description" class="input">{{ old('description') }}</textarea>
            @if ($errors->has('description'))
                <span class="error">{{ $errors->first('description') }}</span>
            @endif

            <label for="price" id="ic">Price</label>
            <input type="text" id="price" name="price" value="{{ old('price') }}" class="input">
            @if ($errors->has('price'))
                <span class="error">{{ $errors->first('price') }}</span>
            @endif

            <label for="image" id="ic">Image URL</label>
            <input type="text" id="image" name="image" value="{{ old('image') }}" class="input">
            @if ($errors->has('image'))
                <span class="error">{{ $errors->first('image') }}</span>
            @endif
        </div>
        <button type="submit" class="btn-green">Create Product</button>
    </form>
</div>

<style>
    .error {
        color: #FF4136; /* Error message color */
        font-size: 14px; /* Error message font size */
        margin-top: 5px; /* Spacing between the input field and error message */
    }
</style>

@endsection
