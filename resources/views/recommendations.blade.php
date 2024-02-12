<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommended Fitness Activities</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .summary { margin-bottom: 20px; }
    </style>
</head>
<body>
    <h1>Recommended Fitness Activities</h1>
    @if (!empty($recommendations['summary']))
        <div class="summary">
            <p>{{ $recommendations['summary'] }}</p>
        </div>
    @else
        <p>No recommendations found.</p>
    @endif
</body>
</html>
