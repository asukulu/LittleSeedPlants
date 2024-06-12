<?php
// app/Http/Controllers/WishlistController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlist = session()->get('wishlist', []);
        return view('wishlist.index', compact('wishlist'));
    }

    public function addToWishlist(Request $request, $id)
    {
        $plant = Plant::find($id);
        $wishlist = session()->get('wishlist', []);
        $wishlist[$id] = [
            'name' => $plant->name,
            'price' => $plant->price,
            'image' => $plant->image
        ];
        session()->put('wishlist', $wishlist);
        return redirect()->route('wishlist.index');
    }

    public function removeFromWishlist($id)
    {
        $wishlist = session()->get('wishlist', []);
        if (isset($wishlist[$id])) {
            unset($wishlist[$id]);
            session()->put('wishlist', $wishlist);
        }
        return redirect()->route('wishlist.index');
    }
}
