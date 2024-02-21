<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Réservations</title>

    <x-header/>
    <a href="{{ route('reservations.create', ['bedroom_id' => $bedroom->id]) }}">Ajouter une réservation</a>
    <table>
        <thead>
            <th>Id</th>
            <th>Chambre ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Nombre d'adulte</th>
            <th>Nombre d'enfant</th>
            <th>Date de début</th>
            <th>Date de fin</th>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
            @if ($reservation->bedroomId == $bedroom->id)
            <tr>
                <td style="padding:1rem;">{{$reservation->id}}</td>
                <td style="padding:1rem;">{{$reservation->bedroomId}}</td>
                <td style="padding:1rem;">{{$reservation->nom}}</td>
                <td style="padding:1rem;">{{$reservation->prenom}}</td>
                <td style="padding:1rem;">{{$reservation->email}}</td>
                <td style="padding:1rem;">{{$reservation->telephone}}</td>
                <td style="padding:1rem;">{{$reservation->nombreAdulte}}</td>
                <td style="padding:1rem;">{{$reservation->nombreEnfant}}</td>
                <td style="padding:1rem;">{{$reservation->dateDebut}}</td>
                <td style="padding:1rem;">{{$reservation->dateFin}}</td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>

    <hr>
</body>
</html>