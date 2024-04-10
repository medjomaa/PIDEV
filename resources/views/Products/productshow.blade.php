@extends('frontend')
@section('title', 'Power Gym - Boutique')
@section('content')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            width: 100%;
            height: auto; /* Updated to accommodate content */
            margin: 0;
            padding-bottom: 50px; /* Added padding to avoid content sticking to the bottom */
            background-color: #1b1b32;
            color: rgb(192,192,192);
            font-family: Cambria;
            font-size: 16px;
            background-image: url(https://i0.wp.com/diversegym.co.uk/wp-content/uploads/2022/07/Diverse-Gym-Cardio-Gallery5.jpg?fit=1500%2C1000&ssl=1);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .welcome {
        margin: 20px auto; /* Reduced top and bottom margin */
        width: 70%; /* Narrower width for a smaller banner */
        border: 2px solid #ffffff; /* White border */
        border-radius: 10px; /* Rounded corners */
        padding: 10px; /* Reduced padding */
        text-align: center;
        background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent black */
    }

    .welcome h2 {
        color: #ffffff; /* White color for better visibility */
        font-size: 28px; /* Reduced font size for h2 in welcome */
        margin-bottom: 5px; /* Reduced spacing between title and text */
    }

    .product p {
        margin: 10px 0;
        color: #ffffff; /* Ensuring product text is white */
    }
        .welcome h2 {
            color: #ffffff; /* White color for better visibility */
            margin-bottom: 10px; /* Spacing between title and text */
        }
        .products-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px; /* Adjusted top margin */
        }
        .product {
    width: 300px;
    padding: 20px;
    background-color: rgba(0, 0, 0, 0.7);
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    color: #ffffff;
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    min-height: 400px; /* Adjust this value based on your content's needs */
}

        .product h2 {
            margin-top: 0;
            font-size: 24px;
            text-align: center;
        }
        .product p {
            margin: 10px 0;
        }
        .product img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .buy-button {
            width: auto; /* Make the button width auto to match the content width */
        padding: 10px 20px; /* Adjust padding to fit the text */
        margin-top: 10px; /* Optional: Add some margin at the top */
            background-color: #cc0000;
            border: none;
            border-radius: 5px;
            color: #ffffff;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            align-self: center; /* Center the button horizontally */
        }
        .buy-button:hover {
            background-color: #ff4d4d;
        }
        
    </style>
</head>
<body>
    <div class="welcome">
        <h2>Welcome to Power Gym Boutique</h2>
        <p>Explore our top-quality training equipment and gear up for your fitness journey!</p>
    </div>
    <div class="products-container">
        @foreach($products as $product)
            <div class="product">
                <img src="{{ $product->image }}" alt="{{ $product->name }}">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p>Prix : ${{ $product->price }}</p>
                <form action="{{ route('purchase', ['id' => $product->id]) }}" method="POST">
                    @csrf
                    <button type="submit" class="buy-button">buy</button>
                </form>
            </div>
        @endforeach
    </div>
</body>
</html>
@endsection
