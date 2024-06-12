<!-- resources/views/wishlist/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Wishlist</h1>
    @if(session('wishlist'))
        <div class="row">
            @foreach(session('wishlist') as $id => $details)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('img/' . $details['image']) }}" alt="{{ $details['name'] }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $details['name'] }}</h5>
                        <p class="card-text">Price: ${{ $details['price'] }}</p>
                        <form action="{{ route('wishlist.remove', $id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @else
        <p>Your wishlist is empty.</p>
    @endif
</div>
@endsection
