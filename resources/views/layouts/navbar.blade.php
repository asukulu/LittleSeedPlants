<!-- resources/views/layouts/navbar.blade.php -->
 <style>

    </style>
<header class="navbar">
    <div class="logo">
        <a href="{{ route('landing') }}"><img src="{{ asset('img/logo.png') }}" alt="LittleSeed Plants" style="height: 40px;"></a>
        <div class="logo">LittleSeed Plants</div>
    </div>
    <nav>
        <a href="{{ route('plants.index') }}">PLANTS</a>
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
    <div class="icons">
        <a href="#"><img src="{{ asset('img/search-icon.png') }}" alt="Search"></a>
        <a href="#"><img src="{{ asset('img/heart-icon.png') }}" alt="Wishlist"></a>
        <a href="#"><img src="{{ asset('img/cart-icon.png') }}" alt="Cart"></a>
        <a href="#"><img src="{{ asset('img/profile-icon.png') }}" alt="Profile"></a>
    </div>
</header>
