

{{-- feedback_form.blade.php --}}
@extends('dashboard')

@section('title', 'Power Gym - Feedback')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
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
    <button onclick="window.location.href='{{ route('recommendation.form', ['id' => Auth::id()]) }}'">Recommendation Form</button>

    </div>


    <div id="feedbackForm" style="display: block;">
    <h1>Power Gym - Feedback Form</h1>
    <p>Help us improve by sharing your experience</p>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Form Starts Here -->
    <form action="{{ route('feedback.submit') }}" method="post">
        @csrf
        @if(isset($feedback) && $feedback)
            <input type="hidden" name="feedback_id" value="{{ $feedback->id }}">
        @endif
    
    <!-- Cleanliness and Maintenance -->
    <fieldset>
        <legend>Cleanliness and Maintenance:</legend>
        <label><input type="radio" name="cleanliness" value="excellent"> Excellent</label>
        <label><input type="radio" name="cleanliness" value="good"> Good</label>
        <label><input type="radio" name="cleanliness" value="fair"> Fair</label>
        <label><input type="radio" name="cleanliness" value="poor"> Poor</label>
    </fieldset>
    
    <!-- Equipment Quality and Availability -->
    <fieldset>
        <legend>Equipment Quality and Availability:</legend>
        <label><input type="radio" name="equipment_quality" value="excellent"> Excellent</label>
        <label><input type="radio" name="equipment_quality" value="good"> Good</label>
        <label><input type="radio" name="equipment_quality" value="fair"> Fair</label>
        <label><input type="radio" name="equipment_quality" value="poor"> Poor</label>
    </fieldset>
    
    <!-- Staff and Trainers -->
    <fieldset>
        <legend>Staff and Trainers:</legend>
        <label><input type="radio" name="staff" value="friendly"> Amiable</label>
        <label><input type="radio" name="staff" value="adequate"> Okay</label>
        <label><input type="radio" name="staff" value="unfriendly">Rude</label>
    </fieldset>
    
    <!-- Classes and Programs -->
    <fieldset>
        <legend>Classes and Programs:</legend>
        <label><input type="radio" name="classes" value="excellent"> Excellent</label>
        <label><input type="radio" name="classes" value="good"> Good</label>
        <label><input type="radio" name="classes" value="fair"> Fair</label>
        <label><input type="radio" name="classes" value="poor"> Poor</label>
    </fieldset>
    
    <!-- Safety Measures -->
    <fieldset>
    <legend>Safety Measures:</legend>
    <label><input type="checkbox" name="safety_measures[]" value="sanitized"> Sanitized</label>
    <label><input type="checkbox" name="safety_measures[]" value="spaced"> Spaced</label>
    <label><input type="checkbox" name="safety_measures[]" value="masked"> Masked</label>
    <label><input type="checkbox" name="safety_measures[]" value="ventilated"> Ventilated</label>
    <label><input type="checkbox" name="safety_measures[]" value="monitored"> Monitored</label>
    <label><input type="checkbox" name="safety_measures[]" value="limited"> Limited</label>
    </fieldset>

    
    <!-- Membership Fees and Contracts -->
    <fieldset>
    <legend>Membership Fees and Contracts:</legend>
    <label><input type="radio" name="membership_fees" value="fair"> Fair</label>
    <label><input type="radio" name="membership_fees" value="okay"> Okay</label>
    <label><input type="radio" name="membership_fees" value="high"> High</label>
    <label><input type="radio" name="membership_fees" value="steep"> Steep</label>
</fieldset>

    <!-- Atmosphere and Community -->
    <fieldset>
    <legend>Atmosphere and Community:</legend>
    <label><input type="radio" name="atmosphere" value="friendly"> Friendly</label>
    <label><input type="radio" name="atmosphere" value="neutral"> Neutral</label>
    <label><input type="radio" name="atmosphere" value="tense"> Tense</label>
</fieldset>

    
    <!-- Additional Amenities -->
    <fieldset>
        <legend>Additional Amenities:</legend>
        <label><input type="checkbox" name="additional_amenities[]" value="pool"> Pool</label>
        <label><input type="checkbox" name="additional_amenities[]" value="sauna"> Sauna</label>
        <label><input type="checkbox" name="additional_amenities[]" value="cafe"> Café</label>
        <!-- Add as many amenities as needed -->
    </fieldset>

        <!-- Your Feedback -->
        <label for="feedback_text">Your Feedback:</label>
       <textarea id="feedback_text" name="feedback_text" rows="4" cols="72">{{ old('feedback_text', isset($feedback) ? $feedback->feedback : '') }}</textarea>

        @error('feedback_text')
            <div>{{ $message }}</div>
        @enderror
        <br>
        <input type="submit" name="form_type" value="submit">
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
    </div>

   
</body>
</html>
@endsection
