@extends('dashboard')

@section('content')

<html>

<head>
    <title>Create | Events</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <style>
        body, html {
        margin: 0;
        padding: 0;
        background-image: url(https://img.freepik.com/premium-photo/dark-gym-with-red-lights-black-bar-that-says-fitness_911201-3358.jpg);
        width: 100%;
        height: 100%;
        font-family: "Nunito", sans-serif;
        background-size: cover; /* Cover the entire page */
        background-position: center; /* Center the background image */
        background-repeat: no-repeat; /* Do not repeat the background */
        display: flex;
        flex-direction: column; /* Stack content vertically */
        align-items: center; /* Center content horizontally */
        justify-content: flex-start; /* Align content to the top */
    }
        h1 {
        font-size: 36px; /* Increased font size */
        color: white; /* Red color for headings */
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
        color: white; /* Ensures text is readable against the darker background */
    }

        h3 {
        font-size: 40px; /* Increased font size */
        color: white; /* Red color for sub-headings */
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
            color: white; /* Adjusted icon color to match the theme */
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

        .btn-green {
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

        .btn-green:hover {
            opacity: 0.7;
        }
    </style>
</head>

<body>
    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <h1>Create | Events</h1>
        <div class="case">
            <h3>PowerGym EVENTS</h3>
            <div class="grid">
                <label id="ic"><span class="material-icons-outlined">title</span> Title</label>
                <input type="text" id="title" name="title" required class="input">
                <label id="ic"><span class="material-icons-outlined">description</span> Description</label>
                <textarea id="description" name="description" required class="input"></textarea>
                <label id="ic"><span class="material-icons-outlined">category</span> Type</label>
                <select id="type" name="type" required class="input">
                    @foreach($categories as $category)
                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <label id="ic"><span class="material-icons-outlined">event</span> Start Date</label>
                <input type="date" id="start_date" name="start_date" value="{{ old('start_date') }}" required class="input">
                <label id="ic"><span class="material-icons-outlined">event</span> End Date</label>
                <input type="date" id="end_date" name="end_date" value="{{ old('end_date') }}" required class="input">
            </div>
    </br></br></br>
            <button type="submit" class="btn-green">Create Event</button>
        </div>
    </form>
</body>

</html>

@endsection
