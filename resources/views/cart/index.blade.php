<!-- resources/views/cart/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Cart</h1>
    @if(session('cart'))
        <div class="row">
            @foreach(session('cart') as $id => $details)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('img/' . $details['image']) }}" alt="{{ $details['name'] }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $details['name'] }}</h5>
                        <p class="card-text">Quantity: {{ $details['quantity'] }}</p>
                        <p class="card-text">Price: ${{ $details['price'] }}</p>
                        <form action="{{ route('cart.remove', $id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12 text-right">
                <a href="#" class="btn btn-primary">Proceed to Checkout</a>
            </div>
        </div>
    @else
        <p>Your cart is empty.</p>
    @endif
</div>
@endsection
