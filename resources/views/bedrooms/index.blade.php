<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chambres</title>
</head>
<body>
<a href="{{ route('bedrooms.create', $hotel->id)}}">Ajouter une chambre</a>
<table>
    <thead>
        <th>Id</th>
        <th>Hotel ID</th>
        <th>Nom</th>
        <th>Nombre de place</th>
        <th>Prix</th>
    </thead>
    <tbody>
        @foreach ($bedrooms as $bedroom)
        <tr>
            <td style="padding:1rem;">{{$bedroom->id}}</td>
            <td style="padding:1rem;">{{$bedroom->hotelId}}</td>
            <td style="padding:1rem;">{{$bedroom->nom}}</td>
            <td style="padding:1rem;">{{$bedroom->nombrePlace}}</td>
            <td style="padding:1rem;">{{$bedroom->prix}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
    
</body>
</html>
