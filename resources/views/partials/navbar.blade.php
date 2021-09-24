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
            <a class="navbar-brand smoothie" href="">{{$data1[0]->titre1}} <span class="theme-accent-color">{{$data1[0]->titre2}} </span></a>
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
                <li><a href="#about" class="page-scroll">{{$data1[0]->btn1}} </a></li>
                <li><a href="#about" class="page-scroll">{{$data1[0]->btn2}} </a></li>
                <li><a href="#the-menu" class="page-scroll">{{$data1[0]->btn3}} </a></li>
                <li><a href="#about" class="page-scroll">{{$data1[0]->btn4}} </a></li>
                @if (Route::has('login'))
                        @auth
                            <li><a href="{{ url('/dashboard') }}"
                                class="page-scroll">Dashboard</a></li>
                        @else
                        <li> <a href="{{ route('login') }}" class="page-scroll">{{$data1[0]->btn5}} </a></li>

                            @if (Route::has('register'))
                            <li><a href="{{ route('register') }}"
                                    class="ml-4 page-scroll">{{$data1[0]->btn6}} </a></li>
                            @endif
                        @endauth
                @endif
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
