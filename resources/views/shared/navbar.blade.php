<header class="navbar navbar-header navbar-header-fixed bd-b-0">
    <a href="" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
    <div class="navbar-brand">
        <a href="/" class="df-logo">Urban<span>hire</span></a>
    </div><!-- navbar-brand -->
    <div id="navbarMenu" class="navbar-menu-wrapper">
        <div class="navbar-menu-header">
            <a href="/" class="df-logo">Urban<span>hire</span></a>
            <a id="mainMenuClose" href=""><i data-feather="x"></i></a>
        </div><!-- navbar-menu-header -->
        <ul class="nav navbar-menu">
            <li class="nav-label pd-l-15 pd-lg-l-25 d-lg-none">Main Navigation</li>
            <li class="nav-item">
                <a href="/how-it-works" class="nav-link"><i data-feather="pie-chart"></i> How it Works</a>
            </li>
            <li class="nav-item ">
                <a href="/register" class="nav-link"><i data-feather="package"></i>Join Us</a>
            </li>
            <li class="nav-item ">

                <a href=" {{ url('equipment-tools') }}" class="nav-link"><i data-feather="tool"></i>Rent An Equipment For Work</a>
            </li>
            <li class="nav-item ">
                <a href="{{ url('viewtradesmen') }}" class="nav-link"><i data-feather="search"></i>Find A Tradesman</a>

            </li>
            <li class="nav-item ">
                <a href="{{ url('login') }}" class="nav-link"><i data-feather="log-in"></i>Log In </a>

            </li>
{{--            <li class="nav-item ">--}}
{{--                <a href="/review" class="nav-link"><i data-feather="package"></i>Leave a Review</a>--}}

{{--            </li>--}}

        </ul>
    </div><!-- navbar-menu-wrapper -->

    <div class="navbar-right">

        <a href="#" class="btn btn-buy"><i data-feather="phone-call"></i> <span>Call Now on 0598296977</span></a>
    </div><!-- navbar-right -->
</header><!-- navbar -->
