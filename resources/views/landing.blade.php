<!-- resources/views/landing.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{ asset('img/2 (1).jpg') }}" alt="Image 1">
                    <div class="carousel-caption">
                        <h3>Image 1</h3>
                        <p>Description for Image 1</p>
                    </div>
                </div>

                <div class="item">
                    <img src="{{ asset('img/2 (2).jpg') }}" alt="Image 2">
                    <div class="carousel-caption">
                        <h3>Image 2</h3>
                        <p>Description for Image 2</p>
                    </div>
                </div>

                <div class="item">
                    <img src="{{ asset('img/2 (3).jpg') }}" alt="Image 3">
                    <div class="carousel-caption">
                        <h3>Image 3</h3>
                        <p>Description for Image 3</p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <section class="shop-plants">
        <h2>SHOP PLANTS</h2>
        <div class="categories">
            <div class="category">
                <h3>SIZE</h3>
                <p>Small</p>
            </div>
            <div class="category">
                <h3>TYPE</h3>
                <p>Indoor</p>
            </div>
            <div class="category">
                <h3>PRICE</h3>
                <p>Under $25</p>
            </div>
            <div class="category">
                <h3>EXPERTISE</h3>
                <p>Beginner</p>
            </div>
        </div>
    </section>
@endsection
