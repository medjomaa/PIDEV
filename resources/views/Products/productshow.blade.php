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
            background-image: url('https://images.hdqwalls.com/download/3d-abstract-traingle-low-poly-rq-1920x1200.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;/* Do not repeat the background */
        background-attachment: fixed;
        }
        .welcome {
        margin: 20px auto;
        width: 70%;
        border: 2px solid #ffffff;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        background-color: rgba(0, 0, 0, 0.7);
        color: #e0e0e0; /* Lighter grey for better readability */
    }

    .welcome p {
        color: #f8f8f8; /* Even lighter color specifically for paragraphs */
    }


        .search {
            margin-top: 20px; /* Space between text and search form */
            display: flex;
            justify-content: center;
            gap: 10px;
        }


    .content-section {
        text-align: justify;
        padding: 0 20px; /* Padding for text content */
        margin-top: 20px; /* Space below the welcome banner */
        color: #ffffff;
        font-size: 18px; /* Slightly larger text for readability */
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
        
        .search {
            margin-top: 20px; /* Space between text and search form */
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .search input[type="text"], .search select {
            width: 300px;
            padding: 10px;
            border-radius: 5px;
            border: 2px solid #ffffff;
            background-color: rgba(255, 255, 255, 0.5);
            color: #000000;
        }

        .search button {
    width: auto; /* Make the button width auto to match the content width */
    padding: 10px 20px; /* Adjust padding to fit the text */
    margin-top: 10px; /* Optional: Add some margin at the top */
    background: linear-gradient(to left, black 50%, red 50%); /* Gradient from black to red */
    border: none; /* No border */
    border-radius: 10px; /* Uniformly rounded corners */
    color: #ffffff; /* White text for better visibility */
    font-size: 18px; /* Font size */
    cursor: pointer; /* Pointer cursor on hover */
    transition: background-color 0.3s ease; /* Smooth transition for hover effects */
    align-self: center; /* Center the button horizontally within its container */
}

.search button:hover {
    transform: scale(1.05); /* Slightly increase the size of the button */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); /* Add a subtle shadow for depth */
}


        .products-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="welcome">
        <h2>Welcome to Power Gym Boutique</h2>
        <p>Explore our top-quality training equipment and gear up for your fitness journey!</p>
        <p>At Power Gym Boutique, we are committed to providing you with the best fitness gear and equipment to support your wellness journey. Our carefully selected products range from professional gym machines to comfortable athletic wear, ensuring that you have everything you need for effective workouts. Explore our collection and find the perfect fit for your fitness goals!</p>
        
        <div class="search">
            <form action="{{ route('products.productshow') }}" method="GET">
                <input type="text" name="search" placeholder="Search products..." value="{{ request('search') }}">
                <select name="sort">
                    <option value="asc" {{ request('sort') == 'asc' ? 'selected' : '' }}>Price low to high</option>
                    <option value="desc" {{ request('sort') == 'desc' ? 'selected' : '' }}>Price high to low</option>
                    <option value="name_asc" {{ request('sort') == 'name_asc' ? 'selected' : '' }}>Name A-Z</option>
                    <option value="name_desc" {{ request('sort') == 'name_desc' ? 'selected' : '' }}>Name Z-A</option>
                </select>
                <button type="submit">Update</button>
            </form>
        </div>
    </div>

   

    <div class="products-container">
        @foreach($products as $product)
            <div class="product">
                <img src="{{ $product->image }}" alt="{{ $product->name }}">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p>Price: ${{ $product->price }}</p>
                <form action="{{ route('purchase', ['id' => $product->id]) }}" method="POST">
                    @csrf
                    <button type="submit" class="buy-button">Buy</button>
                </form>
            </div>
        @endforeach
    </div>
</body>
</html>
@endsection

