<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LittleSeed Plants</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
@include('layouts.navbar')
<div class="search-container">
    <form action="#" method="get" class="search-form">
        <input type="text" placeholder="Search..." name="search">
        <button type="button" class="sort-btn">SORT BY</button>
        <button type="button" class="filter-btn">FILTER BY</button>
    </form>
</div>
<main>
<div class="carousel">
    <div class="carousel-content">
        <div class="text-content">
            <h2>Unleash Your<br>Inner Gardener:<br>Embrace<br>Easy-Care Plants<br>For Every Space</h2>
        </div>
        <div class="image-container">
          
            <img src="{{ asset('img/gardener.jpg') }}" alt="Woman watering plants" width="19%" height="200">
        </div>
        <button class="btn-learn-more">LEARN MORE</button>
    </div>
    <button class="carousel-prev">&lt;</button>
    <button class="carousel-next">&gt;</button>
    <div class="carousel-indicators">
        <span class="indicator active"></span>
        <span class="indicator"></span>
        <span class="indicator"></span>
    </div>
</div>




        <div class="marquee">
            <p>Discover the joys of bringing nature home: explore the best plants online for your haven.</p>
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
    </main>

    <script src="{{ asset('js/carousel.js') }}"></script>
</body>
</html>
