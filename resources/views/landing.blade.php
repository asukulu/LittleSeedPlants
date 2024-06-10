<!-- resources/views/landing.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LittleSeed Plants</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: 'Arial, sans-serif';
        }
        .hero {
            text-align: center;
            padding: 50px 0;
            background-color: #f8f8f8;
        }
        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .hero img {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
        }
        .shop-plants {
            text-align: center;
            padding: 50px 0;
            background-color: #e0e0e0;
        }
        .shop-plants h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }
        .shop-plants .categories {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .shop-plants .category {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .shop-plants .category h3 {
            margin-bottom: 10px;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .navbar a {
            color: #333;
            text-decoration: none;
            margin: 0 10px;
        }
        .carousel-inner img {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <header class="navbar">
        <div class="logo">
            <a href="#"><img src="{{ asset('img/logo.png') }}" alt="LittleSeed Plants" style="height: 40px;"></a>
        </div>
        <nav>
            <a href="#">PLANTS</a>
            <a href="#">CARE</a>
            <a href="#">GIFTING</a>
            <a href="#">COMMUNITY</a>
        </nav>
        <div class="actions">
            <a href="#"><i class="fa fa-search"></i></a>
            <a href="#"><i class="fa fa-heart"></i></a>
            <a href="#"><i class="fa fa-shopping-cart"></i></a>
            <a href="#"><i class="fa fa-user"></i></a>
        </div>
    </header>
    <div class="hero">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/hero1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/hero2.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/hero3.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
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
</body>
</html>
