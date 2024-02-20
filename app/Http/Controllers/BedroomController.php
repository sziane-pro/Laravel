<?php

namespace App\Http\Controllers;

use App\Models\Hotels;
use App\Models\Bedrooms;
use Illuminate\Http\Request;

class BedroomController extends Controller
{
    public function index($id)
    {
        $hotel = Hotels::find($id);
        $bedrooms = Bedrooms::all();
        return view('bedrooms.index', compact('bedrooms', 'hotel'));
    }
    public function create($id)
    {
        $hotel = Hotels::find($id);
        return view('bedrooms.create', compact('hotel'));
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string',
            'nombrePlace' => 'required|integer',
            'prix' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('uploads', 'public');

        Bedrooms::create([
            'nom' => $request->nom,
            'nombrePlace' => $request->nombrePlace,
            'prix' => $request->prix,
            'image' => $imagePath,
            'hotelId' => $id,
        ]);

        return redirect()->route('bedrooms.index', ['id' => $id]);
    }


    public function edit($id)
    {
        $bedrooms = Bedrooms::find($id);
        return view('bedrooms.edit', compact('bedrooms'));
    }

    public function update(Request $request, $id)
    {
        $bedrooms = Bedrooms::find($id);

        $bedrooms->nom = $request->get('nom');
        $bedrooms->nombrePlace = $request->get('nombrePlace');
        $bedrooms->prix = $request->get('prix');

        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image s'il y en a une
            // Storage::delete('public/' . $bedrooms->image);

            // Mettre à jour avec la nouvelle image
            $imagePath = $request->file('image')->store('uploads', 'public');
            $bedrooms->image = $imagePath;
        }

        $bedrooms->save();

        return redirect()->route('bedrooms.index', ['id' => $bedrooms->hotelId]);
    }

    public function destroy(Request $request)
    {
        $bedroom = Bedrooms::find($request->get('id'));
        // Storage::delete('public/' . $bedroom->image);
        $bedroom->delete();

        return redirect()->route('bedrooms.index', ['id' => $bedroom->hotelId]);
    }
}
