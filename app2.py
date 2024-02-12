from flask import Flask, jsonify
import pandas as pd
import plotly.express as px
import json
import plotly
import mysql.connector

app = Flask(__name__)

def get_db_connection():
    db_host = 'localhost'
    db_user = 'root'
    db_password = ''
    db_name = 'Gym'
    db_connection = mysql.connector.connect(host="localhost", port="3307", user="root", password="", database="Gym")
        
    return db_connection

@app.route('/api/visualizations')
def home():
    db_connection = get_db_connection()
    cursor = db_connection.cursor(dictionary=True)
    cursor.execute("SELECT * FROM Feedback")  # Assuming the table name is feedback_forum
    rows = cursor.fetchall()
    df = pd.DataFrame(rows)

    cursor.close()
    db_connection.close()

    # Your visualization code remains the same
    custom_colors = ['#421760','#122878','#32CD32','#FF6F61','#BEC8FA']
    # Create Plotly visualizations with custom styles
    visualizations = [
        {
            "figure": px.bar(df, x="feedback", title="Feedback Scores",
                             color="feedback",
                             color_discrete_sequence=custom_colors,
                             template="plotly_dark"),
            "description": "Feedback Scores"
        },
        {
            "figure": px.pie(df, names="sentiment", title="Sentiment Distribution",
                             color_discrete_sequence=custom_colors,
                             template="plotly_dark"),
            "description": "Sentiment Distribution"
        },
        {
            "figure": px.pie(df, names="fitness_goal", title="Fitness Goal Distribution",
                             color_discrete_sequence=custom_colors,
                             template="plotly_dark"),
            "description": "Fitness Goal Distribution"
        },
        {
            "figure": px.histogram(df, x="workout_duration", title="Workout Duration Distribution",
                                   color_discrete_sequence=custom_colors,
                                   template="plotly_dark"),
            "description": "Workout Duration Distribution"
        },
        {
            "figure": px.box(df, y="workout_duration", title="Workout Duration Box Plot",
                             color_discrete_sequence=custom_colors,
                             template="plotly_dark"),
            "description": "Workout Duration Box Plot"
        },
        {
            "figure": px.bar(df, x="exercise_type", title="Exercise Type Distribution",
                             color="exercise_type",
                             color_discrete_sequence=custom_colors,
                             template="plotly_dark"),
            "description": "Exercise Type Distribution"
        },
        {
            "figure": px.bar(df, x="health_conditions", title="Health Conditions Distribution",
                             color="health_conditions",
                             color_discrete_sequence=custom_colors,
                             template="plotly_dark"),
            "description": "Health Conditions Distribution"
        },
        {
            "figure": px.bar(df, x="workout_environment", title="Workout Environment Distribution",
                             color="workout_environment",
                             color_discrete_sequence=custom_colors,
                             template="plotly_dark"),
            "description": "Workout Environment Distribution"
        }
        
    ]

    # Convert Plotly figures to JSON with descriptions
    graphJSON = []
    for viz in visualizations:
        graphJSON.append({
            "data": json.loads(json.dumps(viz["figure"].data, cls=plotly.utils.PlotlyJSONEncoder)),
            "layout": json.loads(json.dumps(viz["figure"].layout, cls=plotly.utils.PlotlyJSONEncoder)),
            "description": viz["description"]
        })

    # Return the JSON data directly
    return jsonify(graphJSON)

if __name__ == '__main__':
        app.run(debug=True, port=334, host='0.0.0.0')
