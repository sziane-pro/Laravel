<?php

namespace App\Http\Controllers;

use App\Models\Hotels;
use App\Models\Bedrooms;
use Illuminate\Http\Request;

class BedroomController extends Controller
{

    public function index($id)
    {
        $bedrooms = Bedrooms::all();
        $hotel = Hotels::find($id);
        return view('bedrooms.index', compact('bedrooms', 'hotel'));
    }
    public function create($id)
    {
        $hotel = Hotels::find($id);
        return view('bedrooms.create', compact('hotel'));
    }

    public function store(Request $request, $id)
    {
        $bedrooms = Bedrooms::create($request->all());
        $hotel = Hotels::find($id);
        return redirect()->route('bedrooms.index',['id' => $id]);
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
        $bedrooms->save();

        $hotel = Hotels::find($id);
        return redirect()->route('bedrooms.index', ['id' => $bedrooms->hotelId]);
    }

}
