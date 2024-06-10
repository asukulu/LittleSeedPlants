<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function show($category)
    {
        $category = Category::where('name', $category)->firstOrFail();
        $plants = $category->plants;
        return view('categories.show', compact('category', 'plants'));
}
}