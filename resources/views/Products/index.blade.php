@extends('dashboard')

@section('content')
<style>
       body {
        background-image: url('https://img.freepik.com/premium-photo/dark-gym-with-red-lights-black-bar-that-says-fitness_911201-3358.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
    }
    .modal {
    position: fixed; 
    z-index: 1050;
    left: 0; 
    top: 0; 
    width: 100%; 
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0); /* Reduced opacity for a lighter background */
    display: flex; 
    align-items: center; 
    justify-content: center;
}


.modal-content {
    background-color: rgba(0,0,0,0);
 
    color: #E0E0E0;
    padding: 20px;
    width: 45%; 
    height: 50%;/* Adjust to match card's width for consistency */
    max-height: 600px; /* Adjusted max-width to make it wider as per card */
    max-width: 600px; /* Adjusted max-width to make it wider as per card */
    margin: auto; /* Center in viewport */
    overflow: hidden; /* Ensures content fits within the border-radius */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transitions */
}

/* Optional: Animation for fading in modal content */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

.modal-content {
    animation: fadeIn 1s;
}


    .panel {
        background: rgba(27, 27, 50, 0.85);
        border-radius: 5px;
        color: rgb(192, 192, 192);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .panel-body {
        padding: 20px;
    }

    a {
        color: #FFC107;
        margin-right: 10px;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background: rgba(44, 44, 78, 0.85);
    }

    th, td {
        padding: 10px;
        border: 1px solid #ccc;
        color: rgb(192, 192, 192);
    }

    th {
        background-color: #cc0000;
        font-weight: bold;
    }

    .success-message {
        margin-top: 20px;
        color: #4CAF50;
        font-weight: bold;
    }

    button[type="submit"] {
        background-color: transparent;
        border: 2px solid rgba(255, 0, 0, 0.7);
        color: rgba(255, 0, 0, 0.7);
        cursor: pointer;
        border-radius: 2px;
    }

    button[type="submit"]:hover {
        background-color: rgba(255, 0, 0, 0.7);
        color: #fff;
        text-decoration: none;
    }

    .product-image {
        max-width: 100px;
        max-height: 100px;
        border-radius: 5px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    {{-- Only show this button if the user is an admin --}}
                    @if (Auth::user()->isAdmin())
                        <a href="{{ route('products.create') }}" class="btn btn-success">Create New Product</a>
                    @endif

                    <table>
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>
                                        @if($product->image)
                                            <img src="{{ asset($product->image) }}" alt="Product Image" class="product-image">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>
                                        <a href="#" class="view-product" data-product-id="{{ $product->id }}">View</a>
                                        {{-- Only show edit and delete buttons if the user is an admin --}}
                                        @if (Auth::user()->isAdmin())
                                            <a href="{{ route('products.edit', $product) }}">Edit</a>
                                            <form action="{{ route('products.destroy', $product) }}" method="post" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="confirmDeletion(event)" >
                                                 Delete
                                                </button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="productModal" class="modal" style="display:none;">
    <div class="modal-content">
        <!-- Product details will be loaded here -->
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
        function confirmDeletion(event) {
    event.preventDefault();
    const form = event.target.form; // Access the form

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33', // Dark red for the confirm button
        cancelButtonColor: '#444', // Dark grey (or blackish) for the cancel button
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
    });
}

    window.onload = function() {
    setTimeout(function() {
        var successMessage = document.getElementById('success-message');
        var errorMessage = document.getElementById('error-message');

        // Function to smoothly fade out an element
        var fadeOutEffect = function(elem) {
            var fadeEffect = setInterval(function() {
                if (!elem.style.opacity) {
                    elem.style.opacity = 1;
                }
                if (elem.style.opacity > 0) {
                    elem.style.opacity -= 0.1;
                } else {
                    clearInterval(fadeEffect);
                    elem.style.display = 'none';
                }
            }, 60);
        };

        if (successMessage) {
            fadeOutEffect(successMessage);
        }
        if (errorMessage) {
            fadeOutEffect(errorMessage);
        }
    }, 4000); // Start fading out after 4 seconds
};

$(document).ready(function(){
    $('.view-product').click(function(e) {
        e.preventDefault();
        var productId = $(this).data('product-id');
        $.get('/products/' + productId, function(data) {
            $('.modal-content').html(data);
            $('#productModal').fadeIn();
        });
    });

    $(document).mouseup(function(e) {
        var container = $(".modal-content");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('#productModal').fadeOut();
        }
    });
});
$.get('/products/' + productId, function(data) {
    console.log(data); // Log the data to inspect what's being returned
    $('.modal-content').html(data);
    $('#productModal').fadeIn();
});

</script>
@endsection