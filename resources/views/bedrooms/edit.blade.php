<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/hotels-index.css">
    <title>Chambres</title>
    <x-header/>

    <h1>Modification d'une chambre</h1>
    <hr>


    <form action="{{ route('bedrooms.update', $bedrooms->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" value="{{ $bedrooms->nom }}">
        <label for="nombrePlace">Nombre de Place</label>
        <input type="text" name="nombrePlace" id="nombrePlace" value="{{$bedrooms->nombrePlace}}">
        <label for="prix">Prix</label>
        <input type="text" name="prix" id="prix" value="{{$bedrooms->prix}}">
        <label for="image">Entrer une image</label>
        <input type="file" name="image" id="image" value="{{$bedrooms->image}}">
        <br>
        <button type="submit">Ajouter</button>
    </form>

</body>

</html>