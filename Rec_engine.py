import pandas as pd
import mysql.connector
from flask import Flask, jsonify

app = Flask(__name__)

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
    if user_data.empty:
        return "User ID not found."
    
    user_row = user_data.iloc[0]
    
    # Extracting detailed user information for personalized recommendations
    specific_targets = user_row['specific_targets'].split(',')  # Assuming comma-separated values
    exercise_frequency = user_row['exercise_frequency']
    current_exercise_types = user_row['current_exercise_types'].split(',')
    fitness_challenges = user_row['fitness_challenges']
    past_injuries = user_row['past_injuries'].split(',')
    available_equipment = user_row['available_equipment'].split(',')
    time_availability = user_row['time_availability']
    dietary_preferences = user_row['dietary_preferences']
    initial_assessment_results = user_row['initial_assessment_results']
    ongoing_progress = user_row['ongoing_progress']
    feedback = user_row['feedback']

    # Find closest users for broader insights
    closest_users_indices = find_closest_users(user_row, dataset, num_results=5)
    closest_users_data = dataset.iloc[closest_users_indices]
    
    user_fitness_goal = user_row['fitness_goal']
    preferred_exercise_types = user_row['preferred_exercise_types'].split(',')
    
    recommendation_details = []
    for exercise in preferred_exercise_types:
        if exercise in exercise_to_muscle_map:
            targeted_muscles = exercise_to_muscle_map[exercise]
            if any(target in specific_targets for target in targeted_muscles):
                recommendation_detail = f"{exercise} targeting {', '.join(targeted_muscles)}"
                recommendation_details.append(recommendation_detail)
    
    # Adjust recommendations based on available equipment and past injuries
    equipment_filtered_recommendations = [rec for rec in recommendation_details if all(equip in available_equipment for equip in required_equipment.get(exercise, []))]
    injury_adjusted_recommendations = adjust_recommendations_for_injuries(equipment_filtered_recommendations, past_injuries)
    
    # Constructing the personalized recommendation paragraph
    personalized_recommendation_paragraph = (
        f"Based on your profile, which includes goals such as {user_fitness_goal.lower()} and specific targets like {', '.join(specific_targets)}, "
        f"we've tailored the following exercise recommendations for you: {'; '.join(injury_adjusted_recommendations)}. "
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
    recommendations = generate_recommendations(user_id)
    if recommendations:
        return jsonify({"success": True, "user_id": user_id, "recommendations": recommendations}), 200
    else:
        return jsonify({"success": False, "error": "No recommendations found or ID not found."}), 404

if __name__ == '__main__':
    app.run(debug=True, port=5001, host='0.0.0.0')
