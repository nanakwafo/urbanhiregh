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
        <ul class="nav navbar-menu">

            <li class="nav-item with-sub">
                <a href="" class="nav-link"><i data-feather="package"></i> Jobs</a>
                <ul class="navbar-menu-sub">
                    <li class="nav-sub-item"><a href="completed-jobsl" class="nav-sub-link"><i data-feather="calendar"></i>Completed</a></li>
                    <li class="nav-sub-item"><a href="available-jobs" class="nav-sub-link"><i data-feather="message-square"></i>Available</a></li>

                </ul>
            </li>

            <li class="nav-item"><a href="tradesman-payment" class="nav-link"><i data-feather="box"></i> Payments</a></li>
        </ul>
    </div><!-- navbar-menu-wrapper -->
    <div class="navbar-right">

        <div class="dropdown dropdown-notification">
            <a href="" class="dropdown-link new-indicator" data-toggle="dropdown">
                <i data-feather="bell"></i>
                <span>2</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header">Notifications</div>
                <a href="" class="dropdown-item">
                    <div class="media">
                        <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/350" class="rounded-circle" alt=""></div>
                        <div class="media-body mg-l-15">
                            <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                            <span>Mar 15 12:32pm</span>
                        </div><!-- media-body -->
                    </div><!-- media -->
                </a>
                <a href="" class="dropdown-item">
                    <div class="media">
                        <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                        <div class="media-body mg-l-15">
                            <p><strong>Joyce Chua</strong> just created a new blog post</p>
                            <span>Mar 13 04:16am</span>
                        </div><!-- media-body -->
                    </div><!-- media -->
                </a>
                <a href="" class="dropdown-item">
                    <div class="media">
                        <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/600" class="rounded-circle" alt=""></div>
                        <div class="media-body mg-l-15">
                            <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                            <span>Mar 13 02:56am</span>
                        </div><!-- media-body -->
                    </div><!-- media -->
                </a>
                <a href="" class="dropdown-item">
                    <div class="media">
                        <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                        <div class="media-body mg-l-15">
                            <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                            <span>Mar 12 10:40pm</span>
                        </div><!-- media-body -->
                    </div><!-- media -->
                </a>
                <div class="dropdown-footer"><a href="">View all Notifications</a></div>
            </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
        <div class="dropdown dropdown-profile">
            <a href="" class="dropdown-link" data-toggle="dropdown" data-display="static">
                <div class="avatar avatar-sm"><img src="/uploads/{{$tradesmanprofile->picture}}" class="rounded-circle" alt=""></div>
            </a><!-- dropdown-link -->
            <div class="dropdown-menu dropdown-menu-right tx-13">
                <div class="avatar avatar-lg mg-b-15"><img src="/uploads/{{$tradesmanprofile->picture}}" class="rounded-circle" alt=""></div>
                <h6 class="tx-semibold mg-b-5">{{$tradesmanprofile->name}}</h6>
                <p class="mg-b-25 tx-12 tx-color-03">Administrator</p>

                <a href="/update-tradesmanprofile/{{$tradesmanprofile->user_id}}" class="dropdown-item"><i data-feather="edit-3"></i> Edit Profile</a>
                <a href="/tradesmanprofile/{{$tradesmanprofile->user_id}}" class="dropdown-item"><i data-feather="user"></i> View Profile</a>
                <div class="dropdown-divider"></div>
                <a href="page-help-center.html" class="dropdown-item"><i data-feather="help-circle"></i> Help Center</a>

                <a href="" class="dropdown-item"><i data-feather="settings"></i>Account Settings</a>
                <a href="" class="dropdown-item"><i data-feather="settings"></i>Privacy Settings</a>

                <form action="/logout" method="post" id="logout-form1" style="margin-top: 10px">
                    {{csrf_field()}}
                    <a href="#" onclick="document.getElementById('logout-form1').submit()" class="dropdown-item"><i data-feather="log-out"></i>Sign Out</a>

                </form>

            </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
    </div><!-- navbar-right -->

</header><!-- navbar -->
