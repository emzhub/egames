@yield('caro')
<div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
        <li data-target="#carousel-example-2" data-slide-to="3"></li>
        <li data-target="#carousel-example-2" data-slide-to="4"></li>
        <li data-target="#carousel-example-2" data-slide-to="5"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view">
                <img class="d-block w-100" src="{{URL::asset('img/ronaldo1.jpg') }}" alt="First slide">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">WELCOME TO ESURF GAMES</h3>
                <p>Where gamers live</p>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block w-100" src="{{URL::asset('img/nbanew.jpg') }}" alt="Second slide">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">WELCOME TO ESURF GAMES</h3>
                <p>Where gamers live</p>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block w-100" src="{{URL::asset('img/candn.jpg') }}" alt="Second slide">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">WELCOME TO ESURF GAMES</h3>
                <p>Where gamers live</p>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block w-100" src="{{URL::asset('img/psvita.jpg') }}" alt="Third slide">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">WELCOME TO ESURF GAMES</h3>
                <p>Where gamers live</p>
            </div>
        </div>
           <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block w-100" src="{{URL::asset('img/nnnnn.jpg') }}" alt="Third slide">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">WELCOME TO ESURF GAMES</h3>
                <p>Where gamers live</p>
            </div>
        </div>
           <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block w-100" src="{{URL::asset('img/pogba.jpg') }}" alt="Third slide">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">WELCOME TO ESURF GAMES</h3>
                <p>Where gamers live</p>
            </div>
        </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
