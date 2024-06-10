<?php

namespace App\Http\Controllers;

use App\Models\Plant;

class PlantController extends Controller
{
    public function index()
    {
        $plants = Plant::all();
        return view('plants.index', compact('plants'));
    }

    public function show($slug)
    {
        $plant = Plant::where('slug', $slug)->firstOrFail();
        return view('plants.show', compact('plant'));
    }
}
