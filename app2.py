from flask import Flask, jsonify, request
import pandas as pd
import plotly.express as px
import json
import plotly.utils
import mysql.connector
import plotly.graph_objects as go

app = Flask(__name__)

def get_db_connection():
    db_host = '127.0.0.1'
    db_user = 'root'
    db_password = ''  # Assuming no password is set
    db_name = 'powergym'
    db_connection = mysql.connector.connect(host=db_host, port="3307", user=db_user, password=db_password, database=db_name)
    return db_connection

@app.route('/api/visualizations')
def home():
    selected_date = request.args.get('date')

    db_connection = get_db_connection()
    cursor = db_connection.cursor(dictionary=True)

    base_query = """
    SELECT f.*, u.created_at AS user_created_at, r.age, r.sex 
    FROM Feedback f
    LEFT JOIN Users u ON f.user_id = u.id 
    LEFT JOIN Recommendations r ON f.user_id = r.user_id
    """

    if selected_date:
        query = base_query + " WHERE DATE(f.created_at) = %s"
        cursor.execute(query, (selected_date,))
    else:
        cursor.execute(base_query)

    rows = cursor.fetchall()
    df = pd.DataFrame(rows)

    cursor.close()
    db_connection.close()

    # Data cleaning and transformation
    df['created_at'] = pd.to_datetime(df['created_at'])
    df['user_created_at'] = pd.to_datetime(df['user_created_at'])
    df['age'].fillna(df['age'].mean(), inplace=True)
    df['sex'].fillna('Unknown', inplace=True)
    df['user_tenure_at_feedback'] = (df['created_at'] - df['user_created_at']).dt.days

    # Visualization functions adjusted for the new data
    custom_colors = ['#FF0000', '#0000FF', '#FFFF00', '#00FF00', '#FF00FF', '#00FFFF']
    def generate_histogram(dataframe, column_name, title, custom_colors, bin_size=10):
        # Use the `nbins` attribute to control the number of bins based on the `bin_size` parameter
        fig = px.histogram(dataframe, x=column_name, title=title,
                            template="plotly_dark", 
                            color_discrete_sequence=custom_colors,
                            nbins=int((dataframe[column_name].max() - dataframe[column_name].min()) / bin_size))
        customize_fig_layout(fig, title)
        return fig


    def customize_fig_layout(fig, title):
        fig.update_layout(
            title_font_size=22,
            title_x=0.5,
            legend_title_font_color="white",
            legend_title_font_size=14,
            legend_x=1,
            legend_y=0.5,
            font=dict(
                family="Arial, sans-serif",
                size=12,
                color="white"
            ),
            paper_bgcolor='rgba(0,0,0,0)',  # Make background transparent
            plot_bgcolor='rgba(0,0,0,0)'    # Make plot background transparent
        )
    def generate_scatter_plot(dataframe, x_column, y_column, title, custom_colors, color_column=None):
        fig = px.scatter(dataframe, x=x_column, y=y_column, color=color_column, title=title,
                        template="plotly_dark", color_discrete_sequence=custom_colors)
        customize_fig_layout(fig, title)
        return fig

