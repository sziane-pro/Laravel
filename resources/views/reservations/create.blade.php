<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservations</title>

    <x-header/>
    <form action="{{ route('reservations.store', ['bedroom_id' => $bedroom->id]) }}" method="POST">
        @csrf
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="telephone">Téléphone</label>
        <input type="tel" name="telephone" id="telephone">
        <label for="nombreAdulte">Nombre d'adulte</label>
        <input type="number" name="nombreAdulte" id="nombreAdulte">
        <label for="nombreEnfant">Nombre d'enfant</label>
        <input type="number" name="nombreEnfant" id="nombreEnfant">
        <label for="dateDebut">Date de début</label>
        <input type="date" name="dateDebut" id="dateDebut">
        <label for="dateFin">Date de fin</label>
        <input type="date" name="dateFin" id="dateFin">
        <button type="submit">Ajouter</button>
    </form>
    <a href="{{route('reservations.index', ['id' => $hotel->id, 'bedroom_id' => $bedroom->id])}}">Retour aux réservations</a>
    <a href="{{route('bedrooms.index', ['id' => $hotel->id])}}">Retour aux chambres</a>
    <a href="{{route('hotels.index')}}">Retour aux hotels</a>
</body>
</html>