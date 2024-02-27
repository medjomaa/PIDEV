<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Submission Confirmation</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #000; /* Black background */
            color: #fff; /* White text color */
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: #202020; /* Darker shade of black */
        }
        .alert {
            padding: 20px;
            background-color: #d9534f; /* Red background */
            color: #fff; /* White text color */
            margin-bottom: 15px;
        }
        a {
            display: inline-block;
            text-decoration: none;
            color: #d9534f; /* Red text color */
            background-color: #202020; /* Darker shade of black */
            padding: 10px 20px;
            border: 2px solid #d9534f; /* Red border */
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        a:hover {
            background-color: #d9534f; /* Red background */
            color: #000; /* Black text color */
        }
    </style>
</head>
<body>
    <div class="container">
        @if(session('message'))
            <div class="alert">
                {{ session('message') }}
            </div>
        @endif
        <a href="{{ route('feedback.show') }}">Submit Another Feedback</a>
    </div>
</body>
</html>
