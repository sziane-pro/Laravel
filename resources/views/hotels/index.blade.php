<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOTELS</title>


    <x-header />
    <div class="container text-light">
        <hr>
        <a href="{{ route('hotels.create') }}" class="btn btn-primary">Ajouter un hotel</a>
        <hr>
        <div class="row d-flex justify-content-between align-items-center">
            <table>
                <thead>
                    <th class="p-3">Id</th>
                    <th class="p-3">Nom</th>
                    <th class="p-3">Adresse</th>
                    <th class="p-3">Étoile</th>
                </thead>
                <tbody>
                    @foreach ($hotels as $hotel)
                    <tr>
                        <td class="p-3">{{ $hotel->id }}</td>
                        <td class="p-3">{{ $hotel->nom }}</td>
                        <td class="p-3">{{ $hotel->adresse }}</td>
                        <td class="p-3">
                            @for ($i = 0; $i < $hotel->étoile; $i++)
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                    <polygon
                                        points="10,4 12.36,7.1 18,8 13.8,11.8 15.1,18 10,15.5 4.9,18 6.2,11.8 2,8 7.64,7.1"
                                        fill="yellow" />
                                </svg>
                            @endfor
                        </td>
                        <td class="p-3"> <a href="{{ route('hotels.edit', $hotel->id) }}" class="btn btn-light">Modifier</a></td>
                        <td class="p-3">
                            <form action="{{ route('hotels.destroy') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" value="{{ $hotel->id }}" name="id">
                                <button class="btn btn-danger" type="submit">Supprimer</button>
                            </form>
                        </td>
                        <td class="p-3"><a class="btn btn-info" href="{{ route('bedrooms.index', $hotel->id) }}">Voir les chambres</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

    </body>

</html>