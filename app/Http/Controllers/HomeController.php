<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('landing');
        $featuredPlants = Plant::inRandomOrder()->take(6)->get();
        $categories = Category::all();
        return view('home', compact('featuredPlants', 'categories'));
    }
}
