<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/hotels-index.css">
    <title>Chambres</title>
    <x-header/>
    <h1>Ajout d'une chambre</h1>

    <hr>

    <form action="{{route('bedrooms.store', $hotel->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">
        <label for="hotelId">Hotel Id</label>
        <input type="text" name="hotelId" id="hotelId" value="{{$hotel->id}}">
        <label for="nombrePlace">Nombre de place</label>
        <input type="text" name="nombrePlace" id="nombrePlace">
        <label for="prix">Prix</label>
        <input type="text" name="prix" id="prix">
        <label for="image">Image de la chambre:</label>
        <input type="file" name="image">
        <br>
        <button type="submit">Ajouter</button>
    </form>

    @if($errors->has('image'))
    <div class="alert alert-danger">
        {{ $errors->first('image') }}
    </div>
@endif


</body>

</html>