<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DashForge">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/dashforge">
    <meta property="og:title" content="DashForge">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.png">

    <title>DashForge Responsive Bootstrap 4 Dashboard Template</title>

    <!-- vendor css -->
    <link href="../../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="../../assets/css/dashforge.css">
    <link rel="stylesheet" href="../../assets/css/dashforge.profile.css">
</head>
<body class="page-profile">

@include('shared.navbar-2')
<div class="content content-fixed content-profile">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="media d-block d-lg-flex">
            <div class="profile-sidebar pd-lg-r-25">
                <div class="row">
                    <div class="col-sm-3 col-md-2 col-lg">
                        <div class="avatar avatar-xxl avatar-online"><img src="/uploads/{{$tradesmanprofile->picture}}" class="rounded-circle" alt=""></div>
                    </div><!-- col -->
                    <div class="col-sm-8 col-md-7 col-lg mg-t-20 mg-sm-t-0 mg-lg-t-25">
                        <h5 class="mg-b-2 tx-spacing--1">{{$tradesmanprofile->name}}</h5>
                        <div class="d-flex mg-b-25">
                            <button class="btn btn-xs btn-primary flex-fill mg-l-10">Not verified</button>
                        </div>


                        <p class="tx-13 tx-color-02 mg-b-25">{{$tradesmanprofile->about}} </p>

                        <div class="d-flex">
                            <div class="profile-skillset flex-fill">
                                <h6><a href="" class="link-01">10</a></h6>
                                <label>Work Completed</label>
                            </div>
                            <div class="profile-skillset flex-fill">
                                <h6><a href="" class="link-01">GHC 100</a></h6>
                                <label>Money Earned</label>
                            </div>
                            <div class="profile-skillset flex-fill">
                                <h6><a href="" class="link-01">2</a></h6>
                                <label>Uncompleted Work</label>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-sm-6 col-md-5 col-lg mg-t-40">
                        <label class="tx-sans tx-10 tx-semibold tx-uppercase tx-color-01 tx-spacing-1 mg-b-15">Trade</label>
                        <ul class="list-inline list-inline-skills">
                            <li class="list-inline-item"><a href="">{{$user->trade}}</a></li>


                        </ul>
                    </div><!-- col -->

                    <div class="col-sm-6 col-md-5 col-lg mg-t-40">
                        <label class="tx-sans tx-10 tx-semibold tx-uppercase tx-color-01 tx-spacing-1 mg-b-15">Contact Information</label>
                        <ul class="list-unstyled profile-info-list">
                            <li><i data-feather="briefcase"></i> <span class="tx-color-03">{{$tradesmanprofile->location}}</span></li>
                            <li><i data-feather="home"></i> <span class="tx-color-03">Westfield, Oakland, CA</span></li>

                            <li><i data-feather="phone"></i> <a href="">{{$tradesmanprofile->phone}}</a></li>
                            <li><i data-feather="mail"></i> <a href="">{{$tradesmanprofile->email}}</a></li>
                        </ul>
                    </div><!-- col -->

                </div><!-- row -->

            </div><!-- profile-sidebar -->
            <div class="media-body mg-t-40 mg-lg-t-0 pd-lg-x-10">

                <div class="card mg-b-20 mg-lg-b-25">
                    <div class="card-header pd-y-15 pd-x-20 d-flex align-items-center justify-content-between">
                        <h6 class="tx-uppercase tx-semibold mg-b-0">Latest Job</h6>

                    </div><!-- card-header -->
                    <div class="card-body pd-20 pd-lg-25">
                        <div class="media align-items-center mg-b-20">
                            <div class="avatar avatar-online"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                            <div class="media-body pd-l-15">
                                <h6 class="mg-b-3">Home owner name</h6>
                                <span class="d-block tx-13 tx-color-03">Peduase Lodge</span>
                            </div>

                        </div><!-- media -->
                        <p class="mg-b-20"> My front door need fixing by replacing the door lock.</p>
                    </div>

                </div><!-- card -->

                <div class="card mg-b-20 mg-lg-b-25">
                    <div class="card-header pd-y-15 pd-x-20 d-flex align-items-center justify-content-between">
                        <h6 class="tx-uppercase tx-semibold mg-b-0">Work Experience</h6>

                    </div><!-- card-header -->
                    <div class="card-body pd-25">
                        <div class="media d-block d-sm-flex">
                            <div class="wd-80 ht-80 bg-ui-04 rounded d-flex align-items-center justify-content-center">
                                <i data-feather="briefcase" class="tx-white-7 wd-40 ht-40"></i>
                            </div>
                            <div class="media-body pd-t-25 pd-sm-t-0 pd-sm-l-25">
                                <h5 class="mg-b-5">{{$tradesmanexperience->position}}</h5>
                                <p class="mg-b-3 tx-color-02"><span class="tx-medium tx-color-01">{{$tradesmanexperience->organisation_name}}</span>,
                                    {{$tradesmanexperience->organisation_location}}</p>
                                <span class="d-block tx-13 tx-color-03">{{$tradesmanexperience->start_period}} - {{$tradesmanexperience->end_period}}</span>

                                <ul class="pd-l-10 mg-0 mg-t-20 tx-13">
                                    <li>{{$tradesmanexperience->description}}</li>

                                </ul>
                            </div>
                        </div><!-- media -->
                    </div>
                    <div class="card-footer bg-transparent pd-y-15 pd-x-20">
{{--                        <nav class="nav nav-with-icon tx-13">--}}
{{--                            <a href="" class="nav-link">--}}
{{--                                Show More Experiences (4)--}}
{{--                                <i data-feather="chevron-down" class="mg-l-2 mg-r-0 mg-t-2"></i>--}}
{{--                            </a>--}}
{{--                        </nav>--}}
                    </div><!-- card-footer -->
                </div><!-- card -->

                <div class="card mg-b-20 mg-lg-b-25">
                    <div class="card-header pd-y-15 pd-x-20 d-flex align-items-center justify-content-between">
                        <h6 class="tx-uppercase tx-semibold mg-b-0">Education</h6>

                    </div><!-- card-header -->
                    <div class="card-body pd-25">
                        <div class="media">
                            <div class="wd-80 ht-80 bg-ui-04 rounded d-flex align-items-center justify-content-center">
                                <i data-feather="book-open" class="tx-white-7 wd-40 ht-40"></i>
                            </div>
                            <div class="media-body pd-l-25">
                                <h5 class="mg-b-5">{{$tradesmaneducation->title}}</h5>
                                <p class="mg-b-3"><span class="tx-medium tx-color-02">{{$tradesmaneducation->institution_name}}</span>,  Tagbilaran City, Bohol</p>
                                <span class="d-block tx-13 tx-color-03">({{$tradesmaneducation->start_period}})-({{$tradesmaneducation->end_period}})</span>
                            </div>
                        </div><!-- media -->
                    </div>
                    <div class="card-footer bg-transparent pd-y-15 pd-x-20">
{{--                        <nav class="nav nav-with-icon tx-13">--}}
{{--                            <a href="" class="nav-link">--}}
{{--                                Show More Education (2)--}}
{{--                                <i data-feather="chevron-down" class="mg-l-2 mg-r-0 mg-t-2"></i>--}}
{{--                            </a>--}}
{{--                        </nav>--}}
                    </div><!-- card-footer -->
                </div><!-- card -->



            </div><!-- media-body -->
            <div class="profile-sidebar mg-t-40 mg-lg-t-0 pd-lg-l-25">
                <div class="row">
                    <div class="col-sm-6 col-md-5 col-lg">
                        <div class="d-flex align-items-center justify-content-between mg-b-20">
                            <h6 class="tx-13 tx-spacng-1 tx-uppercase tx-semibold mg-b-0">Latest Jobs</h6>
                            <a href="" class="link-03">Watch All</a>
                        </div>
                        <ul class="list-unstyled media-list mg-b-15">
                            <li class="media align-items-center">
                                <a href=""><div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-dark">S</span></div></a>
                                <div class="media-body pd-l-15">
                                    <p class="tx-medium mg-b-0"><a href="" class="link-01">Socrates Itumay</a></p>
                                    <span class="tx-12 tx-color-03">2 hours ago</span>
                                </div>
                            </li>
                            <li class="media align-items-center">
                                <a href=""><div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-primary">I</span></div></a>
                                <div class="media-body pd-l-15">
                                    <p class="tx-medium mg-b-0"><a href="" class="link-01">Isidore Dilao</a></p>
                                    <span class="tx-12 tx-color-03">5 hours ago</span>
                                </div>
                            </li>
                            <li class="media align-items-center">
                                <a href=""><div class="avatar avatar-offline"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div></a>
                                <div class="media-body pd-l-15">
                                    <p class="tx-medium mg-b-0"><a href="" class="link-01">Angeline Mercado</a></p>
                                    <span class="tx-12 tx-color-03">1 day ago</span>
                                </div>
                            </li>
                            <li class="media align-items-center">
                                <a href=""><div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-info">K</span></div></a>
                                <div class="media-body pd-l-15">
                                    <p class="tx-medium mg-b-0"><a href="" class="link-01">Kirby Avendula</a></p>
                                    <span class="tx-12 tx-color-03">2 days ago</span>
                                </div>
                            </li>
                            <li class="media align-items-center">
                                <a href=""><div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-dark">S</span></div></a>
                                <div class="media-body pd-l-15">
                                    <p class="tx-medium mg-b-0"><a href="" class="link-01">Socrates Itumay</a></p>
                                    <span class="tx-12 tx-color-03">2 hours ago</span>
                                </div>
                            </li> <li class="media align-items-center">
                                <a href=""><div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-dark">S</span></div></a>
                                <div class="media-body pd-l-15">
                                    <p class="tx-medium mg-b-0"><a href="" class="link-01">Socrates Itumay</a></p>
                                    <span class="tx-12 tx-color-03">2 hours ago</span>
                                </div>
                            </li> <li class="media align-items-center">
                                <a href=""><div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-dark">S</span></div></a>
                                <div class="media-body pd-l-15">
                                    <p class="tx-medium mg-b-0"><a href="" class="link-01">Socrates Itumay</a></p>
                                    <span class="tx-12 tx-color-03">2 hours ago</span>
                                </div>
                            </li> <li class="media align-items-center">
                                <a href=""><div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-dark">S</span></div></a>
                                <div class="media-body pd-l-15">
                                    <p class="tx-medium mg-b-0"><a href="" class="link-01">Socrates Itumay</a></p>
                                    <span class="tx-12 tx-color-03">2 hours ago</span>
                                </div>
                            </li> <li class="media align-items-center">
                                <a href=""><div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-dark">S</span></div></a>
                                <div class="media-body pd-l-15">
                                    <p class="tx-medium mg-b-0"><a href="" class="link-01">Socrates Itumay</a></p>
                                    <span class="tx-12 tx-color-03">2 hours ago</span>
                                </div>
                            </li> <li class="media align-items-center">
                                <a href=""><div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-dark">S</span></div></a>
                                <div class="media-body pd-l-15">
                                    <p class="tx-medium mg-b-0"><a href="" class="link-01">Socrates Itumay</a></p>
                                    <span class="tx-12 tx-color-03">2 hours ago</span>
                                </div>
                            </li> <li class="media align-items-center">
                                <a href=""><div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-dark">S</span></div></a>
                                <div class="media-body pd-l-15">
                                    <p class="tx-medium mg-b-0"><a href="" class="link-01">Socrates Itumay</a></p>
                                    <span class="tx-12 tx-color-03">2 hours ago</span>
                                </div>
                            </li>
                        </ul>
                        <a href="" class="link-03 d-inline-flex align-items-center">See more stories <i class="icon ion-ios-arrow-down mg-l-5 mg-t-3 tx-12"></i></a>
                    </div><!-- col -->


                </div><!-- row -->
            </div><!-- profile-sidebar -->
        </div><!-- media -->
    </div><!-- container -->
</div><!-- content -->

@include('shared.footer-1')

<script src="../../lib/jquery/jquery.min.js"></script>
<script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../lib/feather-icons/feather.min.js"></script>
<script src="../../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<script src="../../assets/js/dashforge.js"></script>

<!-- append theme customizer -->
<script src="../../lib/js-cookie/js.cookie.js"></script>
<script src="../../assets/js/dashforge.settings.js"></script>

<script>
    $(function(){
        'use script'

        $('[data-toggle="tooltip"]').tooltip()

        window.darkMode = function(){
            $('.btn-white').addClass('btn-dark').removeClass('btn-white');
            $('.bg-white').addClass('bg-gray-900').removeClass('bg-white');
            $('.bg-gray-50').addClass('bg-dark').removeClass('bg-gray-50');
        }

        window.lightMode = function() {
            $('.btn-dark').addClass('btn-white').removeClass('btn-dark');
            $('.bg-gray-900').addClass('bg-white').removeClass('bg-gray-900');
            $('.bg-dark').addClass('bg-gray-50').removeClass('bg-dark');
        }

        var hasMode = Cookies.get('df-mode');
        if(hasMode === 'dark') {
            darkMode();
        } else {
            lightMode();
        }
    })
</script>
</body>
</html>
