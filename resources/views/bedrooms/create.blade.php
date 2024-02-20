<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chambres</title>
</head>

<body>

    <h1>Ajout d'une chambre</h1>

    <hr>

    <form action="{{route('bedrooms.store', $hotel->id)}}" method="POST">
        @csrf
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">
        <label for="hotelId">Hotel Id</label>
        <input type="text" name="hotelId" id="hotelId" value="{{$hotel->id}}">
        <label for="nombrePlace">Nombre de place</label>
        <input type="text" name="nombrePlace" id="nombrePlace">
        <label for="prix">Prix</label>
        <input type="text" name="prix" id="prix">
        <!-- <label for="image">Image de la chambre:</label>
        <input type="file" name="image" accept="image/*"> -->
        <br>
        <button type="submit">Ajouter</button>
    </form>

</body>

</html>