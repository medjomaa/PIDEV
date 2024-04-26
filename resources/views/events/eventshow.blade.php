@extends('frontend')
@section('title', 'Power Gym - Events')
@section('content')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            width: 100%;
            height: auto; /* Updated to auto to accommodate content */
            margin: 0;
            padding-bottom: 50px; /* Added padding to avoid content sticking to the bottom */
            background-color: #1b1b32;
            color: rgb(192,192,192);
            font-family: Cambria;
            font-size: 16px;
            background-image: url("https://www.pixel4k.com/wp-content/uploads/2020/08/red-and-blue-broken-abstract_1596929088.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;/* Do not repeat the background */
        background-attachment: fixed;
        }
        .welcome {
        margin: 40px auto;
        width: 80%;
        border: 2px solid #ffffff;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        background-color: rgba(0, 0, 0, 0.7);
    }
    .welcome h2 {
        color: #ffffff;
        margin-bottom: 10px;
        font-size: 28px; /* Adjusted size */
    }
    .welcome p {
        font-size: 14px; /* Adjusted size */
        /* Additional paragraph styles if needed */
    }
        .search {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }
        .search input[type="text"] {
            width: 300px; /* Fixed width for consistency */
            padding: 10px;
            border-radius: 5px;
            border: 2px solid #ffffff; /* White border */
            background-color: rgba(255, 255, 255, 0.5); /* Semi-transparent white */
            color: #000000; /* Black color for text */
        }
        .search button {
            padding: 10px 20px;
            background-color: #cc0000; /* Red */
            border: none;
            border-radius: 5px;
            color: #ffffff; /* White */
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .search button:hover {
            background-color: #ff4d4d; /* Darker red */
        }
        .events-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 170px;
            margin-bottom: 200px;
        }

        .event {
            width: 300px;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            color: #ffffff;
            margin-bottom: 20px; /* Ajout d'une marge en bas pour un meilleur espacement */
            display: flex; /* Utilisation de flexbox pour aligner les éléments */
            flex-direction: column; /* Pour que le bouton soit en dessous du texte */
            justify-content: space-between; /* Pour espacer les éléments verticalement */
            align-items: center; /* Pour centrer horizontalement les éléments */
            height: 100%; /* Pour que tous les produits aient la même hauteur */
        }

        .event h2 {
            margin-top: 0;
            font-size: 24px;
            text-align: center; /* Centrage du titre */
        }

        .event p {
            margin: 10px 0;
            color: #ffffff;
        }

        .event .Join-button {
            width: 100%;
            padding: 10px;
            background-color: #cc0000; /* Rouge */
            border: none;
            border-radius: 5px;
            color: #ffffff;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            align-self: center; /* Pour centrer horizontalement les boutons */
        }

        .event .Join-button:hover {
            background-color: #ff4d4d; /* Rouge plus foncé */
        }
        .event-date {
    font-weight: bold;
    color: #FFC107; /* Gold color for emphasis */
    background-color: rgba(255, 255, 255, 0.2); /* Slight white background */
    padding: 2px 5px; /* Padding around dates */
    border-radius: 4px; /* Rounded corners */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
}

    </style>
</head>
<body>
    
    <div class="welcome">
        
        <h2>Welcome to Our Gym Events</h2>
        <p>Discover the latest events happening at Power Gym. Join us to get the most out of your fitness journey!</p>
    </div>
    <div class="search">
        <form action="{{ route('events.searchE') }}" method="GET">
            <input type="text" name="search" placeholder="Search events...">
            <button type="submit">Search</button>
        </form>
    </div>
    <div class="events-container">
        @if(count($events) > 0)
            @foreach($events as $event)
                <div class="event">
                    <h2>{{ $event->title }}</h2>
                    <p>{{ $event->description }}</p>
                    <p>Type: {{ $event->type }}</p>
                    <p>
                    From <span class="event-date">{{ \Carbon\Carbon::parse($event->start_date)->format("F j, Y") }}</span> 
                        To <span class="event-date">{{ \Carbon\Carbon::parse($event->end_date)->format("F j, Y") }}</span>
                    </p>

                    <button class="Join-button">Join</button>
                </div>
            @endforeach
        @else
            <p>No events found.</p>
        @endif
    </div>
</body>
</html>
@endsection
