<!-- resources/views/layouts/navbar.blade.php -->
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
<header class="navbar">
        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/logo.png') }}" alt="LittleSeed Plants">
                LittleSeed Plants
            </a>
        </div>
        <nav class="nav-links">
            <a href="{{ route('plants.index') }}">PLANTS</a>
            <a href="#">CARE</a>
            <a href="#">GIFTING</a>
            <a href="#">COMMUNITY</a>
        </nav>
        <div class="nav-icons">
            <a href="#" title="Search"><i class="fas fa-search"></i></a>
            <a href="#" title="Favorites"><i class="fas fa-heart"></i></a>
            <a href="#" title="Shopping Cart"><i class="fas fa-shopping-cart"></i></a>
            <a href="#" title="User Account"><i class="fas fa-user"></i></a>
        </div>
    </header>

    <!-- Rest of your content goes here -->
</body>
</html>