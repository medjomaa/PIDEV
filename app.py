from flask import Flask, request, jsonify
import nltk
from nltk.sentiment import SentimentIntensityAnalyzer
from flask import Flask


from flask import request, abort

def require_api_key(f):
    @wraps(f)
    def decorated_function(*args, **kwargs):
        if 'API-Key' not in request.headers or request.headers['API-Key'] != 'YourExpectedAPIKey':
            abort(403)  # Forbidden access without correct API-Key header
        return f(*args, **kwargs)
    return decorated_function
# Download the VADER lexicon
nltk.download('vader_lexicon', quiet=True)

app = Flask(__name__)
def analyze_sentiment(text):
    sia = SentimentIntensityAnalyzer()
    sentiment_scores = sia.polarity_scores(text)

    if sentiment_scores['compound'] >= 0.05:
        return 'Positive'
    elif sentiment_scores['compound'] <= -0.05:
        return 'Negative'
    else:
        return 'Neutral'

@app.route('/analyze', methods=['POST'])
def sentiment_analysis():
    if not request.json or 'text' not in request.json:
        return jsonify({'error': 'No text provided for analysis'}), 400
    input_text = request.json['text']
    sentiment = analyze_sentiment(input_text)
    return jsonify({'sentiment': sentiment})

# Run the Flask app to be accessible from any host
if __name__ == '__main__':
    app.run(host='0.0.0.0', debug=True)

