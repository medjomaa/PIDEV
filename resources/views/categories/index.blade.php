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
    background-image: url('https://img.freepik.com/premium-photo/dark-gym-with-red-lights-black-bar-that-says-fitness_911201-3358.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
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
}

.table-title {
    padding-bottom: 15px;
    background: #cc0000;
    color: #fff;
    padding: 16px 30px;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
}

.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}

.table-title .btn-group {
    float: right;
}

.table-title .btn {
    background-color: rgba(0, 0, 0, 0.5);
    color: rgba(255, 0, 0, 0.7);
    font-size: 13px;
    border: 2px solid rgba(255, 0, 0, 0.7);
    border-radius: 2px;
    margin-left: 10px;
}

.table-title .btn:hover {
    background-color: rgba(255, 0, 0, 0.7);
    color: #fff;
}

table.table tr th, table.table tr td {
    border-color: #e9e9e9;
    padding: 12px 15px;
    color: rgb(192, 192, 192);
}

table.table tr th:first-child, table.table tr th:last-child {
    width: auto;
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

table.table td a.edit {
    color: #FFC107;
}

table.table td a.delete {
    color: #F44336;
}

.pagination li a, .pagination li a:hover, .pagination li.active a, .pagination li.active a.page-link {
    background: #03A9F4;
    color: #fff;
}

.custom-checkbox input[type="checkbox"]:checked + label:before {
    border-color: #03A9F4;
    background: #03A9F4;
}

.modal .modal-content {
    background: rgba(27, 27, 50, 0.85);
    color: rgb(192, 192, 192);
}

input, textarea, select {
    background-color: #0a0a23;
    border: 1px solid #cc0000;
    color: #ffffff;
}

input[type="submit"] {
    background-color: #cc0000;
    color: white;
}

input[type="submit"]:hover {
    background-color: #ff4d4d;
}

</style>

<div class="container">
  <div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-6">
          <h2>Manage <b>Category</b></h2>
        </div>
        <div class="col-sm-6">
          <a href="{{ route('categories.create') }}" class="btn btn-success" data-toggle="modal"><i class="fas fa-plus icon"></i><span>Add New Category</span></a>
        </div>
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
          <td>
              <form action="{{ route('categories.edit', $category) }}" method="GET">
              @csrf
              <button class="btn btn-primary" data-toggle="modal" type="submit"><i class='bx bx-plus icon'></i>Edit</button>
              </form>
          </td>
          <td>
              <form action="{{ route('categories.destroy', $category) }}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-primary" data-toggle="modal" type="submit"><i class='bx bx-trash icon'></i>Delete</button>
              </form>
          </td>
          
        </tr>
        @endforeach
      </tbody>
    </table>
    
</div>

@endsection
