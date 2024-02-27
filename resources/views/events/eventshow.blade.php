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
            height: 100vh;
            margin: 0;
            background-color: #1b1b32;
            color: rgb(192,192,192);
            font-family: Cambria;
            font-size: 16px;
            background-image: url(https://img.freepik.com/premium-photo/gym-with-red-lights-black-wall-that-says-gym-it_876956-1215.jpg?w=740); /* Remplacer par l'URL de votre image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            
        }
        h1,p {
            margin: 1em auto;
            text-align: center;
            color:	#ffffff; /* Rouge */
        }

        .search {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 90px;
            margin-bottom: 0;
            
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
    </style>
</head>
<body>
    <h1>.</h1>
    <div class="search">
    <form action="{{ route('events.searchE') }}" method="GET">
        <input type="text" name="search" placeholder="Search events">
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
                    <p>From {{ $event->start_date }} To {{ $event->end_date }}</p>
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