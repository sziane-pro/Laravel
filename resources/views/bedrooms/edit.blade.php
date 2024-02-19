<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chambres</title>
</head>
<body>

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
        <br>
        <button type="submit">Ajouter</button>
    </form>
    
</body>
</html>