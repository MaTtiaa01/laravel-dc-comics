<header>
    <div class="header_top">
        <div class="container d-flex align-items-center justify-content-end">

            <div class="visa text-uppercase me-3">
                dc power visa
            </div>
            <div class="more_sites text-uppercase">
                addditional dc sites
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header_bottom d-flex align-items-center justify-content-between">
            <div class="logo">
                <img src=" {{ Vite::asset('resources/img/dc-logo.png')}} " alt="">
            </div>
            <nav class="nav justify-content-center aling-items-center">
                <a class="nav-link text-uppercase" href="{{route('home')}}">home</a>
                <a class="nav-link text-uppercase" href="#">comics</a>
                <a class="nav-link text-uppercase" href="#">movies</a>
                <a class="nav-link text-uppercase" href="#">tv</a>
                <a class="nav-link text-uppercase" href="#">games</a>
                <a class="nav-link text-uppercase" href="#">collectibles</a>
                <a class="nav-link text-uppercase" href="#">videos</a>
                <a class="nav-link text-uppercase" href="#">news</a>
                <a class="nav-link text-uppercase" href="#">shop</a>
                <a class="nav-link text-uppercase" href="{{route('comics.create')}}">admin</a>


            </nav>
            <div class="input_bar">
                <input type="search" name="search" id="search" placeholder="search">
            </div>
        </div>
    </div>
</header>