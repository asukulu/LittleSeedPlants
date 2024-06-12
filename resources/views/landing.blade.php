<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LittleSeed Plants</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app2.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<style>
/* public/css/app.css */
body {
    font-family: 'Arial, sans-serif';
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Hero Section */
.hero-section {
    position: relative;
    width: 100%;
    height: 400px;
    background-image: url('hero-image.jpg');
    background-size: cover;
    background-position: center;
}
.hero {
    text-align: center;
    padding: 50px 0;
    background-color: #f8f8f8;
    position: relative;
    width: 100%;
    height: 400px;
}
.hero h1 {
    font-size: 2rem;
    margin-bottom: 10px;
}

.logo-container {
    text-align: center;
    margin-top: 20px;
}

.logo-container img {
    max-width: 200px;
    height: auto;
}

.logo-container .logo-text {
    font-size: 24px; /* Adjust the font size as needed */
    color: #333; /* Adjust the text color as needed */
    margin-top: 10px;
}

/* Carousel styling */
#myCarousel {
    width: 50%; /* Adjust this value to reduce the width */
    margin: 0 auto; /* Center the carousel */
}

.carousel-content {
    display: flex;
    align-items: center;
    justify-content: center;
}

.carousel-content img {
    width: 30%; /* Adjust this value as needed */
    height: auto;
}

.carousel-caption {
    width: 50%; /* Adjust this value as needed */
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Optional: Add some shadow for depth */
}

.carousel-caption h3 {
    font-size: 24px;
    margin-bottom: 10px;
}

.carousel-caption p {
    font-size: 16px;
}

/* Shop Plants Section */
.shop-plants {
    text-align: center;
    padding: 50px 0;
    background-color: #e0e0e0;
}

.shop-plants h2 {
    font-size: 2rem;
    margin-bottom: 25px;
    font-size: 46px;
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

/* Navbar Styles */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #f5f5f5;
    padding: 20px;
    font-size: 24px;
    font-weight: bold;
}

.navbar a {
    color: #333;
    text-decoration: none;
    margin: 0 10px;
}

.navbar .logo {
    font-size: 24px;
    font-weight: bold;
}

.navbar nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

.navbar nav ul li a {
    text-decoration: none;
    color: #333;
}

.navbar .icons a {
    margin-left: 15px;
}

.filters {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.filters button {
    padding: 10px 20px;
    border: none;
    background-color: #6b8e23;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

/* Footer Styles */
footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px;
}

.actions a {
    color: #333;
    margin: 0 5px;
}

@media (max-width: 768px) {
    .navbar nav ul {
        flex-direction: column;
    }

    .hero-section {
        height: 300px;
    }

    .filters {
        flex-direction: column;
        gap: 10px;
    }
}
</style>



<body>
    @include('layouts.navbar')
    <div class="hero">
        @yield('content')
    </div>

    <div class="hero">
        @include('components.carousel')
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
    <div class="hero">
        @yield('content')
    </div>
    



    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
