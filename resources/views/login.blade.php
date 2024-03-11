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
    <meta name="twitter:title" content="UrbanHire">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="http://themepixels.me/UrbanHire/img/UrbanHire-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/UrbanHire">
    <meta property="og:title" content="UrbanHire">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="http://themepixels.me/UrbanHire/img/UrbanHire-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/UrbanHire/img/UrbanHire-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    @include('shared.titlebar')

    <!-- vendor css -->
    <link href="lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- UrbanHire CSS -->
    <link rel="stylesheet" href="assets/css/UrbanHire.css">
    <link rel="stylesheet" href="assets/css/UrbanHire.auth.css">
</head>
<body>

@include('shared.navbar')
<div class="content content-fixed content-auth">
    <div class="container">
        <div class="media align-items-stretch justify-content-center ht-100p pos-relative">
            <div class="media-body align-items-center d-none d-lg-flex">
                <div class="mx-wd-600">
                    <img src="{{asset('assets/img/afro-american-builders-wearing-helmets-face-masks-while-measuring-wall.png')}}" class="img-fluid" alt="">
                </div>

            </div><!-- media-body -->
            <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
                @include('shared.alert')
                <div class="wd-100p">
                    <h3 class="tx-color-01 mg-b-5">Sign In</h3>
                    <p class="tx-color-03 tx-16 mg-b-40">Welcome back! Please signin to continue.</p>
                    <form action="/login" method="POST">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" value="{{isset($email)? $email: ''}}" class="form-control" placeholder="yourname@yourmail.com">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mg-b-5">
                            <label class="mg-b-0-f">Password</label>
                            <a href="" class="tx-13">Forgot password?</a>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn btn-brand-02 btn-block">Sign In</button>
                    </form>

                    <div class="tx-13 mg-t-20 tx-center">Don't have an account? <a href="register">Create an Account</a></div>
                </div>
            </div><!-- sign-wrapper -->
        </div><!-- media -->
    </div><!-- container -->
</div><!-- content -->

@include('shared.footer-1')

<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/feather-icons/feather.min.js"></script>
<script src="lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<script src="assets/js/UrbanHire.js"></script>

<!-- append theme customizer -->
<script src="lib/js-cookie/js.cookie.js"></script>
<script src="assets/js/UrbanHire.settings.js"></script>
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
    })
</script>
</body>
</html>
