<?php

namespace App\Http\Controllers;


use App\Models\Bedrooms;
use App\Models\Reservations;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index($id)
    {
        $bedroom = Bedrooms::find($id);
        $reservations = $bedroom->reservations;
        return view('reservations.index', compact('reservations', 'bedroom'));
    }
    public function create($bedroom_id)
    {
        $bedroom = Bedrooms::find($bedroom_id);
    
        // Vérifier si la chambre a été trouvée
        if (!$bedroom) {
            // Gérer le cas où la chambre n'est pas trouvée, par exemple, rediriger vers une page d'erreur
            return redirect()->route('error.page');
        }
    
        $hotel = $bedroom->hotel;
    
        return view('reservations.create', compact('bedroom', 'hotel'));
    }
    public function store(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email',
            'telephone' => 'required|string',
            'nombreAdulte' => 'required|integer',
            'nombreEnfant' => 'required|integer',
            'dateDebut' => 'required|date',
            'dateFin' => 'required|date',
        ]);

        Reservations::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'nombreAdulte' => $request->nombreAdulte,
            'nombreEnfant' => $request->nombreEnfant,
            'dateDebut' => $request->dateDebut,
            'dateFin' => $request->dateFin,
            'bedroomId' => $id,
        ]);

        return redirect()->route('reservations.index', ['bedroom_id' => $id]);
    }

    public function edit($id)
    {
        $reservations = Reservations::find($id);
        return view('reservations.edit', compact('reservations'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email',
            'telephone' => 'required|string',
            'nombreAdulte' => 'required|integer',
            'nombreEnfant' => 'required|integer',
            'dateDebut' => 'required|date',
            'dateFin' => 'required|date',
        ]);

        $reservation = Reservations::find($id);
        $reservation->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'nombreAdulte' => $request->nombreAdulte,
            'nombreEnfant' => $request->nombreEnfant,
            'dateDebut' => $request->dateDebut,
            'dateFin' => $request->dateFin,
        ]);

        return redirect()->route('reservations.index', ['bedroom_id' => $reservation->bedroomId]);
    }

    public function destroy($id)
    {
        $reservation = Reservations::find($id);
        $bedroomId = $reservation->bedroomId;
        $reservation->delete();
        return redirect()->route('reservations.index', ['bedroom_id' => $bedroomId]);
    }
}
