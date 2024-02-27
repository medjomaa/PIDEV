from flask import Flask, jsonify, request
import pandas as pd
import plotly.express as px
import json
import plotly.utils
import mysql.connector

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

    if selected_date:
        query = "SELECT * FROM Feedback WHERE DATE(created_at) = %s"
        cursor.execute(query, (selected_date,))
    else:
        cursor.execute("SELECT * FROM Feedback")
    
    rows = cursor.fetchall()
    df = pd.DataFrame(rows)
   
    
    cursor.close()
    db_connection.close()

    # Updated custom colors to fit the red/black theme and include blue and faded reds

    custom_colors = [
        '#FF0000',  # Red
        '#0000FF',  # Blue
        '#FFFF00',  # Yellow
        '#00FF00',  # Green, a primary color in light but a secondary in pigment
        '#FF00FF',  # Magenta, to add variety
        '#00FFFF',  # Cyan, to add variety
        ]


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
        fig = px.bar(counts, x=column_name, y='counts', title=title, template="plotly_dark")
        # Assuming custom_colors is defined globally or within the scope of use
        colors = custom_colors[:len(counts)]
        fig.update_traces(marker_color=colors)
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
        {"figure": area_fig, "description": "Daily Feedback Additions"},
        {"figure": sentiment_fig, "description": "Sentiment Distribution"},
        {"figure": equipment_quality_fig, "description": "Equipment Quality Distribution"},
        {"figure": staff_fig, "description": "Staff Rating Distribution"},
        {"figure": classes_fig, "description": "Classes Satisfaction Distribution"},
        {"figure": safety_measures_fig, "description": "Safety Measures Satisfaction"},
        {"figure": membership_fees_fig, "description": "Membership Fees Satisfaction"},
        {"figure": atmosphere_fig, "description": "Atmosphere Rating"},
        # Add other figures as needed
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
