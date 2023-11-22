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

@include('shared.titlebar')

<!-- vendor css -->
    <link href="../../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="../lib/prismjs/themes/prism-vs.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">
    <!-- DashForge CSS -->
    <link rel="stylesheet" href="../../assets/css/dashforge.css">
    <link rel="stylesheet" href="../../assets/css/dashforge.auth.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>

@include('shared.navbar')
<div class="content content-fixed content-auth">
    <div class="container">
        <div class="tradesmen-search">
            <form method="post" action="/viewtradesmen" class="tradesmen-search-form">
                {{ csrf_field() }}
                <div class="tradesmen-search-divider">
                    <input class="tradesmen-search-trade" placeholder="Enter a trade" />
                </div>
                <div class="tradesmen-search-divider">
                    <input class="tradesmen-search-location" placeholder="Location" />
                </div>
                <div class="tradesmen-search-divider">
                    <button class="btn btn-brand-02 btn-block tradesmen-search-button"  type="submit" >Search</button>
                </div>
            </form>
        </div>
    </div><!-- container -->
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="row">
            <div class="col-lg-12">


                <div class="row row-xs mg-b-25">
                    <div class="col-sm-4 col-md-3 col-lg-4 col-xl-3">
                        <div class="card card-profile">
                            <img src="https://via.placeholder.com/500" class="card-img-top" alt="">
                            <div class="card-body tx-13">
                                <div>
                                    <a href="">
                                        <div class="avatar avatar-lg"><img src="https://via.placeholder.com/350" class="rounded-circle" alt=""></div>
                                    </a>
                                    <h5><a href="">Zhen Juan Chiu</a></h5>
                                    <p>Software Engineer</p>
                                    <button class="btn btn-block btn-white">Call</button>
                                </div>
                            </div>
                        </div><!-- card -->
                    </div><!-- col -->
                    <div class="col-sm-4 col-md-3 col-lg-4 col-xl-3 mg-t-10 mg-sm-t-0">
                        <div class="card card-profile">
                            <img src="https://via.placeholder.com/500x281" class="card-img-top" alt="">
                            <div class="card-body tx-13">
                                <div>
                                    <a href="">
                                        <div class="avatar avatar-lg"><img src="https://via.placeholder.com/600" class="rounded-circle" alt=""></div>
                                    </a>
                                    <h5><a href="">Barbara Marion</a></h5>
                                    <p>Tech Executive</p>
                                    <button class="btn btn-block btn-white">Call</button>
                                </div>
                            </div>
                        </div><!-- card -->
                    </div><!-- col -->
                    <div class="col-sm-4 col-md-3 col-lg-4 col-xl-3 mg-t-10 mg-sm-t-0">
                        <div class="card card-profile">
                            <img src="https://via.placeholder.com/500" class="card-img-top" alt="">
                            <div class="card-body tx-13">
                                <div>
                                    <a href="">
                                        <div class="avatar avatar-lg"><span class="avatar-initial rounded-circle bg-teal">c</span></div>
                                    </a>
                                    <h5><a href="">Christine Arnold</a></h5>
                                    <p>Lead Creative Design</p>
                                    <button class="btn btn-block btn-primary">Call</button>
                                </div>
                            </div>
                        </div><!-- card -->
                    </div><!-- col -->
                    <div class="col-sm-4 col-md-3 col-lg-4 col-xl-3 mg-t-10 mg-md-t-0 mg-lg-t-10 mg-xl-t-0">
                        <div class="card card-profile">
                            <img src="https://via.placeholder.com/1000x666" class="card-img-top" alt="">
                            <div class="card-body tx-13">
                                <div>
                                    <a href="">
                                        <div class="avatar avatar-lg"><span class="avatar-initial rounded-circle bg-pink">n</span></div>
                                    </a>
                                    <h5><a href="">Natalie Corwin</a></h5>
                                    <p>Product Designer</p>
                                    <button class="btn btn-block btn-white">Call</button>
                                </div>
                            </div>
                        </div><!-- card -->
                    </div><!-- col -->
                    <div class="col-sm-4 col-md-3 col-lg-4 col-xl-3 mg-t-10">
                        <div class="card card-profile">
                            <img src="https://via.placeholder.com/1000x666" class="card-img-top" alt="">
                            <div class="card-body tx-13">
                                <div>
                                    <a href="">
                                        <div class="avatar avatar-lg"><span class="avatar-initial rounded-circle bg-gray-300">c</span></div>
                                    </a>
                                    <h5><a href="">Carolyn Park</a></h5>
                                    <p>Lead Creative Design</p>
                                    <button class="btn btn-block btn-white">Call</button>
                                </div>
                            </div>
                        </div><!-- card -->
                    </div><!-- col -->
                    <div class="col-sm-4 col-md-3 col-lg-4 col-xl-3 mg-t-10">
                        <div class="card card-profile">
                            <img src="https://via.placeholder.com/640x427" class="card-img-top" alt="">
                            <div class="card-body tx-13">
                                <div>
                                    <a href="">
                                        <div class="avatar avatar-lg"><span class="avatar-initial rounded-circle bg-gray-900">d</span></div>
                                    </a>
                                    <h5><a href="">Debbie Hite</a></h5>
                                    <p>Lead Animator</p>
                                    <button class="btn btn-block btn-primary">Call</button>
                                </div>
                            </div><!-- card-body -->
                        </div><!-- card -->
                    </div><!-- col -->
                    <div class="col-sm-4 col-md-3 col-lg-4 col-xl-3 mg-t-10">
                        <div class="card card-profile">
                            <img src="https://via.placeholder.com/640x360" class="card-img-top" alt="">
                            <div class="card-body tx-13">
                                <div>
                                    <a href="">
                                        <div class="avatar avatar-lg"><span class="avatar-initial rounded-circle bg-success">s</span></div>
                                    </a>
                                    <h5><a href="">Sandra Valles</a></h5>
                                    <p>Software Architect</p>
                                    <button class="btn btn-block btn-white">Call</button>
                                </div>
                            </div><!-- card-body -->
                        </div><!-- card -->
                    </div><!-- col -->
                    <div class="col-sm-4 col-md-3 col-lg-4 col-xl-3 mg-t-10">
                        <div class="card card-profile">
                            <img src="https://via.placeholder.com/640x426" class="card-img-top" alt="">
                            <div class="card-body tx-13">
                                <div>
                                    <a href="">
                                        <div class="avatar avatar-lg"><span class="avatar-initial rounded-circle bg-indigo">s</span></div>
                                    </a>
                                    <h5><a href="">Patrick Miramontes</a></h5>
                                    <p>Software Engineer</p>
                                    <button class="btn btn-block btn-white">Call</button>
                                </div>
                            </div><!-- card-body -->
                        </div><!-- card -->
                    </div><!-- col -->
                    <div class="col-sm-4 col-md-3 col-lg-4 col-xl-3 mg-t-10">
                        <div class="card card-profile">
                            <img src="https://via.placeholder.com/640x360" class="card-img-top" alt="">
                            <div class="card-body tx-13">
                                <div>
                                    <a href="">
                                        <div class="avatar avatar-lg"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                                    </a>
                                    <h5><a href="">Amalia Redfern</a></h5>
                                    <p>Front-end Engineer</p>
                                    <button class="btn btn-block btn-primary">Call</button>
                                </div>
                            </div><!-- card-body -->
                        </div><!-- card -->
                    </div><!-- col -->
                    <div class="col-sm-4 col-md-3 col-lg-4 col-xl-3 mg-t-10">
                        <div class="card card-profile">
                            <img src="https://via.placeholder.com/640x427" class="card-img-top" alt="">
                            <div class="card-body tx-13">
                                <div>
                                    <a href="">
                                        <div class="avatar avatar-lg"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                                    </a>
                                    <h5><a href="">Carole Rossignol</a></h5>
                                    <p>Software Engineer</p>
                                    <button class="btn btn-block btn-white">Call</button>
                                </div>
                            </div><!-- card-body -->
                        </div><!-- card -->
                    </div><!-- col -->
                </div><!-- row -->

                <button class="btn btn-block btn-sm btn-white">Load more</button>
            </div><!-- col -->

        </div><!-- row -->
    </div><!-- container -->
</div><!-- content -->

@include('shared.footer-1')


<script src="../../lib/jquery/jquery.min.js"></script>
<script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../lib/feather-icons/feather.min.js"></script>
<script src="../../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../../lib/select2/js/select2.min.js"></script>

<script src="../../assets/js/dashforge.js"></script>

<!-- append theme customizer -->
<script src="../../lib/js-cookie/js.cookie.js"></script>
<script src="../../assets/js/dashforge.settings.js"></script>
<script>
    $(function () {
        'use script'

        window.darkMode = function () {
            $('.btn-white').addClass('btn-dark').removeClass('btn-white');
        }

        window.lightMode = function () {
            $('.btn-dark').addClass('btn-white').removeClass('btn-dark');
        }

        var hasMode = Cookies.get('df-mode');
        if (hasMode === 'dark') {
            darkMode();
        } else {
            lightMode();
        }

        $('.select2').select2({
            placeholder: 'Choose one',
            searchInputPlaceholder: 'Search options'
        })
    })
</script>
</body>
</html>
