{{-- recommendation_form.blade.php --}}
@extends('dashboard')

@section('title', 'Power Gym - Recommendation')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Feedback Form</title>
<style>
     body {
    width: 100%;
    min-height: 100vh; /* Ensures minimum height is full viewport height */
    margin: 0;
    padding: 20px; /* Adds some padding around the content */
    background-color: #1b1b32; /* Fallback background color */
    color: rgb(192,192,192); /* Text color */
    font-family: 'Arial', sans-serif;
    font-size: 16px;
    background-image: url('https://img.freepik.com/premium-photo/dark-gym-with-red-lights-black-bar-that-says-fitness_911201-3358.jpg');
    background-size: cover; /* Cover the entire page */
    background-position: center; /* Center the background image */
    background-repeat: no-repeat; /* Do not repeat the background */
    display: flex;
    flex-direction: column; /* Stack content vertically */
    align-items: center; /* Center content horizontally */
    justify-content: flex-start; /* Align content to the top */
}

h1, p {
    margin:  auto;
    text-align: center;
    color: #f9f9f9; /* A very light shade of white, close to grey */
}


form {
    width: 80vw;
    max-width: 960px;
    margin: 20px auto;
    padding: 20px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    background-color: rgba(27, 27, 50, 0.85); /* Faded form background */
    border-radius: 10px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

fieldset {
    border: 1px solid #cc0000;
    padding: 10px;
    border-radius: 5px;
    width: 48%;
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

fieldset .input-group {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start; /* Align items at the start */
}

fieldset .input-group label {
    margin-right: 20px;
    display: flex;
    align-items: flex-start; /* Adjust alignment for multiline text */
    flex-wrap: wrap; /* Allow wrapping for longer texts */
}
#form-selection {
    text-align: center; /* Center the buttons container */
    width: 100%; /* Ensure the container spans the full width */
    margin-bottom: 20px; /* Add some space below the button container */
}

#form-selection button {
    background-color: rgba(0, 0, 0, 0.5); /* Black background with transparency */
    color: rgba(255, 0, 0, 0.7); /* Red text color with transparency */
    border: 2px solid rgba(255, 0, 0, 0.7); /* Red border with transparency */
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 1em;
    margin: 5px;
    transition: background-color 0.3s, color 0.3s, border-color 0.3s, opacity 0.3s;
}

#form-selection button:hover {
    background-color: rgba(255, 0, 0, 0.7); /* Red background with transparency when hovered */
    color: #fff; /* White text color when hovered for better contrast */
    border-color: rgba(255, 255, 255, 0.7); /* Lighter border color when hovered */
    opacity: 0.9; /* Slightly reduce opacity when hovered for a dynamic effect */
}

legend {
    color: #ff4d4d;
    font-weight: bold;
}

label {
    display: flex;
    align-items: flex-start; /* Aligns the label text with the radio/checkbox inputs, adjusted for multiline text */
    margin-bottom: 10px;
    color: #ffffff;
}

input[type="radio"], input[type="checkbox"] {
    margin-right: 5px;
    margin-top: 0.5em; /* Adjust the top margin to align with the first line of text */
}

input, textarea, select {
    background-color: #0a0a23;
    border: 1px solid #cc0000;
    border-radius: 5px;
    color: #ffffff;
    padding: 10px;
    width: 100%;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #cc0000;
    border: none;
    border-radius: 5px;
    color: white;
    cursor: pointer;
    display: block;
    margin: 0 auto;
    padding: 10px 20px;
    font-weight: bold;
}

input[type="submit"]:hover {
    background-color: #ff4d4d;
}

.alert {
    text-align: center;
    margin: 20px auto;
    padding: 10px;
    width: 80%;
    max-width: 600px;
    border-radius: 5px;
    color: #ffffff;
}


.alert-success {
    background-color: #28a745;
}

.alert-danger {
    background-color: #dc3545;
}

