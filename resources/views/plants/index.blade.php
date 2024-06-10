@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Plants</h1>
        <div class="row">
            @foreach($plants as $plant)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ $plant->image }}" class="card-img-top" alt="{{ $plant->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $plant->name }}</h5>
                            <p class="card-text">{{ $plant->description }}</p>
                            <a href="{{ route('plants.show', $plant->slug) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
