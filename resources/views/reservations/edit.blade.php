<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier réservation</title>
    <x-header />

    <div class="container mt-5">
        <h1>Modifier réservation</h1>
        <form action="{{ route('reservations.update', $reservations->id) }}" method="post" class="mt-4">
            @csrf
            @method('put')

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group p-3">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" id="nom" class="form-control" value="{{ $reservations->nom }}">
                    </div>
                    <div class="form-group p-3">
                        <label for="prenom">Prénom</label>
                        <input type="text" name="prenom" id="prenom" class="form-control" value="{{ $reservations->prenom }}">
                    </div>
                    <div class="form-group p-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $reservations->email }}">
                    </div>
                    <div class="form-group p-3">
                        <label for="telephone">Téléphone</label>
                        <input type="text" name="telephone" id="telephone" class="form-control" value="{{ $reservations->telephone }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group p-3">
                        <label for="nombreAdulte">Nombre d'adulte</label>
                        <input type="number" name="nombreAdulte" id="nombreAdulte" class="form-control" value="{{ $reservations->nombreAdulte }}">
                    </div>
                    <div class="form-group p-3">
                        <label for="nombreEnfant">Nombre d'enfant</label>
                        <input type="number" name="nombreEnfant" id="nombreEnfant" class="form-control" value="{{ $reservations->nombreEnfant }}">
                    </div>
                    <div class="form-group p-3">
                        <label for="dateDebut">Date de début</label>
                        <input type="date" name="dateDebut" id="dateDebut" class="form-control" value="{{ $reservations->dateDebut }}">
                    </div>
                    <div class="form-group p-3">
                        <label for="dateFin">Date de fin</label>
                        <input type="date" name="dateFin" id="dateFin" class="form-control" value="{{ $reservations->dateFin }}">
                    </div>
                </div>
            </div>

            <div class="p-3">
                <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
        </form>
    </div>

</body>

</html>
