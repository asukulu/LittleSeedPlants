<!-- resources/views/layouts/navbar.blade.php -->
<header class="navbar">
    <div class="logo">
        <a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt="LittleSeed Plants" style="height: 40px;"></a>
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
</header>
