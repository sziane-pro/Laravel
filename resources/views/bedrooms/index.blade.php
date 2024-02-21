<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/hotels-index.css">
    <title>{{$hotel->nom}} | Chambres</title>

    <x-header/>
    <a href="{{ route('bedrooms.create', $hotel->id)}}">Ajouter une chambre</a>
    <table>
        <thead>
            <th>Id</th>
            <th>Hotel ID</th>
            <th>Nom</th>
            <th>Nombre de place</th>
            <th>Prix/nuit</th>
            <th>Image</th>
        </thead>
        <tbody>
            @foreach ($bedrooms as $bedroom)
            @if ($bedroom->hotelId == $hotel->id)
            <tr>
                <td style="padding:1rem;">{{$bedroom->id}}</td>
                <td style="padding:1rem;">{{$bedroom->hotelId}}</td>
                <td style="padding:1rem;">{{$bedroom->nom}}</td>
                <td style="padding:1rem;">{{$bedroom->nombrePlace}}</td>
                <td style="padding:1rem;">{{$bedroom->prix}}€</td>
                <td style="padding:1rem;"><img src="{{ asset('storage/'.$bedroom->image) }}" alt="Image de la chambre" style="width: 100px; height: 100px;"></td>
                <td style="padding:1rem;"><a class="btn btn-dark" href="{{ route('reservations.index', ['id' => $hotel->id, 'bedroom_id' => $bedroom->id]) }}">Voir les réservations</a><br><a class="btn btn-dark" href="{{route('reservations.create', ['id' => $hotel->id, 'bedroom_id' => $bedroom->id])}}">Ajouter une réservation</a></td>
                <td style="padding:1rem;"><a class="btn btn-dark" href="{{ route('bedrooms.edit', ['id' => $hotel->id, 'id' => $bedroom->id]) }}">Modifier</a></td>
                <td style="padding:1rem;">
                    <form action="{{ route('bedrooms.destroy', ['id' => $hotel->id, 'id' => $bedroom->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" value="{{ $bedroom->id }}" name="id">
                        <button type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>

    <hr>

    <a class="btn-primary" href="{{route('hotels.index')}}">Retour aux hotels</a>

</body>

</html>