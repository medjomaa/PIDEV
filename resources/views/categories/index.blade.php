@extends('dashboard')

@section('content')

<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
<style>
body {
    width: 100%;
    min-height: 100vh;
    margin: 0;
    padding: 20px;
    background-color: #1b1b32;
    color: rgb(192, 192, 192);
    font-family: 'Arial', sans-serif;
    font-size: 16px;
    background-image: url("https://www.pixel4k.com/wp-content/uploads/2020/08/red-and-blue-broken-abstract_1596929088.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;/* Do not repeat the background */
        background-attachment: fixed;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
}

.table-wrapper {
    background: rgba(27, 27, 50, 0.85);
    padding: 20px 25px;
    margin: 30px 0;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    overflow: hidden; /* Ensures box shadow is visible */
}

.table-title {
    padding-bottom: 15px;
    background: #cc0000;
    color: #fff;
    padding: 16px 30px;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}

.table-title .btn-group {
    float: right;
}

.btn, input[type="submit"] {
    cursor: pointer; /* Ensures the cursor indicates clickable items */
    background-color: rgba(0, 0, 0, 0.5);
    color: rgba(255, 0, 0, 0.7);
    font-size: 13px;
    border: 2px solid rgba(255, 0, 0, 0.7);
    border-radius: 2px;
    margin-left: 10px;
}

.btn:hover, input[type="submit"]:hover {
    background-color: rgba(255, 0, 0, 0.7);
    color: #fff;
}

/* Additional button styles for primary and danger states */
.btn-primary, .btn-danger {
    opacity: 1; /* Ensure buttons are fully opaque by default */
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

.btn-danger:hover {
    background-color: #c82333;
    border-color: #c82333;
}

table.table tr th, table.table tr td {
    border-color: #e9e9e9;
    padding: 12px 15px;
    color: rgb(192, 192, 192);
}

table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #2c2c4e;
}

table.table-striped.table-hover tbody tr:hover {
    background: #1b1b32;
}

table.table td a, table.table td a:hover {
    color: #FFC107;
}

.custom-checkbox label:before {
    border-radius: 3px;
}

/* Customizing form inputs to match the theme */
input, textarea, select {
    background-color: #0a0a23;
    border: 1px solid #cc0000;
    color: #ffffff;
}
</style>
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Manage <b>Categories</b></h2>
                </div>
                @if (Auth::user()->isAdmin() || Auth::user()->isTrainer())
                <div class="col-sm-6">
                    <a href="{{ route('categories.create') }}" class="btn btn-success" data-toggle="modal"><i class="fas fa-plus icon"></i><span>Add New Category</span></a>
                </div>
                @endif
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="selectAll">
                            <label for="selectAll"></label>
                        </span>
                    </th>
                    <th>Name</th>
                    <th>Comment</th>
                    <th>Created At</th>
                    <th>Created By</th> <!-- Added Column Header for User Name -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="checkbox{{$category->id}}" name="options[]" value="{{$category->id}}">
                            <label for="checkbox{{$category->id}}"></label>
                        </span>
                    </td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->comment }}</td>
                    <td>{{ $category->created_at->format('Y-m-d') }}</td>
                    <td>{{ $category->user->name ?? 'N/A' }}</td> <!-- Display the User's Name -->
                    <td>
                    @if (Auth::user()->isAdmin() || Auth::user()->isTrainer())
                        <a href="{{ route('categories.edit', $category) }}" class="edit-icon"><i class="fas fa-edit"></i></a>
                       
                        <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"onclick="confirmDeletion(event)"  class="delete-icon" style="background: none; border: none; color: inherit;"><i class='fas fa-trash'></i></button>
                        </form>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

</script>

@endsection