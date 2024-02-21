<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservations</title>

    <x-header />
    <div class="container mt-5">

        <h1 class="mb-4">Ajout d'une réservation</h1>

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <h2>La chambre est déja réservée sur ces dates</h2>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('reservations.store', ['bedroom_id' => $bedroom->id]) }}" method="POST" class="mb-4">
            @csrf

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group p-3">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" name="nom" id="nom" required>
                    </div>
                    <div class="form-group p-3">
                        <label for="prenom">Prénom</label>
                        <input type="text" class="form-control" name="prenom" id="prenom" required>
                    </div>
                    <div class="form-group p-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="form-group p-3">
                        <label for="telephone">Téléphone</label>
                        <input type="tel" class="form-control" name="telephone" id="telephone" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group p-3">
                        <label for="nombreAdulte">Nombre d'adulte</label>
                        <input type="number" class="form-control" name="nombreAdulte" id="nombreAdulte" required>
                    </div>
                    <div class="form-group p-3">
                        <label for="nombreEnfant">Nombre d'enfant</label>
                        <input type="number" class="form-control" name="nombreEnfant" id="nombreEnfant" required>
                    </div>
                    <div class="form-group p-3">
                        <label for="dateDebut">Date de début</label>
                        <input type="date" class="form-control" name="dateDebut" id="dateDebut" required>
                    </div>
                    <div class="form-group p-3">
                        <label for="dateFin">Date de fin</label>
                        <input type="date" class="form-control" name="dateFin" id="dateFin" required>
                    </div>
                </div>
            </div>

            <div class="p-3">
                <button type="submit" class="btn btn-info">Ajouter</button>
            </div>
        </form>

        <a class="btn btn-light mr-2"
            href="{{ route('reservations.index', ['id' => $hotel->id, 'bedroom_id' => $bedroom->id]) }}">Retour aux
            réservations</a>
        <a class="btn btn-light mr-2" href="{{ route('bedrooms.index', ['id' => $hotel->id]) }}">Retour aux chambres</a>
        <a class="btn btn-light" href="{{ route('hotels.index') }}">Retour aux hôtels</a>
    </div>

    </body>

</html>