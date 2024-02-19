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
        <thead>
            <th>Id</th>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Étoile</th>
        </thead>
        <tbody>
            @foreach ($hotels as $hotel)
                <tr>
                    <td style="padding:1rem;">{{ $hotel->id }}</td>
                    <td style="padding:1rem;">{{ $hotel->nom }}</td>
                    <td style="padding:1rem;">{{ $hotel->adresse }}</td>
                    <td style="padding:1rem;">{{ $hotel->étoile }}</td>
                    <td style="padding:1rem;"> <a href="{{ route('hotels.edit', $hotel->id) }}">Modifier</a></td>
                    <td style="padding:1rem;">
                        <form action="{{ route('hotels.destroy') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" value="{{ $hotel->id }}" name="id">
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>

                </tr>
            @endforeach
            
        </tbody>


    </table>
    
</body>
</html>


