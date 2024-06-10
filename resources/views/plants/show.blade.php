@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $plant->name }}</h1>
        <img src="{{ $plant->image }}" alt="{{ $plant->name }}">
        <p>{{ $plant->description }}</p>
        <p>Price: ${{ $plant->price }}</p>
    </div>
@endsection
