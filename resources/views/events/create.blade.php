@extends('backend')

@section('content')

<html>

<head>
    <title>Create | Events</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, Helvetica, sans-serif;
        }

        h1 {
            width: 100%;
            text-align: center;
        }

        .case {
            width: 300px;
            height: auto;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0px 0px 4px #dbdbdb;
            margin: 0 auto;
            margin-top: 50px;
            overflow: hidden;
            padding: 20px;
            padding-bottom: 50px;
        }

        h3 {
            width: 100%;
            text-align: center;
            font-size: 30px;
            color: #4d2df1ff;
        }

        .grid {
            display: grid;
            width: 100%;
            height: auto;
            grid-template-columns: 10% 83%;
            grid-template-rows: 40px 40px 40px;
            grid-gap: 10px;
        }

        #ic {
            font-size: 15px;
            color: #4d2df1ff;
        }

        .input {
            width: 100%;
            height: 20px;
            outline: none;
            border: 0;
            border-bottom: 2px solid #4d2df1ff;
            padding: 3px;
            font-size: 15px;
            margin-top: 5px;
        }

        .simpan {
            background-color: #4d2df1ff;
            margin-top: 30px;
            width: 100%;
            height: 40px;
            border: 0;
            border-radius: 5px;
            color: white;
            font-size: 15px;
            outline: none;
            transition: 0.3s;
        }

        .simpan:hover {
            opacity: 0.2;
        }
        .btn-green {
  background-color: green;
  /* Add any additional styles you want for the green button */
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
                <label id="ic">Title</label>
                <input type="text" id="title" name="title" required>
                <label id="ic">Description</label>
                <textarea id="description" name="description" required></textarea>
                <label id="ic">Type</label>
                    <select id="type" name="type" required>
                    @foreach($categories as $category)
                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                    @endforeach
                    </select>
                <label id="ic">Start Date</label>
				<input type="date" id="start_date" name="start_date" value="{{ old('start_date') }}" required>
                <label id="ic">End Date</label>
				<input type="date" id="end_date" name="end_date" value="{{ old('end_date') }}" required>
	
            </div>
            <button type="submit" class="btn-green">Create Event</button>

        </div>
    </form>

</body>

</html>

@endsection