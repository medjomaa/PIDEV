@extends('dashboard')

@section('content')

<html>

<head>
    <title>Update | Events</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <style>
        body, html {
    margin: 0;
    padding: 0;
    background-image: url('https://img.freepik.com/premium-photo/dark-gym-with-red-lights-black-bar-that-says-fitness_911201-3358.jpg');
    background-size: cover; /* Cover the entire page */
    background-position: center; /* Center the background image */
    background-repeat: no-repeat; /* Do not repeat the background */
    font-family: "Nunito", sans-serif;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column; /* Stack content vertically */
    align-items: center; /* Center content horizontally */
    justify-content: flex-start; /* Align content to the top */
}

h1 {
    font-size: 36px; /* Increased font size */
    color: white; /* Changed color to white */
    text-align: center;
    margin-top: 30px; /* Added some margin to the top */
}

.case {
    width: 700px; /* Increased width for a wider appearance */
    background-color: rgba(0, 0, 0, 0.5); /* Black background with transparency */
    border-radius: 10px; /* Increased border-radius */
    box-shadow: 0px 0px 8px #FF4136; /* Shadow with red color */
    margin: 0 auto;
    margin-top: 50px;
    overflow: hidden;
    padding: 40px; /* Increased padding */
    padding-bottom: 60px; /* Increased padding-bottom */
    color: white; /* Changed text color to white */
}

h3 {
    font-size: 40px; /* Increased font size */
    color: white; /* Changed color to white */
}

.grid {
    display: grid;
    grid-template-columns: 15% 85%; /* Adjusted column sizes */
    grid-template-rows: auto; /* Auto-adjust row height */
    grid-gap: 20px; /* Increased grid gap for better spacing */
    margin-top: 20px; /* Added some margin to the top inside the grid */
}

#ic {
    font-size: 20px; /* Increased font size */
    color: white; /* Adjusted icon color to white */
}

.input, select, textarea {
    background-color: #2C2C54; /* Darker background for inputs */
    color: white; /* White text color for better contrast */
    width: 100%;
    padding: 10px; /* Increased padding for better appearance */
    border: 2px solid #FF4136; /* Red border */
    border-radius: 5px; /* Rounded borders for inputs */
    margin-top: 5px; /* Adjusted margin top */
    font-size: 16px; /* Increased font size */
}

.btn-green { /* Assuming this replaces your '.simpan' class */
    background-color: #FF4136;
    width: 100%;
    padding: 15px 0; /* Adjust padding for bigger button */
    border: none;
    border-radius: 5px;
    color: white;
    font-size: 20px; /* Increased font size */
    cursor: pointer; /* Cursor pointer for better UX */
    transition: 0.3s;
}

button {
    background-color: #FF4136;
    width: 60%; /* Adjusted width to make the button smaller */
    padding: 10px 0; /* Adjust padding for a slightly smaller button */
    border: none;
    border-radius: 5px;
    color: white;
    font-size: 18px; /* Optionally adjust font size for better fit */
    cursor: pointer;
    transition: all 0.3s ease;
    text-align: center;
    display: block; /* Changed to block to enable margin auto to work */
    margin: 20px auto; /* Adds margin to the top and bottom, auto centers it horizontally */
}

button:hover {
    opacity: 0.7;
    transform: scale(1.05); /* Slightly enlarges the button to give a lift effect */
    box-shadow: 0 5px 15px rgba(255, 65, 54, 0.4); /* Adds a shadow for more depth */
}



    </style>
</head>

<body>
<form action="{{ route('events.update', $event) }}" method="POST">
        @csrf
        @method('PUT')
        <h1>Update | Events</h1>
        <div class="case">
            <h3>Power Gym</h3>
            <div class="grid">

                <!-- Error messages display -->
                @if ($errors->any())
                    <div style="background-color: #FF4136; color: white; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <label for="title" id="ic">Title</label>
                <input id="title" type="text" class="form-control" name="title" value="{{ old('title', $event->title) }}" required autofocus>

                <label for="description" id="ic">Description</label>
                <textarea id="description" class="form-control" name="description" required>{{ old('description', $event->description) }}</textarea>

                <label for="type" id="ic">Type:</label>
                <select id="type" name="type" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->name }}" {{ $category->name == $event->type ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
     
                <label for="start_date" id="ic">Start Date</label>
                <input id="start_date" type="date" class="form-control" name="start_date" value="{{ old('start_date', $event->start_date->format('Y-m-d')) }}" required>

                <label for="end_date" id="ic">End Date</label>
                <input id="end_date" type="date" class="form-control" name="end_date" value="{{ old('end_date', $event->end_date->format('Y-m-d')) }}" required>
                @if ($errors->has('start_date'))
    <span class="error">{{ $errors->first('start_date') }}</span>
@endif

@if ($errors->has('end_date'))
    <span class="error">{{ $errors->first('end_date') }}</span>
@endif

            </div>
            <button type="submit" class="btn btn-primary">Update Event</button>
        </div>
    </form>
</body>

</html>

@endsection