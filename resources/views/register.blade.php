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
</head>
<body>

@include('shared.navbar')
<div class="content content-fixed content-auth">
    <div class="container">
        <div class="media align-items-stretch justify-content-center ht-100p">
            <div class="sign-wrapper mg-lg-r-50 mg-xl-r-60">
                <div class="pd-t-20 wd-100p">
                    <h4 class="tx-color-01 mg-b-5">Create New Account</h4>
                    <p class="tx-color-03 tx-16 mg-b-40">It's free to signup and only takes a minute.</p>

                    @include('shared.alert')

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="requester-tab" data-toggle="tab" href="#requester" role="tab" aria-controls="requester" aria-selected="true">Requester</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tradesman-tab" data-toggle="tab" href="#tradesman" role="tab" aria-controls="tradesman" aria-selected="false">Tradesman</a>
                        </li>

                    </ul>
                    <div class="tab-content bd bd-gray-300 bd-t-0 pd-20" id="myTabContent">
                        <div class="tab-pane fade show active" id="requester" role="tabpanel" aria-labelledby="requester-tab">
                            <h6>Requester</h6>
                            <form action="/register" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="user_type" value="requester">
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email address">
                                </div>
                                <div class="form-group">
                                    <div class="d-flex justify-content-between mg-b-5">
                                        <label class="mg-b-0-f">Password</label>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="Enter your password">
                                </div>

                                <div class="form-group">
                                    <div class="d-flex justify-content-between mg-b-5">
                                        <label class="mg-b-0-f">Password Confirmation</label>
                                    </div>
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Enter your password Confirmation">
                                </div>
                                <div class="form-group">
                                    <label>Firstname</label>
                                    <input type="text" name="firstname" class="form-control" placeholder="Enter your firstname">
                                </div>
                                <div class="form-group">
                                    <label>Lastname</label>
                                    <input type="text" name="lastname" class="form-control" placeholder="Enter your lastname">
                                </div>

                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" name="phone_number" class="form-control" placeholder="Enter your Phone Number">
                                </div>
                                <div class="form-group">
                                    <label>Full Address</label>
                                    <input type="text" name="location" class="form-control" placeholder="Enter your Full Address">
                                </div>
                                <div class="form-group tx-12">
                                    By clicking <strong>Create an account</strong> below, you agree to our terms of service and privacy statement.
                                </div><!-- form-group -->
                                <button type="submit" class="btn btn-brand-02 btn-block">Create Account</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tradesman" role="tabpanel" aria-labelledby="tradesman-tab">

                            <form action="/register" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="user_type" value="tradesman">
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email address">
                                </div>
                                <div class="form-group">
                                    <div class="d-flex justify-content-between mg-b-5">
                                        <label class="mg-b-0-f">Password</label>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="Enter your password">
                                </div>
                                <div class="form-group">
                                    <div class="d-flex justify-content-between mg-b-5">
                                        <label class="mg-b-0-f">Password Confirmation</label>
                                    </div>
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Enter your password Confirmation">
                                </div>
                                <div class="form-group">
                                    <label>Firstname</label>
                                    <input type="text" name="first_name" class="form-control" placeholder="Enter your firstname">
                                </div>
                                <div class="form-group">
                                    <label>Lastname</label>
                                    <input type="text" name="last_name" class="form-control" placeholder="Enter your lastname">
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" name="phone_number" class="form-control" placeholder="Enter your Phone Number">
                                </div>
                                <div class="form-group">
                                    <label>Full Address</label>
                                    <input type="text" name="location" class="form-control" placeholder="Enter your Full Address">
                                </div>
                                <div class="form-group">
                                    <label>Select Trade</label>
                                    <select class="form-control select2 " style="width: 100%" name="trade">
                                        <option value="AL">Welder</option>
                                        <option value="WY">Capenter</option>
                                    </select>
                               </div>
                                <div class="form-group tx-12">
                                    By clicking <strong>Create an account</strong> below, you agree to our terms of service and privacy statement.
                                </div><!-- form-group -->

                                <button type="submit" class="btn btn-brand-02 btn-block">Create Account</button>
                            </form>
                        </div>

                    </div>

                    <div class="tx-13 mg-t-20 tx-center">Already have an account? <a href="login">Sign In</a></div>
                </div>
            </div><!-- sign-wrapper -->
            <div class="media-body pd-y-30 pd-lg-x-50 pd-xl-x-60 align-items-center d-none d-lg-flex pos-relative">
                <div class="mx-lg-wd-500 mx-xl-wd-550">
                    <img src="{{asset('assets/img/close-up-hand-repairman-professional-builder-working-indoors-repairing.png')}}" class="img-fluid" alt="">
                </div>

            </div><!-- media-body -->
        </div><!-- media -->
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
    $(function(){
        'use script'

        window.darkMode = function(){
            $('.btn-white').addClass('btn-dark').removeClass('btn-white');
        }

        window.lightMode = function() {
            $('.btn-dark').addClass('btn-white').removeClass('btn-dark');
        }

        var hasMode = Cookies.get('df-mode');
        if(hasMode === 'dark') {
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
