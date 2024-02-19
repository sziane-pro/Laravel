<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
</head>
<body>

    <h1>Modification d'un hotel</h1>
    <hr>


    <form action="{{ route('hotels.update', $hotels->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" value="{{ $hotels->nom }}">
        <label for="adresse">Adresse</label> 
        <input type="text" name="adresse" id="adresse" value="{{$hotels->adresse}}">
        <label for="étoile">Étoile</label> 
        <input type="text" name="étoile" id="étoile" value="{{$hotels->étoile}}">
        <br>
        <button type="submit">Ajouter</button>
    </form>
    
</body>
</html>