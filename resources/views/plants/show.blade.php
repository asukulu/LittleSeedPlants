@extends('layouts.app')

@section('content')

<style>
/* Plant show page styles */
body {
    background-color: #fff6f1;
    font-family: 'Arial', sans-serif;
}

.container {
    max-width: 1000px;
    margin: 0 auto;
    padding: 20px;
}

/* Navigation styles */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;


    padding: 20px 40px;
    background-color: #f9f5f2;
    
}

.navbar {

    background-color: #fff6f1;

  border-bottom: 1px solid #e67e22;
}
.nav-link {
    color: #e67e22;
    font-weight: bold;
    margin: 0 15px;
}

/* Plant display styles */
.plant-display {
    display: flex;
    margin-top: 10px;
}

.image-gallery {
    height: auto;;
 

    display: flex;
    flex-direction: column;
}

.thumbnail {
    width: 140%;
    height: 150px;
    object-fit: cover;
    margin-bottom: 10px;
    cursor: pointer;
    margin-right: -10px;
    margin-left: -20px;
}

.main-image {
    width: 40%;
    padding: 0 20px;
}

.main-image img {
    width: 100%;
    height: auto;
}

.plant-info {
    width: 30%;
    padding-left: 20px;
}

.plant-name {
    color: #e67e22;
    font-size: 24px;
    margin-bottom: 20px;
}

.rating {
    margin-bottom: 20px;
}

.rating span {
    display: inline-block;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background-color: #ccc;
    margin-right: 5px;
}

.rating span.filled {
    background-color: #e67e22;
}

.size-options {
    display: flex;
    margin-bottom: 20px;
}

.size-option {
    border: 1px solid #e67e22;
    padding: 5px 10px;
    margin-right: 10px;
    color: #e67e22;
    cursor: pointer;
}

.buy-button {
    background-color: #e67e22;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    margin-bottom: 20px;
}

.price {
    font-size: 24px;
    color: #e67e22;
    margin-bottom: 20px;
}

.description {
    color: #666;
    line-height: 1.6;
}

.care-info {
    display: flex;
    flex-direction: column;
    margin-top: 20px;
}

.care-item {
    display: flex;
    align-items: center;
    background-color: #e67e22;
    color: white;
    padding: 10px;
    margin-bottom: 10px;
}

.care-item i {
    margin-right: 10px;
}
    </style>
<div class="container">
    <div class="plant-display">
        <div class="image-gallery">
            <img src="{{ asset($plant->image) }}" alt="{{ $plant->name }}" class="thumbnail">
            <img src="{{ asset($plant->image) }}" alt="{{ $plant->name }}" class="thumbnail">
            <img src="{{ asset($plant->image) }}" alt="{{ $plant->name }}" class="thumbnail">
        </div>
        <div class="main-image">
            <img src="{{ asset($plant->image) }}" alt="{{ $plant->name }}">
        </div>
        <div class="plant-info">
            <h1 class="plant-name">{{ $plant->name }}</h1>
            <div class="rating">
                <span class="filled"></span>
                <span class="filled"></span>
                <span class="filled"></span>
                <span></span>
            </div>
            <div class="size-options">
                <span class="size-option">4"</span>
                <span class="size-option">6"</span>
                <span class="size-option">12"</span>
            </div>
            <a href="{{ route('add.to.cart', $plant->id) }}" button class="buy-button">BUY</button></a>
            <p class="price">£{{ $plant->price }}</p>
            <p class="description">{{ $plant->description }}</p>
            <div class="care-info">
                <div class="care-item">
                    <i class="fas fa-thermometer-half"></i> MID
                </div>
                <div class="care-item">
                    <i class="fas fa-sun"></i> FULL
                </div>
                <div class="care-item">
                    <i class="fas fa-tint"></i> LOW
                </div>
            </div>
        </div>
    </div>
</div>
@endsection