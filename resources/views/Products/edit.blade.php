@extends('dashboard')

@section('content')

<html>

<head>
    <title>Edit Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            background-image: url('https://images.hdqwalls.com/download/3d-abstract-traingle-low-poly-rq-1920x1200.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;/* Do not repeat the background */
        background-attachment: fixed;
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
            overflow: hidden;
            padding: 40px;
            padding-bottom: 60px;
            color: white;
        }

        .grid {
            display: grid;
            grid-template-columns: 15% 85%;
            grid-template-rows: auto;
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
            margin-top: 5px;
            font-size: 16px;
        }

        button {
            background-color: #FF4136;
            width: 60%;
            padding: 10px 0;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
            display: block;
            margin: 20px auto;
        }

        button:hover {
            opacity: 0.7;
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(255, 65, 54, 0.4);
        }
        #image {
    height: 50px; /* Explicitly set a height */
    padding: 10px; /* Adjust padding as necessary */
    /* Keep the rest of the styles unchanged */
}


    </style>
</head>

<body>
<form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h1>Edit Product</h1>
        <div class="case">
            <div class="grid">
                <label for="name" id="ic">Name</label>
                <input id="name" type="text" name="name" value="{{ $product->name }}" required autofocus class="input">

                <label for="description" id="ic">Description</label>
                <textarea id="description" name="description" required class="input">{{ $product->description }}</textarea>

                <label for="price" id="ic">Price</label>
                <input id="price" type="text" name="price" value="{{ $product->price }}" required class="input">


                <label for="image" id="ic">Image URL</label>
                <input type="text" id="image" name="image" value="{{ old('image', $product->image) }}" class="input">
                @if ($errors->has('image'))
                    <span class="error">{{ $errors->first('image') }}</span>
                @endif

                <label for="image_file" id="ic">Upload Image</label>
                <input type="file" id="image_file" name="image_file" class="input">
                @if ($errors->has('image_file'))
                    <span class="error">{{ $errors->first('image_file') }}</span>
                @endif
            </div>
            <button type="submit" class="btn-green">Update Product</button>
    </form>
</body>

</html>

@endsection
