@extends('dashboard')

@section('content')

<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">

<style>
body {
    background-image: url("https://www.pixel4k.com/wp-content/uploads/2020/08/red-and-blue-broken-abstract_1596929088.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;/* Do not repeat the background */
        background-attachment: fixed;
}

input, textarea {
    background-color: #0a0a23;
    border: 1px solid #cc0000;
    color: #ffffff;
    padding: 10px;
    margin: 8px 0;
    width: 100%;
}

input[type="submit"] {
    background-color: #cc0000;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

input[type="submit"]:hover {
    background-color: #ff4d4d;
}

.container {
    padding: 20px;
    background-color: rgba(27, 27, 50, 0.85);
    color: rgb(192, 192, 192);
    border-radius: 5px;
    max-width: 700px;
    margin: auto;
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
}
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div style="padding: 20px; margin-bottom: 20px; border-radius: 3px; background: #cc0000; color: #fff; margin: -20px -25px 10px; font-size: 24px;">Edit Category</div>

            <div style="background: rgba(27, 27, 50, 0.85); padding: 20px; border-radius: 3px; color: rgb(192, 192, 192);">
                <form method="POST" action="{{ route('categories.update', $category) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name" style="color: #ffffff;">Name</label>
                        <input id="name" type="text" class="form-control" name="name" value="{{ $category->name }}" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="comment" style="color: #ffffff;">Comment</label>
                        <textarea id="comment" class="form-control" name="comment" required>{{ $category->comment }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="background-color: #cc0000; border-color: #cc0000;">Update Category</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
