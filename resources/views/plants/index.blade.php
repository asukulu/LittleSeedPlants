<!-- resources/views/plants/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($plants as $plant)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset($plant->image) }}" class="card-img-top img-fluid plant-img" alt="{{ $plant->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $plant->name }}</h5>
                        <p class="card-text">{{ Str::limit($plant->description, 50) }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">${{ $plant->price }}</small>
                            <a href="{{ route('plants.show', $plant->slug) }}" class="btn btn-sm btn-outline-secondary">View</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
