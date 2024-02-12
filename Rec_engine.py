from flask import Flask, jsonify, request
import pandas as pd
import numpy as np
from sklearn.metrics.pairwise import cosine_similarity
from sklearn.model_selection import train_test_split
import mysql.connector
from flask_cors import CORS

app = Flask(__name__)
CORS(app)
def get_db_connection():
    db_connection = mysql.connector.connect(
        host="localhost",
        port="3307",
        user="root",
        password="",
        database="Gym"
    )
    return db_connection

def load_dataset():
    db_connection = get_db_connection()
    query = "SELECT * FROM Feedback"  # Adjust the query based on your actual table structure
    df = pd.read_sql(query, db_connection)
    db_connection.close()
    
    # Convert columns to correct data types
    df['workout_duration'] = pd.to_numeric(df['workout_duration'], errors='coerce')  # Convert to numeric, coercing errors to NaN
    return df

dataset = load_dataset()

# Now the comparison should work as expected
filtered_dataset = dataset[(dataset['fitness_goal'] == 'weight-loss') & (dataset['workout_duration'] >= 15)]


user_item_matrix = pd.get_dummies(filtered_dataset[['fitness_goal', 'workout_duration', 'exercise_type', 'health_conditions', 'workout_environment']])
train_data, test_data = train_test_split(user_item_matrix, test_size=0.2, random_state=42) if len(user_item_matrix) > 0 else (None, None)
user_similarity = cosine_similarity(train_data) if train_data is not None else None

def predict(user_similarity, user_item_matrix):
    mean_user_rating = user_item_matrix.mean(axis=1).values.reshape(-1, 1)
    ratings_diff = (user_item_matrix - mean_user_rating)
    pred = mean_user_rating + np.dot(user_similarity, ratings_diff) / np.array([np.abs(user_similarity).sum(axis=1)]).T
    return pred

@app.route('/api/feedback', methods=['GET'])
def get_feedback():
    api_key = request.headers.get('X-API-KEY')
    if api_key != 'YourExpectedAPIKey':
        return jsonify({"error": "Unauthorized"}), 403
    
    # Return some data or a success message if the API key matches
    return jsonify({"message": "Access granted.{Your API is working!"})


@app.route('/api/summary/<int:user_id>', methods=['GET'])
def generate_summary(user_id):
    if user_similarity is not None and user_id < len(train_data):
        user_predictions = predict(user_similarity, train_data)
        user_recommendations = user_predictions[user_id]

        # Constructing the list of top recommended items
        top_recommendations = [
            {'Recommendation Score': float(score), 'Item': item}
            for score, item in zip(user_recommendations, train_data.columns)
        ][:3]  # Assuming you're still interested in the top 3 for the paragraph

        # Extracting just the item names for the paragraph
        top_items = ", ".join([recommendation['Item'] for recommendation in top_recommendations])

        popular_goals = dataset['fitness_goal'].value_counts().idxmax()
        popular_workout = dataset['exercise_type'].value_counts().idxmax()

        # Constructing the paragraph
        paragraph = (
            f"For user {user_id}, based on their fitness goals and preferences, "
            f"the top recommended activities are: {top_items}. These activities are "
            f"aligned with the user's specific needs and are likely to contribute "
            f"positively to their fitness journey. Across all users, the most popular "
            f"fitness goal is '{popular_goals}', and the most common type of workout "
            f"preferred is '{popular_workout}'. These trends indicate a general "
            f"preference among gym-goers for goals related to '{popular_goals}' and "
            f"workouts like '{popular_workout}', showcasing the diverse interests "
            f"and objectives of the fitness community."
        )

        # Returning the paragraph in the JSON response
        return jsonify({"summary": paragraph})
    else:
        return jsonify({"error": "User ID not found or insufficient data for recommendations."}), 404

if __name__ == '__main__':
    app.run(debug=True, port=5001, host='0.0.0.0')