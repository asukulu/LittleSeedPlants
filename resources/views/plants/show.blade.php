<!-- resources/views/plants/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset($plant->image) }}" alt="{{ $plant->name }}" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h1>{{ $plant->name }}</h1>
            <p>{{ $plant->description }}</p>
            <p>Price: ${{ $plant->price }}</p>
            <a href="{{ route('add.to.cart', $plant->id) }}" class="btn btn-success">Add to Cart</a>
        </div>
    </div>
</div>
@endsection
