<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/hotels-index.css">
    <title>Hotels</title>
    <x-header />

    <div class="container">
    <h1 class="mt-5">Modification d'un hôtel</h1>
    <hr>
    <form action="{{ route('hotels.update', $hotels->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group col-md-6 p-2">
            <label for="nom">Nom</label>
            <input type="text" class="form-control mt-3" id="nom" name="nom" value="{{ $hotels->nom }}" required>
        </div>

        <div class="form-group col-md-6 p-2">
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control mt-3" id="adresse" name="adresse" value="{{$hotels->adresse}}" required>
        </div>

        <div class="form-group col-md-6 p-2">
            <label for="etoile">Étoile</label>
            <input type="text" class="form-control mt-3" id="etoile" name="etoile" value="{{$hotels->étoile}}" required>
        </div>

        <div class="form-group p-2 mt-3">
            <button type="submit" class="btn btn-info">Modifier</button>
        </div>

    </form>
</div>

    </body>

</html>