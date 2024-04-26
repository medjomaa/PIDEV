@extends('dashboard')

@section('content')
<style>
    body {
        background-image: url('https://images.hdqwalls.com/download/3d-abstract-traingle-low-poly-rq-1920x1200.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;/* Do not repeat the background */
        background-attachment: fixed;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .card {
        background: linear-gradient(145deg, rgba(27, 27, 50, 0.95), rgba(50, 50, 93, 0.9));
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.19);
        overflow: hidden; /* Ensures content fits within the border-radius */
        width: 80%;
        max-width: 600px;
        margin: 20px auto;
        color: #E0E0E0;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.25), 0 8px 16px rgba(0, 0, 0, 0.22);
    }

    .card-body {
        padding: 20px;
        animation: fadeIn 1s;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .product-image {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        transition: transform 0.2s ease;
    }

    .product-image:hover {
        transform: scale(1.05);
    }

    .card-body p {
        margin-bottom: 15px;
        font-size: 16px;
        line-height: 1.6;
    }

    .card-body p strong {
        color: #FFC107;
        font-weight: bold;
    }

    .btn, input[type="submit"] {
        cursor: pointer;
        background-color: rgba(27, 27, 50, 0.85);
        color: rgba(255, 255, 255, 0.85);
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        margin-top: 10px;
        transition: background-color 0.3s ease;
    }

    .btn:hover, input[type="submit"]:hover {
        background-color: rgba(50, 50, 93, 0.9);
        color: #fff;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if($product->image)
                        <img src="{{ asset($product->image) }}" alt="Product Image" class="product-image">
                    @else
                        <p>No Image Available</p>
                    @endif
                    <p><strong>Name:</strong> {{ $product->name }}</p>
                    <p><strong>Description:</strong> {{ $product->description }}</p>
                    <p><strong>Price:</strong> ${{ $product->price }}</p>
                    <form action="{{ route('purchase', ['id' => $product->id]) }}" method="POST">
                    @csrf
                    <button type="submit" class="buy-button">buy</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    // Open modal and load product details
    $('.view-product').click(function(e) {
        e.preventDefault();
        var productId = $(this).data('product-id');
        $.get('/products/' + productId, function(data) {
            $('.modal-content').html(data);
            $('#productModal').fadeIn();
        });
    });

    // Close modal when clicking outside
    $(document).mouseup(function(e) {
        var container = $(".modal-content");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('#productModal').fadeOut();
        }
    });
});
</script>

@endsection
