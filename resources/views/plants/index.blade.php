@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LittleSeed Plants - Plants</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<style>

</style>
<div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3>SHOP ALL</h3>
                <div class="filters">
                    <h4>Category</h4>
                    <div>
                        <input type="checkbox" id="pet-friendly" name="category" value="Pet-Friendly">
                        <label for="pet-friendly">Pet-Friendly</label>
                    </div>
                    <div>
                        <input type="checkbox" id="air-filter" name="category" value="Air-Filter">
                        <label for="air-filter">Air-Filter</label>
                    </div>

                    <h4>Size</h4>
                    <div>
                        <input type="checkbox" id="small" name="size" value="Small">
                        <label for="small">Small</label>
                    </div>
                    <div>
                        <input type="checkbox" id="medium" name="size" value="Medium">
                        <label for="medium">Medium</label>
                    </div>
                    <div>
                        <input type="checkbox" id="large" name="size" value="Large">
                        <label for="large">Large</label>
                    </div>

                    <h4>Care</h4>
                    <div>
                        <input type="checkbox" id="hassle-free" name="care" value="Hassle-Free">
                        <label for="hassle-free">Hassle-Free</label>
                    </div>
                    <div>
                        <input type="checkbox" id="intermediate" name="care" value="Intermediate">
                        <label for="intermediate">Intermediate</label>
                    </div>
                    <div>
                        <input type="checkbox" id="experienced" name="care" value="Experienced">
                        <label for="experienced">Experienced</label>
                    </div>

                    <h4>Type</h4>
                    <div>
                        <input type="checkbox" id="indoor" name="type" value="Indoor">
                        <label for="indoor">Indoor</label>
                    </div>
                    <div>
                        <input type="checkbox" id="outdoor" name="type" value="Outdoor">
                        <label for="outdoor">Outdoor</label>
                    </div>
                    <div>
                        <input type="checkbox" id="perennials" name="type" value="Perennials">
                        <label for="perennials">Perennials</label>
                    </div>

                    <h4>Price</h4>
                    <div>
                        <input type="checkbox" id="under-50" name="price" value="Under $50">
                        <label for="under-50">Under £50</label>
                    </div>
                    <div>
                        <input type="checkbox" id="50-100" name="price" value="$50-$100">
                        <label for="50-100">£50-£100</label>
                    </div>
                    <div>
                        <input type="checkbox" id="100-150" name="price" value="$100-$150">
                        <label for="100-150">£100-£150</label>
                    </div>

                    <h4>Light</h4>
                    <div>
                        <input type="checkbox" id="low-light" name="light" value="Low-Light">
                        <label for="low-light">Low-Light</label>
                    </div>
                </div>
            </div>


            <div class="col-md-9">
                <h1></h1>
                <div class="row">
                    @foreach($plants as $plant)
                    <div class="col-md-4">
                        <div class="card plant-card">
                            <img src="{{ asset($plant->image) }}" alt="{{ $plant->name }}" class="card-img-top">
                            <div class="card-body plant-info">
                                <h5 class="card-title">{{ $plant->name }}</h5>
                                <p class="card-text">{{ $plant->description }}</p>
                                <p>£{{ $plant->price }}</p>
                                <div class="plant-actions">
                                    <a href="{{ route('plants.show', $plant->slug) }}" class="btn btn-primary">View Details</a>
                                    <button class="btn btn-default"><i class="fa fa-heart"></i></button>
                                    <button class="btn btn-default"><i class="fa fa-shopping-cart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
@endsection