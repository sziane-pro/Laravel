<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Réservations</title>

    <x-header/>
    <div class="container mt-5">
    <a class="btn btn-primary mb-3" href="{{ route('reservations.create', ['bedroom_id' => $bedroom->id]) }}">Ajouter une réservation</a>

    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <th>Id</th>
            <th>Chambre ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Nombre d'adultes</th>
            <th>Nombre d'enfants</th>
            <th>Date de début</th>
            <th>Date de fin</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
                @if ($reservation->bedroomId == $bedroom->id)
                    <tr>
                        <td>{{$reservation->id}}</td>
                        <td>{{$reservation->bedroomId}}</td>
                        <td>{{$reservation->nom}}</td>
                        <td>{{$reservation->prenom}}</td>
                        <td>{{$reservation->email}}</td>
                        <td>{{$reservation->telephone}}</td>
                        <td>{{$reservation->nombreAdulte}}</td>
                        <td>{{$reservation->nombreEnfant}}</td>
                        <td>{{$reservation->dateDebut}}</td>
                        <td>{{$reservation->dateFin}}</td>
                        <td class="d-flex flex-column align-items-center gap-3">
                            <a class="btn btn-dark" href="{{ route('reservations.edit', ['id' => $reservation->id]) }}">Modifier</a>
                            <form action="{{ route('reservations.destroy', ['id' => $reservation->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" value="{{ $reservation->id }}" name="id">
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</div>


    <hr>
</body>
</html>