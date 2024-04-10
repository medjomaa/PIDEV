from flask import Flask, jsonify, request
import pandas as pd
import plotly.express as px
import json
import plotly.utils
import mysql.connector
import plotly.graph_objects as go
import numpy as np
from datetime import datetime, timedelta
from sklearn.linear_model import LinearRegression
app = Flask(__name__)
custom_theme = {
    'template': 'plotly_white',
    'color_discrete_sequence': px.colors.qualitative.Bold,  # More vibrant colors
    'layout': {
        'title_font_size': 22,
        'title_x': 0.5,
        'font': {'family': "Arial, sans-serif", 'size': 12, 'color': "black"},  # Dark text for readability
        'paper_bgcolor': 'rgba(255,255,255,1)',  # Light background
        'plot_bgcolor': 'rgba(255,255,255,1)',  # Light background
        'xaxis': {'color': 'black'},  # Ensure axes are visible
        'yaxis': {'color': 'black'},  # Ensure axes are visible
    }
}


def get_db_connection():
    """
    Creates and returns a database connection.
    """
    db_host = '127.0.0.1'
    db_user = 'root'
    db_password = ''  # It's recommended to use environment variables for sensitive information
    db_name = 'powergym'
    try:
        db_connection = mysql.connector.connect(
            host=db_host,
            port="3307",
            user=db_user,
            password=db_password,
            database=db_name
        )
        return db_connection
    except mysql.connector.Error as err:
        print(f"Error: {err}")
        return None

