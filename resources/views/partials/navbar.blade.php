<div class="preloader">
    <div class="preloader-img">
        <span class="loading-animation animate-flicker"><img src="img/loading.GIF" alt="loading" /></span>
    </div>
</div>
<!-- Navigation -->

<!--1-->

<nav class="navbar navbar-default navbar-fixed-top fadeInDown" data-wow-delay="0.2s">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand smoothie" href="">THE <span class="theme-accent-color">GRILL</span></a>
        </div>
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}"
                    class="page-scroll">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="page-scroll">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 page-scroll">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about" class="page-scroll">About Us</a></li>
                <li><a href="#about" class="page-scroll">Specials</a></li>
                <li><a href="#the-menu" class="page-scroll">Our Menu</a></li>
                <li><a href="#about" class="page-scroll">Book a Table</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><i class="fa fa-power-off"></i><span class="pe-7s-angle-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        @if (Route::has('login'))
                                @auth
                                    <li><a href="{{ url('/dashboard') }}"
                                        class="page-scroll">Dashboard</a></li>
                                @else
                                <li> <a href="{{ route('login') }}" class="page-scroll">Log in</a></li>

                                    @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}"
                                            class="ml-4 page-scroll">Register</a></li>
                                    @endif
                                @endauth
                        @endif
                    </ul>
                </li>
                <li><a href="#search"><i class="fa fa-search"></i></a></li>
            </ul>
                
            </ul>

        </div>
        <!-- /.navbar-collapse -->

    </div>
    <!-- /.container-fluid -->
</nav>
<div id="search-wrapper">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="Enter Search Term" />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
