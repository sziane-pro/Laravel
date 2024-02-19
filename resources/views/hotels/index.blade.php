<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../resources/css/hotels-index.css">
    <title>HOTELS</title>
</head>
<body>

<header class="global-wrapper">
    <div class="header-left">
        
    </div>
    <div class="header-right">
        
    </div>
</header>

    <hr>
    <a href="{{ route('hotels.create') }}">Ajouter un hotel</a>
    <hr>
    <table> 

        @foreach ($hotels as $hotel)
            <tr>
                <td>{{ $hotel->id }}</td>
                <td>{{ $hotel->nom }}</td>
                <td>{{ $hotel->adresse }}</td>
                <td>{{ $hotel->étoile }}</td>
                <td>{{ $hotel->prix }}</td>
            </tr>
        @endforeach

    </table>
    
</body>
</html>


