
@extends('dashboard')
@section('title', 'Power Gym - Feedback')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout Recommendation Form</title>
    <style>
        body {
            width: 100%;
            height: 100vh;
            margin: 0;
            background-color: #1b1b32;
            color: rgb(192,192,192);
            font-family: Cambria;
            font-size: 16px;
            background-image: url(https://i0.wp.com/diversegym.co.uk/wp-content/uploads/2022/07/Diverse-Gym-Cardio-Gallery5.jpg?fit=1500%2C1000&ssl=1); /* Replace with your image URL */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        h1,p {
            margin: 1em auto;
            text-align: center;
            color:	#ffffff /* Red */
        }

        form {
            width: 60vw;
            max-width: 500px;
            min-width: 300px;
            margin: 0 auto;
            padding: 2em;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Box shadow effect */
            background-color: rgba(0, 0, 0, 0.7); /* Cool background effect */
            border-radius: 10px;
        }

        fieldset {
            border: 5px;
            padding: 2rem 0;
            border-bottom: 3px solid #3b3b4f;
        }

        fieldset:last-of-type {
            border-bottom: 3px;
        }

        label {
            display: block;
            margin: 0.5rem 0;
            color: white; /* Red */
        }

        input, textarea, select {
            margin: 10px 0 0 0;
            width: 100%;
            min-height: 2em;
            background-color: #0a0a23;
            border: none;
            border-radius: 5px; /* Rounded corners */
            color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Black shadow effect */
            padding: 10px; /* Adjust padding */
        }

        .inline {
            width: unset;
            margin: 0 0.5em 0 0;
            vertical-align: middle;
        }

        input[type="submit"] {
            display: block;
            width: 60%;
            margin: 1em auto;
            height: 2em;
            font-size: 1.1rem;
            background-color: #cc0000; /* Red */
            border: none;
            border-radius: 5px; /* Rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Black shadow effect */
            min-width: 400px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #ff4d4d; /* Darker Red */
        }
    </style>
    <body>
    <h1>Workout Recommendation Form</h1>

@if($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('feedback.submit') }}" method="post">
    @csrf {{-- Add Laravel's CSRF token for form protection --}}
    
    <!-- Fitness Goals -->
    <label for="fitness-goal">Fitness Goal:</label>
    <select id="fitness-goal" name="fitness_goal">
        <option value="weight-loss">Weight Loss</option>
        <option value="muscle-gain">Muscle Gain</option>
        <option value="endurance">Endurance Improvement</option>
        <option value="general-fitness">General Fitness</option>
    </select>
    @error('fitness_goal')
        <div>{{ $message }}</div>
    @enderror

    <!-- Workout Preferences -->
    <label for="workout-duration">Preferred Workout Duration (minutes):</label>
    <select id="workout-duration" name="workout_duration">
        <option value="15">15</option>
        <option value="30">30</option>
        <option value="45">45</option>
        <option value="60">60</option>
        <option value="90">90</option>
    </select>
    @error('workout_duration')
        <div>{{ $message }}</div>
    @enderror

    <label for="exercise-type">Preferred Exercise Type:</label>
    <select id="exercise-type" name="exercise_type">
        <option value="cardio">Cardio</option>
        <option value="strength-training">Strength Training</option>
        <option value="flexibility">Flexibility</option>
    </select>
    @error('exercise_type')
        <div>{{ $message }}</div>
    @enderror

    <!-- Health Conditions -->
    <label for="health-conditions">Any Existing Health Conditions:</label>
    <select id="health-conditions" name="health_conditions">
        <option value="none">None</option>
        <option value="hypertension">Hypertension</option>
        <option value="diabetes">Diabetes</option>
        <option value="asthma">Asthma</option>
        <option value="other">Other</option>
    </select>
    @error('health_conditions')
        <div>{{ $message }}</div>
    @enderror

    <!-- Preferred Workout Environment -->
    <label for="workout-environment">Preferred Workout Environment:</label>
    <select id="workout-environment" name="workout_environment">
        <option value="home">Home</option>
        <option value="gym">Gym</option>
    </select>
    @error('workout_environment')
        <div>{{ $message }}</div>
    @enderror

    <br><br>

    <!-- Feedback -->
    <label for="feedback_text">Your Feedback:</label>
    <textarea id="feedback_text" name="feedback_text" rows="4" cols="72">{{ old('feedback_text') }}</textarea>
    @error('feedback_text')
        <div>{{ $message }}</div>
    @enderror
    
    <br><br>
    <input type="submit" value="Submit">
</form>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
        @if(session('sentiment'))
            <p>{{ session('sentiment') }}</p>
        @endif
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
        </body>
</html>
@endsection