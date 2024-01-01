<header class="navbar navbar-header navbar-header-fixed">
    <a href="" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
    <div class="navbar-brand">
        <a href="/" class="df-logo">Urban<span>hire</span></a>
    </div><!-- navbar-brand -->
    <div id="navbarMenu" class="navbar-menu-wrapper">
        <div class="navbar-menu-header">
            <a href="/" class="df-logo">Urban<span>hire</span></a>
            <a id="mainMenuClose" href=""><i data-feather="x"></i></a>
        </div><!-- navbar-menu-header -->

    </div><!-- navbar-menu-wrapper -->
    <div class="navbar-right">

        <div class="dropdown dropdown-self">
            <a href="" class="dropdown-link" data-toggle="dropdown" data-display="static">
                <div class="avatar avatar-sm"><img src="/uploads/" class="rounded-circle" alt=""></div>
            </a><!-- dropdown-link -->
            <div class="dropdown-menu dropdown-menu-right tx-13">


                <div class="dropdown-divider"></div>
                <form action="/logout" method="post" id="logout-form1" style="margin-top: 10px">
                    {{csrf_field()}}
                    <a href="#" onclick="document.getElementById('logout-form1').submit()" class="dropdown-item"><i data-feather="log-out"></i>Sign Out</a>

                </form>

            </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
    </div><!-- navbar-right -->

</header><!-- navbar -->
