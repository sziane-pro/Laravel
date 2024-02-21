<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/hotels-index.css">
    <title>{{$hotel->nom}} | Chambres</title>

    <x-header/>
    <div class="container mt-4">
    <a class="btn btn-primary mb-3" href="{{ route('bedrooms.create', $hotel->id) }}">Ajouter une chambre</a>

    <table class="table table-dark">
        <thead>
            <th>Id</th>
            <th>Hotel ID</th>
            <th>Nom</th>
            <th>Nombre de places</th>
            <th>Prix/nuit</th>
            <th>Image</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($bedrooms as $bedroom)
                @if ($bedroom->hotelId == $hotel->id)
                    <tr>
                        <td>{{$bedroom->id}}</td>
                        <td>{{$bedroom->hotelId}}</td>
                        <td>{{$bedroom->nom}}</td>
                        <td>{{$bedroom->nombrePlace}}</td>
                        <td>{{$bedroom->prix}}€</td>
                        <td><img src="{{ asset('storage/'.$bedroom->image) }}" alt="Image de la chambre" style="width: 100px; height: 100px;"></td>
                        <td>
                            <a class="btn btn-light" href="{{ route('reservations.index', ['id' => $hotel->id, 'bedroom_id' => $bedroom->id]) }}">Voir les réservations</a>
                            <br>
                            <a class="btn btn-light mt-2" href="{{route('reservations.create', ['id' => $hotel->id, 'bedroom_id' => $bedroom->id])}}">Ajouter une réservation</a>
                        </td>
                        <td><a class="btn btn-light" href="{{ route('bedrooms.edit', ['id' => $hotel->id, 'id' => $bedroom->id]) }}">Modifier</a></td>
                        <td>
                            <form action="{{ route('bedrooms.destroy', ['id' => $hotel->id, 'id' => $bedroom->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" value="{{ $bedroom->id }}" name="id">
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>

    <hr>

    <a class="btn btn-primary" href="{{route('hotels.index')}}">Retour aux hôtels</a>
</div>
</body>

</html>