@media (max-width: 600px) {
    fieldset .input-group {
        flex-direction: column;
    }

    fieldset .input-group label {
        margin-right: 0;
    }
}
</style>
</head>
<body>
    <div id="form-selection">
    <button onclick="window.location.href='{{ route('feedback.form', ['id' => Auth::id()]) }}'">Feedbcak Form</button>
    </div>

    <div id="recommendationForm" style="display:block;">
    <h1>Power Gym - Workout Recommendation Form</h1>
    <p>Tell us about your fitness goals and preferences to receive personalized workout recommendations.</p>
    @if(isset($recommendation))
    <form action="{{ route('recommendation.update', $recommendation->id) }}" method="post">
    @method('PUT')
    @else
    <form action="{{ route('recommendation.submit') }}" method="post">
    @endif

    @csrf

<!-- Demographic Information -->
<fieldset>
    <legend>Demographic Information</legend>
    <label for="age">Age:</label>
    <input type="number" id="age" name="age" min="12" required>
    @error('age')
        <div>{{ $message }}</div>
    @enderror

    <label for="sex">Sex:</label>
    <select id="sex" name="sex">
        <option value="male">Male</option>
        <option value="female">Female</option>

    </select>
    @error('sex')
        <div>{{ $message }}</div>
    @enderror

    <label for="height">Height (cm):</label>
    <input type="number" id="height" name="height" required>
    @error('height')
        <div>{{ $message }}</div>
    @enderror

    <label for="weight">Weight (kg):</label>
    <input type="number" id="weight" name="weight" required>
    @error('weight')
        <div>{{ $message }}</div>
    @enderror
</fieldset>

<!-- Fitness Goals -->
<fieldset>
    <legend>Fitness Goals</legend>
    <label for="fitness-goal">Primary Fitness Goal:</label>
    <select id="fitness-goal" name="fitness_goal">
        <option value="weight-loss">Weight Loss</option>
        <option value="muscle-gain">Muscle Gain</option>
        <option value="endurance">Endurance Improvement</option>
        <option value="flexibility">Flexibility</option>
        <option value="general-fitness">General Fitness</option>
    </select>
    @error('fitness_goal')
        <div>{{ $message }}</div>
    @enderror

    <label for="specific-targets">Specific Targets:</label>
    <input type="text" id="specific-targets" name="specific_targets">
    @error('specific_targets')
        <div>{{ $message }}</div>
    @enderror
</fieldset>

<!-- Current Fitness Level -->
<fieldset>
    <legend>Current Fitness Level</legend>
    <label for="exercise-frequency">Exercise Frequency:</label>
    <select id="exercise-frequency" name="exercise_frequency">
        <option value="daily">Daily</option>
        <option value="several-times-week">Several Times a Week</option>
        <option value="rarely">Rarely</option>
    </select>
    @error('exercise_frequency')
        <div>{{ $message }}</div>
    @enderror

    <label for="current-exercise-types">Current Exercise Types:</label>
    <select id="current-exercise-types" name="current_exercise_types">
        <option value="">Select exercise type</option>
        <option value="cardio">Cardio</option>
        <option value="strength-training">Strength Training</option>
        <option value="yoga">Yoga</option>
        <option value="pilates">Pilates</option>
        <option value="crossfit">CrossFit</option>
        <option value="mixed-martial-arts">Mixed Martial Arts</option>
        <option value="other">Other</option>
    </select>
    @error('current_exercise_types')
        <div>{{ $message }}</div>
    @enderror

    <label for="fitness-challenges">Physical Fitness Challenges:</label>
    <select id="fitness-challenges" name="fitness_challenges">
        <option value="">Select your challenge</option>
        <option value="endurance">Endurance</option>
        <option value="strength">Strength</option>
        <option value="flexibility">Flexibility</option>
        <option value="weight-loss">Weight Loss</option>
        <option value="muscle-gain">Muscle Gain</option>
        <option value="motivation">Motivation</option>
        <option value="other">Other</option>
    </select>
    @error('fitness_challenges')
        <div>{{ $message }}</div>
    @enderror

    <label for="fitness-challenges">Physical Fitness Challenges:</label>
    <select id="fitness-challenges" name="fitness_challenges">
        <option value="">Select your challenge</option>
        <option value="endurance">Endurance</option>
        <option value="strength">Strength</option>
        <option value="flexibility">Flexibility</option>
        <option value="weight-loss">Weight Loss</option>
        <option value="muscle-gain">Muscle Gain</option>
        <option value="motivation">Motivation</option>
        <option value="other">Other</option>
    </select>
    @error('fitness_challenges')
        <div>{{ $message }}</div>
    @enderror
