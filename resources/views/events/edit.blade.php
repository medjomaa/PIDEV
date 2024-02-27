@extends('backend')

@section('content')

<html>

<head>
    <title>Update | Events</title>
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

    </style>
</head>

<body>
    <form action="{{ route('events.update', $event) }}" method="POST">
     	@csrf
        @method('PUT')
        <h1>Upadte | Events</h1>
        <div class="case">
            <h3>Power Gym</h3>
            <div class="grid">

			<label for="title" id="ic">Title</label>
            <input id="title" type="text" class="form-control" name="title" value="{{ $event->title }}" required autofocus>

			<label for="description" id="ic">Description</label>
            <textarea id="description" class="form-control" name="description" required>{{ $event->description }}</textarea>

			<label for="type" id="ic">Type:</label>
            <select id="type" name="type" required>
            @foreach($categories as $category)
                <option value="{{ $category->name }}" {{ $category->name == $event->type ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
            </select>
 
			<label for="start_date" id="ic">Start Date</label>
            <input id="start_date" type="date" class="form-control" name="start_date" value="{{ $event->start_date }}" required>

		
			<label for="end_date" id="ic">End Date</label>
            <input id="end_date" type="date" class="form-control" name="end_date" value="{{ $event->end_date }}" required>
		
	
            </div>
			<button type="submit" class="btn btn-primary">Update Event</button>
        </div>
    </form>

</body>

</html>

@endsection