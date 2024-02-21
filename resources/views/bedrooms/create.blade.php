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
    <h1 class="mb-4">Ajout d'une chambre</h1>
    <hr>

    <form action="{{route('bedrooms.store', $hotel->id)}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group col-md-6 p-2">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" name="nom" id="nom" required>
        </div>

        <div class="form-group col-md-6 p-2">
            <label for="hotelId">Hotel Id</label>
            <input type="text" class="form-control" name="hotelId" id="hotelId" value="{{$hotel->id}}" readonly>
        </div>

        <div class="form-group col-md-6 p-2">
            <label for="nombrePlace">Nombre de place</label>
            <input type="text" class="form-control" name="nombrePlace" id="nombrePlace" required>
        </div>

        <div class="form-group col-md-6 p-2">
            <label for="prix">Prix</label>
            <input type="text" class="form-control" name="prix" id="prix" required>
        </div>

        <div class="form-group d-flex flex-column gap-3 mt-3 p-2">
            <label for="image">Image de la chambre:</label>
            <input type="file" class="form-control-file" name="image" required>
        </div>

        <div class="p-2">
            <button type="submit" class="btn btn-info mt-4">Ajouter</button>
        </div>
    </form>

    @if($errors->has('image'))
        <div class="alert alert-danger mt-3">
            {{ $errors->first('image') }}
        </div>
    @endif
</div>


</body>

</html>