<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotels</title>
</head>
<body>
    <h1>Ajout d'un hotel</h1>

    <hr>

    <form action="{{ route('hotels.store') }}" method="POST">
        @csrf
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" id="adresse">
        <label for="étoile">Étoile</label>
        <input type="number" name="étoile" id="étoile">
        <label for="prix">Prix</label>
        <input type="text" name="prix" id="prix">
        <br>
        <button type="submit">Ajouter</button>
    </form>

</body>
</html>