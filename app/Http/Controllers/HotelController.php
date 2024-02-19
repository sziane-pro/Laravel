<?php

namespace App\Http\Controllers;

use App\Models\Hotels;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotels::all();
        return view('hotels.index', compact('hotels'));
    }

    public function create()
    {
        return view('hotels.create');
    }

    public function store(Request $request)
    {
        $hotels = Hotels::create($request->all());
        return redirect()->route('hotels.index');
    }

    public function edit($id)
    {
        $hotels = Hotels::find($id);
        return view('hotels.edit', compact('hotels'));
    }

    public function update(Request $request, $id)
    {
        $hotels = Hotels::find($id);
        $hotels->nom = $request->get('nom');
        $hotels->adresse = $request->get('adresse');
        $hotels->étoile = $request->get('étoile');
        $hotels->save();
        
        return redirect()->route('hotels.index');
    }

    public function destroy(Request $request)
    {
        $hotels = Hotels::find($request->get('id'));
        $hotels->delete();

        return redirect()->route('hotels.index');
    }
}
