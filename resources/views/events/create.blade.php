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
        width: 700px;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 10px;
        box-shadow: 0px 0px 8px #FF4136;
        margin: 0 auto;
        margin-top: 50px;
        padding: 40px;
        padding-bottom: 60px;
        color: white;
    }

    .grid {
        display: grid;
        grid-template-columns: 15% 85%;
        grid-gap: 20px;
        margin-top: 20px;
    }

    #ic {
        font-size: 20px;
        color: white;
    }

    .input, select, textarea {
        background-color: #2C2C54;
        color: white;
        width: 100%;
        padding: 10px;
        border: 2px solid #FF4136;
        border-radius: 5px;
        font-size: 16px;
    }

    .btn-green {
        background-color: #FF4136;
        width: 100%;
        padding: 15px 0;
        border: none;
        border-radius: 5px;
        color: white;
        font-size: 20px;
        cursor: pointer;
        transition: 0.3s;
        display: block; /* Ensure button is block to fill width */
        margin: 20px auto; /* Center button */
    }

    .btn-green:hover {
        opacity: 0.7;
    }
</style>

<div class="case">
    <h1>Create New Product</h1>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid">
            <label for="name" id="ic">Name</label>
            <input type="text" id="name" name="name" required class="input">

            <label for="description" id="ic">Description</label>
            <textarea id="description" name="description" required class="input"></textarea>

            <label for="price" id="ic">Price</label>
            <input type="text" id="price" name="price" required class="input">

            <label for="image" id="ic">Image URL</label>
            <input type="text" id="image" name="image" class="input">
        </div>
        <button type="submit" class="btn-green">Create Product</button>
    </form>
</div>
@endsection
