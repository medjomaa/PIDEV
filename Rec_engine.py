import pandas as pd
import mysql.connector
from flask import Flask, jsonify

app = Flask(__name__)
required_equipment = {
    'Push-ups': [],
    'Pull-ups': ['Pull-up Bar'],
    'Squats': [],
    'Deadlifts': ['Barbell'],
    'Bicep Curls': ['Dumbbells', 'Barbell'],
    'Tricep Dips': ['Parallel Bars'],
    'Leg Raises': [],
    'Planks': [],
    'Shoulder Press': ['Dumbbells', 'Barbell'],
    'Lunges': [],
    # Add more exercises and their required equipment as needed
}
def get_db_connection():
    return mysql.connector.connect(
        host="localhost",
        port="3307",
        user="root",
        password="",
        database="powergym"
    )

def load_dataset():
    db_connection = get_db_connection()
    query = "SELECT * FROM recommendations"
    df = pd.read_sql(query, db_connection)
    db_connection.close()
    return df

dataset = load_dataset()

exercise_to_muscle_map = {
    'Push-ups': ['Chest', 'Shoulders', 'Triceps'],
    'Pull-ups': ['Lats', 'Biceps', 'Mid Back'],
    'Squats': ['Quads', 'Hamstring', 'Glutes'],
    'Deadlifts': ['Low Back', 'Hamstring', 'Glutes'],
    'Bicep Curls': ['Biceps'],
    'Tricep Dips': ['Triceps'],
    'Leg Raises': ['Abs'],
    'Planks': ['Abs', 'Low Back'],
    'Shoulder Press': ['Shoulders', 'Triceps'],
    'Lunges': ['Quads', 'Hamstring', 'Glutes'],
    # Add more exercises as needed
}

from scipy.spatial.distance import euclidean
def calculate_bmi(weight, height):
    """
    Calculate and return the Body Mass Index (BMI).
    Weight in kilograms, height in meters.
    """
    return weight / (height ** 2)

def bmi_based_adjustments(bmi):
    """
    Return a list of adjustments or considerations based on BMI.
    This is a placeholder function; you should adjust it based on your specific requirements.
    """
    if bmi >= 30:
        return ['focus on low-impact exercises to minimize joint stress', 'consider walking, swimming, and cycling']
    elif bmi >= 25 and bmi < 30:
        return ['include a mix of cardio and strength training', 'consider bodyweight exercises and jogging']
    else:
        return ['explore a variety of exercises, including high-intensity interval training']

def find_closest_users(current_user_row, all_users, num_results=3):
    similarities = []

    for index, user_row in all_users.iterrows():
        if user_row['id'] == current_user_row['id']:
            continue  # Skip the current user
        
        # Calculate Euclidean distance for numerical features
        distance = euclidean(
            [current_user_row['age'], current_user_row['weight']],
            [user_row['age'], user_row['weight']]
        )
        
        # Add a bonus for matching fitness goals (simple example of incorporating categorical data)
        if current_user_row['fitness_goal'] == user_row['fitness_goal']:
            distance -= 1  # Adjust as needed to weight the importance of matching goals
        
        similarities.append((index, distance))
    
    # Sort by distance (lower is more similar)
    similarities.sort(key=lambda x: x[1])
    
    # Return the indices of the closest users
    return [sim[0] for sim in similarities[:num_results]]
