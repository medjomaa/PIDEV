from flask import Flask, jsonify, request
import pandas as pd
import plotly.express as px
import json
import plotly.utils
import mysql.connector
import plotly.graph_objects as go
import numpy as np

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




    # Equipment Quality Distribution as a Pie Chart
    if set(['user_tenure_at_feedback', 'equipment_quality', 'sentiment']).issubset(df.columns):
        tenure_quality_scatter_fig = px.scatter(df, x='user_tenure_at_feedback', y='equipment_quality', color='sentiment', title="User Tenure vs Equipment Quality")
        # Apply layout customizations after figure creation
        tenure_quality_scatter_fig.update_layout(
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
        # Apply color sequence customizations
        tenure_quality_scatter_fig.update_traces(marker=dict(color=custom_theme['color_discrete_sequence']))
        visualizations.append({"figure": tenure_quality_scatter_fig, "description": "Scatter plot analyzing user tenure against equipment quality ratings, colored by sentiment."})
    if 'sentiment' in df.columns:
        # Example for applying theme to a pie chart
        sentiment_fig = px.pie(df, names='sentiment', title="Feedback Sentiment Distribution")
        visualizations.append({"figure": apply_custom_theme(sentiment_fig), "description": "Pie chart showing the distribution of feedback sentiments among gym users."})

    # Age Distribution Box Plot
    if 'age' in df.columns:
        age_fig = px.box(df, y='age', title="Age Distribution of Gym Users")
        visualizations.append({"figure": apply_custom_theme(age_fig), "description": "Box plot showing the distribution of ages among gym users, highlighting median and variability."})

    # Equipment Quality Ratings by Sentiment
    if 'equipment_quality' in df.columns and 'sentiment' in df.columns:
        equipment_quality_fig = px.bar(df, x='equipment_quality', color='sentiment', title="Equipment Quality Ratings by Sentiment", barmode='group')
        visualizations.append({"figure": apply_custom_theme(equipment_quality_fig), "description": "Bar chart showing the distribution of equipment quality ratings, grouped by user sentiment."})

    # User Tenure Scatter Plot Colored by Age
    if 'user_tenure_at_feedback' in df.columns and 'age' in df.columns:
        tenure_age_fig = px.scatter(df, x='user_tenure_at_feedback', y='age', color='age', title="User Tenure and Age", color_continuous_scale=px.colors.sequential.Inferno)
        visualizations.append({"figure": apply_custom_theme(tenure_age_fig), "description": "Scatter plot analyzing the relationship between user tenure and age, with points colored by age."})
    if 'created_at' in df.columns:
        feedback_df['created_at'] = pd.to_datetime(feedback_df['created_at']).dt.date
        recommendations_df['created_at'] = pd.to_datetime(recommendations_df['created_at']).dt.date

        # Group by 'created_at' and count
        feedback_counts = feedback_df.groupby('created_at').size().reset_index(name='feedback_count')
        recommendation_counts = recommendations_df.groupby('created_at').size().reset_index(name='recommendation_count')

        # Merge the counts on 'created_at'
        merged_counts = pd.merge(feedback_counts, recommendation_counts, on='created_at', how='outer').fillna(0)

        # Visualization
        fig = go.Figure()

        # Adding feedback counts
        fig.add_trace(go.Scatter(x=merged_counts['created_at'], y=merged_counts['feedback_count'],
                                mode='lines+markers', name='Feedback Counts'))

        # Adding recommendation counts
        fig.add_trace(go.Scatter(x=merged_counts['created_at'], y=merged_counts['recommendation_count'],
                                mode='lines+markers', name='Recommendation Counts'))

        fig.update_layout(title='Feedback and Recommendation Counts Over Time',
                        xaxis_title='Date', yaxis_title='Counts',
                        template='plotly_white')

        # Assuming you're running in a Jupyter Notebook or similar; otherwise, adjust accordingly.


        visualizations.append({"figure": fig, "description": "Line plot showing the counts of feedbacks and recommendations added over time."})

    # Convert visualizations to JSON
    graphJSON = []
    for viz in visualizations:
        graphJSON.append({
            "data": json.loads(json.dumps(viz["figure"].data, cls=plotly.utils.PlotlyJSONEncoder)),
            "layout": json.loads(json.dumps(viz["figure"].layout, cls=plotly.utils.PlotlyJSONEncoder)),
            "description": viz["description"]
        })

    return jsonify(graphJSON)
if __name__ == '__main__':
    app.run(debug=True, port=334, host='0.0.0.0')
