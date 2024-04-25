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

    .btn, input[type="submit"] {
    cursor: pointer; /* Add this line to both selectors */
}

/* Existing styles for .btn */
.btn {
    background-color: rgba(0, 0, 0, 0.5);
    color: rgba(255, 0, 0, 0.7);
    font-size: 13px;
    border: 2px solid rgba(255, 0, 0, 0.7);
    border-radius: 2px;
    margin-left: 10px;
}

.btn:hover {
    background-color: rgba(255, 0, 0, 0.7);
    color: #fff;
}

/* Existing styles for input[type="submit"] */
input[type="submit"] {
    background-color: #cc0000;
    color: white;
}

input[type="submit"]:hover {
    background-color: #ff4d4d;
}
/* Button Hover Effects */
.btn-primary:hover, .btn-danger:hover {
    opacity: 0.8;
}

/* Enhanced Button Styles */
/* Button Styles for Editing (More intuitive editing color) */
.btn-primary {
    background-color: #17a2b8; /* Bootstrap info blue or a teal for editing */
    border-color: #17a2b8;
}

.btn-primary:hover {
    background-color: #138496; /* A slightly darker shade for hover */
    border-color: #117a8b;
}


/* Custom styles for .btn-danger.btn-red */
.btn-danger.btn-red {
    background-color: #ffcccc; /* Light red background */
    color: #ffffff; /* White text */
    border: none; /* Removes any border */
    transition: background-color 0.3s ease, color 0.3s ease; /* Smooth transition for background and color */
}

.btn-danger.btn-red:hover {
    background-color: #cc0000; /* Darker red on hover */
    color: #dcdcdc; /* Light grey text */
}


/* Additional Styling for Consistency and Aesthetics */
.table-title {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.table-wrapper {
    overflow: hidden; /* Ensures box shadow is visible */
}

/* Icon Enhancements */
i.icon {
    margin-right: 5px; /* Space between icon and text */
}

/* Custom Checkbox Enhancements */
.custom-checkbox label:before {
    border-radius: 3px; /* Match the button border-radius */
}

</style>
<div class="container">
    <div class="table-wrapper">
        <!-- Add this section to display error messages -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Manage <b>Events</b></h2>
                </div>
                <td> 
                    @if (Auth::user()->isAdmin())
                <div class="col-sm-6">
		            <a style="color:white; background-color: #cc0000;" href="{{ route('events.create') }}" class="btn btn-success btn-green" data-toggle="modal"><i class="fas fa-plus icon"></i><span>Add New Event</span></a>    
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
          <th>Title</th>
      <th>Description</th>
      <th>Type</th>
      <th>Start date</th>
      <th>End date</th>
      <th>Created By</th> <!-- New Column for User Name -->
      <th>Actions</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($events as $event)
        <tr>
          <td>
            <span class="custom-checkbox">
                <input type="checkbox" id="checkbox{{$event->id}}" name="options[]" value="{{$event->id}}">
                <label for="checkbox{{$event->id}}"></label>
              </span>
          </td>
          <td>{{ $event->title }}</td>
        <td>{{ $event->description }}</td>
        <td>{{ $event->type }}</td>
        <td>{{ $event->start_date }}</td>
        <td>{{ $event->end_date }}</td>
        <td>{{ $event->user->name }}</td>
          <td> @if (Auth::user()->isAdmin())
                <a href="{{ route('events.edit', $event) }}" style="background: none; border: none; color: inherit;">
                    <i class="fas fa-edit"></i> Edit
                </a>
                @endif
            </td>
            <td>
            @if (Auth::user()->isAdmin())
                <form action="{{ route('events.destroy', $event) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"   class="btn btn-danger btn-red"  style="background: none; border: none; color: inherit;">
                        <i class="fas fa-trash-alt"></i> Delete
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

@endsection