def generate_recommendations(user_id):
    user_data = dataset[dataset['id'] == user_id]
    user_row = user_data.iloc[0]
    
    # Assuming height is in centimeters in the database and converting to meters for BMI calculation
    height = user_row['height'] / 100  
    weight = user_row['weight']
    
    # Calculate BMI and get BMI-based exercise adjustments
    bmi = calculate_bmi(weight, height)
    bmi_adjustments = bmi_based_adjustments(bmi)
    
    exercise_frequency = user_row['exercise_frequency']
    fitness_challenges = user_row['fitness_challenges']
    time_availability = user_row['time_availability']
    dietary_preferences = user_row['dietary_preferences']
    initial_assessment_results = user_row['initial_assessment_results']
    ongoing_progress = user_row['ongoing_progress']
    feedback = user_row['feedback']
    user_fitness_goal = user_row['fitness_goal']
    specific_targets = user_row['specific_targets'].split(',') if user_row['specific_targets'] else []
    current_exercise_types = user_row['current_exercise_types'].split(',') if user_row['current_exercise_types'] else []
    past_injuries = user_row.get('past_injuries', '').split(',') if user_row.get('past_injuries') else []
    available_equipment = user_row['available_equipment'].split(',') if user_row['available_equipment'] else []
    preferred_exercise_types = user_row['preferred_exercise_types'].split(',') if user_row['preferred_exercise_types'] else []

    
    # Generating initial exercise recommendations based on user's preferred exercise types
    recommendation_details = []
    for exercise in preferred_exercise_types:
        if exercise in exercise_to_muscle_map:
            targeted_muscles = exercise_to_muscle_map[exercise]
            if any(target in specific_targets for target in targeted_muscles):
                recommendation_detail = f"{exercise} targeting {', '.join(targeted_muscles)}"
                recommendation_details.append(recommendation_detail)
    
    # Filter recommendations based on available equipment
    equipment_filtered_recommendations = [rec for rec in recommendation_details if all(equip in available_equipment for equip in required_equipment.get(exercise, []))]

    # Adjust for past injuries
    injury_adjusted_recommendations = adjust_recommendations_for_injuries(equipment_filtered_recommendations, past_injuries)
    
    # Include BMI-based adjustments
    final_recommendations = injury_adjusted_recommendations + bmi_adjustments

    # Constructing the personalized recommendation paragraph with final recommendations
    personalized_recommendation_paragraph = (
        f"Based on your profile, which includes goals such as {user_fitness_goal.lower()} and specific targets like {', '.join(specific_targets)}, "
        f"your BMI is {bmi:.2f}, suggesting you {', '.join(bmi_adjustments)}. "
        f"We've tailored the following exercise recommendations for you: {'; '.join(final_recommendations)}. "
        "Your exercise frequency and current exercise types have been considered to ensure these recommendations complement your existing routine. "
        f"With {time_availability} available for workouts and considering your dietary preferences, including {dietary_preferences}, "
        "these exercises are suggested to maximize your progress towards your fitness goals. "
        "Remember to consult with a healthcare professional before starting any new exercise program, especially considering any past injuries or medical conditions you've mentioned."
    )
    
    return personalized_recommendation_paragraph


def adjust_recommendations_for_injuries(recommendations, past_injuries):
    # Placeholder function to adjust recommendations based on past injuries
    # Implement logic to remove or modify exercises that might be harmful based on past injuries
    adjusted_recommendations = [rec for rec in recommendations if not any(injury in rec for injury in past_injuries)]
    return adjusted_recommendations



def get_user_info(user_id):
    db_connection = get_db_connection()
    query = "SELECT * FROM recommendations WHERE id = %s"
    user_df = pd.read_sql(query, db_connection, params=[user_id])
    db_connection.close()
    
    if user_df.empty:
        return "User ID not found."
    
    # Convert the user's information to a dictionary for easier JSON serialization
    user_info = user_df.iloc[0].to_dict()
    
    # Optionally, format or clean up the data as needed before returning
    # For example, converting datetime objects to string, handling NaN values, etc.
    
    return user_info

# Modify the Flask route to include fetching user info
@app.route('/api/userinfo/<int:user_id>', methods=['GET'])
def api_get_user_info(user_id):
    user_info = get_user_info(user_id)
    if isinstance(user_info, str):  # Assuming a string return indicates an error
        return jsonify({"success": False, "error": user_info}), 404
    else:
        return jsonify({"success": True, "user_info": user_info}), 200


@app.route('/api/recommendations/<int:user_id>', methods=['GET'])
def get_recommendations(user_id):
    user_data = dataset[dataset['id'] == user_id]
    if user_data.empty:
        return jsonify({"success": False, "error": "User ID not found."}), 404

    user_row = user_data.iloc[0]
    height = user_row['height'] / 100  # Assuming height is in centimeters and converting to meters
    weight = user_row['weight']
    bmi = calculate_bmi(weight, height)  # Calculate BMI

    recommendations_paragraph = generate_recommendations(user_id)
    if recommendations_paragraph:
        # Including the BMI in the response
        return jsonify({"success": True, "user_id": user_id, "bmi": bmi, "recommendations": recommendations_paragraph}), 200
    else:
        return jsonify({"success": False, "error": "No recommendations could be generated."}), 404


if __name__ == '__main__':
    app.run(debug=True, port=5001, host='0.0.0.0')
