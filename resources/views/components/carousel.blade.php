<!-- resources/views/components/carousel.blade.php -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="carousel-content">
                <img src="{{ asset('img/2 (4).jpg') }}" alt="Image 1" class="small-image">
                <div class="carousel-caption">
                    <h3>Chania</h3>
                    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="carousel-content">
                <img src="{{ asset('img/2 (9).jpg') }}" alt="Image 2" class="small-image">
                <div class="carousel-caption">
                    <h3>Image 2</h3>
                    <p>Description for Image 2.</p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="carousel-content">
                <img src="{{ asset('img/2 (13).jpg') }}" alt="Image 3" class="small-image">
                <div class="carousel-caption">
                    <h3>Image 3</h3>
                    <p>Description for Image 3.</p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="carousel-content">
                <img src="{{ asset('img/2 (18).jpg') }}" alt="Image 4" class="small-image">
                <div class="carousel-caption">
                    <h3>Image 4</h3>
                    <p>Description for Image 4.</p>
                </div>
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