@app.route('/api/visualizations',methods=['GET'])
def home():
    """
    Main route for fetching and visualizing gym feedback data.
    Allows optional filtering by date via query parameter.
    """
    selected_date = request.args.get('date', type=str)

    db_connection = get_db_connection()
    if db_connection is None:
        return jsonify({"error": "Database connection failed."}), 500
    
    cursor = db_connection.cursor(dictionary=True)

    base_query = """
    SELECT f.*, u.created_at AS user_created_at, r.age, r.sex 
    FROM Feedback f
    LEFT JOIN Users u ON f.user_id = u.id 
    LEFT JOIN Recommendations r ON f.user_id = r.user_id
    """
    
    try:
        if selected_date:
            query = base_query + " WHERE DATE(f.created_at) = %s"
            cursor.execute(query, (selected_date,))
        else:
            cursor.execute(base_query)
        rows = cursor.fetchall()
    except mysql.connector.Error as err:
        cursor.close()
        db_connection.close()
        return jsonify({"error": "Failed to execute query."}), 500

    df = pd.DataFrame(rows)
    cursor.close()
    db_connection.close()

    # Data cleaning and transformation
    df['created_at'] = pd.to_datetime(df['created_at'])
    df['user_created_at'] = pd.to_datetime(df['user_created_at'])
    df['age'].fillna(df['age'].mean(), inplace=True)
    df['sex'].fillna('Unknown', inplace=True)
    df['user_tenure_at_feedback'] = (df['created_at'] - df['user_created_at']).dt.days
    df['created_at'] = pd.to_datetime(df['created_at'])
    feedback_df = pd.DataFrame({
        'created_at': pd.date_range(start='2024-01-01', periods=10, freq='D'),
        'feedback_content': ['Good' for _ in range(10)]
    })

    recommendations_df = pd.DataFrame({
        'created_at': pd.date_range(start='2024-01-05', periods=5, freq='D'),
        'recommendation_content': ['Improve' for _ in range(5)]
    })
    visualizations = []

    def apply_custom_theme(fig):
        fig.update_layout(
            template='plotly_white',  # Use the Plotly white theme
            title_font_size=22,
            title_x=0.5,
            legend_title_font_color="black",  # Change to black for visibility on white background
            legend_title_font_size=14,
            legend_x=1,
            legend_y=1,
            font=dict(family="Arial, sans-serif", size=12, color="black"),  # Change text color to black
            paper_bgcolor='rgba(255,255,255,1)',  # Change to white background
            plot_bgcolor='rgba(255,255,255,1)',  # Change to white background
            xaxis={'color': 'black'},  # Change axes color to black for visibility
            yaxis={'color': 'black'}  # Change axes color to black for visibility
        )

        return fig

    # 1. Sentiment Distribution Pie Chart
    if 'sentiment' in df.columns:
        sentiment_distribution_fig = px.pie(df, names='sentiment', title="Sentiment Distribution", color_discrete_sequence=px.colors.qualitative.Bold)
        visualizations.append({"figure": apply_custom_theme(sentiment_distribution_fig), "description": "Distribution of user sentiment in feedback."})

    df['created_at'] = pd.to_datetime(df['created_at'])
    # Daily aggregation of feedback counts
    feedback_daily = df.set_index('created_at').resample('D').size().reset_index(name='count')

    # Prepare data for ML model
    X = np.arange(len(feedback_daily)).reshape(-1, 1)  # Days as integers for X-axis
    y = feedback_daily['count'].values  # Feedback count for Y-axis

    # Fit linear regression model
    model = LinearRegression()
    model.fit(X, y)

    # Predict future feedback counts
    future_days = 365 * 5  # Predict for next 5 years
    X_future = np.arange(len(feedback_daily), len(feedback_daily) + future_days).reshape(-1, 1)
    y_future = model.predict(X_future)

    # Create DataFrame for predictions
    future_dates = pd.date_range(start=feedback_daily['created_at'].max() + pd.Timedelta(days=1), periods=future_days)
    feedback_future = pd.DataFrame({'created_at': future_dates, 'count': y_future})

    # Combine actual data with predictions
    feedback_combined = pd.concat([feedback_daily, feedback_future])

    # Visualizations list
    visualizations = []

    # Sentiment Distribution Pie Chart
    if 'sentiment' in df.columns:
        sentiment_distribution_fig = px.pie(df, names='sentiment', title="Sentiment Distribution", color_discrete_sequence=px.colors.qualitative.Bold)
        visualizations.append({"figure": apply_custom_theme(sentiment_distribution_fig), "description": "Distribution of user sentiment in feedback."})

    # Feedback Over Time Line Graph with Predictions
    feedback_over_time_fig = go.Figure()

    # Actual feedback over time
    feedback_over_time_fig.add_trace(go.Scatter(x=feedback_daily['created_at'], y=feedback_daily['count'], mode='markers', name='Actual Feedback'))

    # Predicted feedback over time
    feedback_over_time_fig.add_trace(go.Scatter(x=feedback_future['created_at'], y=feedback_future['count'], mode='lines', name='Predicted Feedback', line=dict(dash='dash')))

    # Layout and range slider
    feedback_over_time_fig.update_layout(title='Feedback Over Time with Predictions',
                                        xaxis=dict(title='Date', rangeselector=dict(buttons=[
                                            dict(count=1, label="Next 4 Years", step="year", stepmode="todate"),
                                            dict(count=5, label="Next 5 Years", step="year", stepmode="todate"),
                                            dict(step="all")]), 
                                                    rangeslider=dict(visible=True)),
                                        yaxis=dict(title='Feedback Count'))

    # Apply custom theme
    feedback_over_time_fig = apply_custom_theme(feedback_over_time_fig)

    visualizations.append({"figure": feedback_over_time_fig, "description": "Trend of feedback count over time with future predictions."})

    # Function to apply the custom theme (as defined earlier)
    def apply_custom_theme(fig):
        # Apply your custom theme adjustments here
        return fig

    # Function to visualize the data
    def visualize_data(visualizations):
        # This function would visualize each figure in the 'visualizations' list
        pass

    # Example call to visualize the data
    visualize_data(visualizations)
        # 3. Age Distribution Histogram
    if 'age' in df.columns:
        age_distribution_fig = px.histogram(df, x='age', title="Age Distribution of Users", color_discrete_sequence=['#1f77b4'])
        visualizations.append({"figure": apply_custom_theme(age_distribution_fig), "description": "Histogram showing the distribution of user ages."})

    # 4. Exercise Frequency Bar Chart
    if 'exercise_frequency' in df.columns:
        exercise_frequency_fig = px.bar(df, x='exercise_frequency', title="Exercise Frequency of Users", color_discrete_sequence=px.colors.qualitative.Pastel)
        visualizations.append({"figure": apply_custom_theme(exercise_frequency_fig), "description": "Bar chart showing the exercise frequency of users."})

    # 5. Fitness Goals Pie Chart
    if 'fitness_goal' in df.columns:
        fitness_goals_fig = px.pie(df, names='fitness_goal', title="Fitness Goals Distribution", color_discrete_sequence=px.colors.sequential.Viridis)
        visualizations.append({"figure": apply_custom_theme(fitness_goals_fig), "description": "Distribution of fitness goals among users."})

    # 6. Time Availability Distribution Bar Chart
    if 'time_availability' in df.columns:
        time_availability_fig = px.bar(df, x='time_availability', title="Time Availability of Users", color_discrete_sequence=px.colors.qualitative.Safe)
        visualizations.append({"figure": apply_custom_theme(time_availability_fig), "description": "Bar chart showing the time availability of users for exercise."})
    if 'equipment_quality' in df.columns and 'sentiment' in df.columns:
        equipment_quality_fig = px.bar(df, x='equipment_quality', color='sentiment', title="Equipment Quality Ratings by Sentiment", barmode='group')
        visualizations.append({"figure": apply_custom_theme(equipment_quality_fig), "description": "Bar chart showing the distribution of equipment quality ratings, grouped by user sentiment."})

    # Assuming 'df' has 'available_equipment' and 'current_exercise_types' columns
    # For demonstration, let's create a sample DataFrame
    available_equipment = ['Treadmill', 'Dumbbell', 'Barbell']
    current_exercise_types = ['Cardio', 'Strength', 'Flexibility']

    # Creating a mock correlation matrix for demonstration
    equipment_exercise_correlation = pd.DataFrame(np.random.rand(len(available_equipment), len(current_exercise_types)),
                                                index=available_equipment, columns=current_exercise_types)

    # Plotting the heatmap
    equipment_exercise_heatmap_fig = px.imshow(equipment_exercise_correlation,
                                            labels=dict(x="Exercise Types", y="Available Equipment", color="Correlation"),
                                            x=current_exercise_types,
                                            y=available_equipment,
                                            title="Available Equipment vs. Exercise Types")
    visualizations.append({"figure": apply_custom_theme(equipment_exercise_heatmap_fig), "description": "Heatmap showing the correlation between available equipment and preferred exercise types."})
    # Assuming 'df' has 'cleanliness', 'equipment_quality', 'staff', etc., columns with ratings
    # First, we melt the DataFrame to long format for easier plotting with Plotly
    feedback_ratings = df.melt(value_vars=['cleanliness', 'equipment_quality', 'staff'],
                            var_name='Category', value_name='Rating')

    # Plotting the grouped bar chart for feedback ratings
    feedback_ratings_fig = px.bar(feedback_ratings, x='Category', y='Rating', color='Category', 
                                title="Feedback Category Ratings",
                                labels={'Rating': 'Average Rating'})
    feedback_ratings_fig.update_layout(showlegend=False)  # Since color distinguishes categories, legend is unnecessary
    visualizations.append({"figure": apply_custom_theme(feedback_ratings_fig), "description": "Grouped bar chart visualizing average ratings for different feedback categories."})

    # Example: Customizing the Equipment vs. Exercise Types Heatmap further
    equipment_exercise_heatmap_fig.update_traces(hoverinfo='all', hovertemplate='Equipment: %{y}<br>Exercise Type: %{x}<br>Correlation: %{z}')

    # Example: Adding annotations to Feedback Category Ratings
    annotations = []
    for i, rating in enumerate(feedback_ratings['Rating']):
        annotations.append(dict(x=feedback_ratings['Category'][i], y=rating, text=str(rating), showarrow=False))
    feedback_ratings_fig.update_layout(annotations=annotations)

    # Applying these customizations
    visualizations[-1]["figure"] = apply_custom_theme(equipment_exercise_heatmap_fig)  # Reapply theme after updates
    visualizations[-2]["figure"] = apply_custom_theme(feedback_ratings_fig)  # Reapply theme after updates

   # Iterate over the visualizations list, convert each figure to JSON, and append to graphJSON list
    graphJSON = [
        {
            "data": json.loads(json.dumps(viz["figure"].data, cls=plotly.utils.PlotlyJSONEncoder)),
            "layout": json.loads(json.dumps(viz["figure"].layout, cls=plotly.utils.PlotlyJSONEncoder)),
            "description": viz["description"]
        } 
        for viz in visualizations
    ]

    return jsonify(graphJSON)

if __name__ == '__main__':
    app.run(debug=True, port=334, host='0.0.0.0')
