<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommendations</title>
</head>
<body>
    <h1>Your Customized Fitness Recommendations</h1>
    @if (is_string($recommendations['recommendations']))
        <p>{{ $recommendations['recommendations'] }}</p>
    @else
        @foreach ($recommendations['recommendations'] as $recommendation)
            <p>{{ $recommendation }}</p>
        @endforeach
    @endif
</body>
</html>
