<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/hotels-index.css">
    <title>Chambres</title>
    <x-header/>

    <div class="container mt-5">
    <h1 class="mb-4">Modification d'une chambre</h1>
    <hr>

    <form action="{{ route('bedrooms.update', $bedrooms->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group p-2 col-md-6">
            <label for="nom">Nom</label>
            <input type="text" class="form-control mt-2" id="nom" name="nom" value="{{ $bedrooms->nom }}" required>
        </div>

        <div class="form-group p-2 col-md-6">
            <label for="nombrePlace">Nombre de Place</label>
            <input type="text" class="form-control mt-2" id="nombrePlace" name="nombrePlace" value="{{ $bedrooms->nombrePlace }}" required>
        </div>

        <div class="form-group p-2 col-md-6">
            <label for="prix">Prix</label>
            <input type="text" class="form-control mt-2" id="prix" name="prix" value="{{ $bedrooms->prix }}" required>
        </div>

        <div class="form-group p-2 col-md-6 d-flex flex-column gap-3">
            <label for="image">Entrer une image</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>

        <div class="form-group p-2 mt-3">
            <button type="submit" class="btn btn-info">Modifier</button>
        </div>
    </form>
</div>

</body>

</html>