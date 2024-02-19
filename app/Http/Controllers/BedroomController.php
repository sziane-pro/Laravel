<?php

namespace App\Http\Controllers;

use App\Models\Bedrooms;
use Illuminate\Http\Request;

class BedroomController extends Controller
{
    public function create()
    {
        return view('bedrooms.create');
    }

    public function store(Request $request)
    {
        $bedrooms = Bedrooms::create($request->all());
        return redirect()->route('bedrooms.index');
    }
}