</fieldset>

<!-- Health Information -->
<fieldset>
    <legend>Health Information</legend>
    <label for="medical-conditions">Medical Conditions:</label>
    <input type="text" id="medical-conditions" name="medical_conditions">
    @error('medical_conditions')
        <div>{{ $message }}</div>
    @enderror

    <label for="medications">Medications:</label>
    <input type="text" id="medications" name="medications">
    @error('medications')
        <div>{{ $message }}</div>
    @enderror

    <label for="allergies">Allergies:</label>
    <input type="text" id="allergies" name="allergies">
    @error('allergies')
        <div>{{ $message }}</div>
    @enderror
</fieldset>

<!-- Personal Preferences -->
<fieldset>
    <legend>Personal Preferences</legend>
    <label for="preferred-exercise-types">Preferred Exercise Types:</label>
    <input type="text" id="preferred-exercise-types" name="preferred_exercise_types">
    @error('preferred_exercise_types')
        <div>{{ $message }}</div>
    @enderror

    <label for="available-equipment">Available Equipment:</label>
    <select id="available-equipment" name="available_equipment">
        <option value="">Select available equipment</option>
        <option value="none">None</option>
        <option value="dumbbells">Dumbbells</option>
        <option value="kettlebells">Kettlebells</option>
        <option value="resistance-bands">Resistance Bands</option>
        <option value="treadmill">Treadmill</option>
        <option value="stationary-bike">Stationary Bike</option>
        <option value="yoga-mat">Yoga Mat</option>
        <option value="full-home-gym">Full Home Gym</option>
        <option value="other">Other</option>
    </select>
    @error('available_equipment')
        <div>{{ $message }}</div>
    @enderror

    <label for="time-availability">Time Availability:</label>
    <input type="text" id="time-availability" name="time_availability">
    @error('time_availability')
        <div>{{ $message }}</div>
    @enderror

    <label for="dietary-preferences">Dietary Preferences:</label>
    <input type="text" id="dietary-preferences" name="dietary_preferences">
    @error('dietary_preferences')
        <div>{{ $message }}</div>
    @enderror
</fieldset>

<!-- Progress Tracking and Feedback -->
<fieldset>
    <legend>Progress Tracking and Feedback</legend>
    <label for="initial-assessment-results">Initial Assessment Results:</label>
    <textarea id="initial-assessment-results" name="initial_assessment_results"></textarea>
    @error('initial_assessment_results')
        <div>{{ $message }}</div>
    @enderror

    <label for="ongoing-progress">Ongoing Progress:</label>
    <textarea id="ongoing-progress" name="ongoing_progress"></textarea>
    @error('ongoing_progress')
        <div>{{ $message }}</div>
    @enderror

    <label for="feedback">Feedback on Recommendations:</label>
    <textarea id="feedback" name="feedback"></textarea>
    @error('feedback')
        <div>{{ $message }}</div>
    @enderror
</fieldset>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        
        
        <br><br>
        <input type="submit" value="{{ isset($recommendation) ? 'Update' : 'Submit' }}">
    </form>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

</div>
</body>
</html>
@endsection