# Example function for generating a box plot
    def generate_box_plot(dataframe, y_column, title, custom_colors, x_column=None):
        fig = px.box(dataframe, x=x_column, y=y_column, title=title,
                    template="plotly_dark", color_discrete_sequence=custom_colors)
        customize_fig_layout(fig, title)
        return fig
    def generate_colored_bar_chart(dataframe, column_name, title, custom_colors):   
        counts = dataframe[column_name].value_counts().reset_index()
        counts.columns = [column_name, 'counts']
        fig = px.bar(counts, x=column_name, y='counts', title=title, template="plotly_dark", color_discrete_sequence=custom_colors)
       
        return fig

    # Generate visualizations for each attribute with new data
    age_distribution_fig = generate_colored_bar_chart(df, 'age', "Age Distribution", custom_colors)
    sex_distribution_fig = generate_colored_bar_chart(df, 'sex', "Sex Distribution", custom_colors)
    user_tenure_fig = generate_colored_bar_chart(df, 'user_tenure_at_feedback', "User Tenure at Feedback", custom_colors)

    

    def generate_area_chart(dataframe, x_column, y_column, title, custom_colors):
        fig = px.area(dataframe, x=x_column, y=y_column, title=title,
                    template="plotly_dark", color_discrete_sequence=[custom_colors[0]])  # Using the first color for the area chart
       
        return fig


    def generate_pie_chart(dataframe, names_column, title, custom_colors):
        fig = px.pie(dataframe, names=names_column, title=title,
                    template="plotly_dark", color_discrete_sequence=custom_colors)
       
        return fig


    def generate_colored_bar_chart(dataframe, column_name, title, custom_colors):   
        counts = dataframe[column_name].value_counts().reset_index()
        counts.columns = [column_name, 'counts']
        fig = px.bar(counts, x=column_name, y='counts', title=title, template="plotly_dark", color_discrete_sequence=custom_colors)
    
    # Customizing the layout
       

        
        # Adding tooltips
        fig.update_traces(marker=dict(line=dict(color='#000000', width=1)),  # Adding a border to the bar for better visibility
                        text=counts['counts'],  # Show counts as text labels
                        textposition='outside')  # Position the text labels outside the bars
        
        return fig

    # Generate visualizations for each attribute
    equipment_quality_fig = generate_colored_bar_chart(df, 'equipment_quality', "Equipment Quality Distribution", custom_colors)
    staff_fig = generate_colored_bar_chart(df, 'staff', "Staff Rating Distribution", custom_colors)
    classes_fig = generate_colored_bar_chart(df, 'classes', "Classes Satisfaction Distribution", custom_colors)
    safety_measures_fig = generate_colored_bar_chart(df, 'safety_measures', "Safety Measures Satisfaction", custom_colors)
    membership_fees_fig = generate_colored_bar_chart(df, 'membership_fees', "Membership Fees Satisfaction", custom_colors)
    atmosphere_fig = generate_colored_bar_chart(df, 'atmosphere', "Atmosphere Rating", custom_colors)
    df['created_at'] = pd.to_datetime(df['created_at']).dt.date
    daily_additions = df.groupby('created_at').size().reset_index(name='counts')
    area_fig = generate_area_chart(daily_additions, "created_at", "counts", "Daily Feedback Additions", custom_colors)
    sentiment_fig = generate_pie_chart(df, "sentiment", "Sentiment Distribution", custom_colors)
    

    visualizations = [
    # Age Distribution
    {"figure": generate_histogram(df, 'age', "Age Distribution", custom_colors, bin_size=5), "description": "Distribution of user ages, segmented into clear age groups to better understand the demographics of gym users."},

    # Sex Distribution
    {"figure": generate_colored_bar_chart(df, 'sex', "Sex Distribution", custom_colors), "description": "Distribution of users by sex, highlighting the proportion of male, female, and other genders within the gym membership."},

    # User Tenure vs Equipment Quality
    {"figure": generate_scatter_plot(df, 'user_tenure_at_feedback', 'equipment_quality', "User Tenure vs Equipment Quality", custom_colors, 'sentiment'), "description": "Scatter plot showing the relationship between user tenure and equipment quality ratings, colored by sentiment to identify patterns."},

    # Equipment Quality Ratings by Sex
    {"figure": generate_box_plot(df, 'equipment_quality', "Equipment Quality Ratings by Sex", custom_colors, 'sex'), "description": "Box plot showing the distribution of equipment quality ratings across different sexes, providing insights into user satisfaction."},

    # Daily Feedback Additions
    {"figure": generate_area_chart(daily_additions, "created_at", "counts", "Daily Feedback Additions", custom_colors), "description": "Area chart highlighting trends in daily feedback submissions, identifying periods of increased engagement."},

    # Sentiment Distribution
    {"figure": generate_pie_chart(df, "sentiment", "Sentiment Distribution", custom_colors), "description": "Distribution of feedback sentiments, showcasing the proportion of positive, negative, and neutral feedback."},

    # Additional Categories
    # Repeat the pattern for staff, classes, safety measures, membership fees, atmosphere, etc., adjusting descriptions to highlight insights.
]

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
