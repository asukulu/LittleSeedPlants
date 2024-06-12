<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plant;

class CartController extends Controller
{
    public function cart()
    {
        return view('cart');
    }

    public function addToCart($id)
    {
        $plant = Plant::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $plant->name,
                "quantity" => 1,
                "price" => $plant->price,
                "image" => $plant->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->route('cart')->with('success', 'Plant added to cart successfully!');
    }

    public function removeFromCart($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart')->with('success', 'Plant removed from cart successfully!');
    }

    public function updateCart(Request $request)
    {
        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
}
