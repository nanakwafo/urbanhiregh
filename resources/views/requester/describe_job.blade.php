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
        <div class="media align-items-stretch justify-content-center ht-100p pos-relative">
            <div class="media-body align-items-center d-none d-lg-flex">
                <div class="mx-wd-600">
                    <img src="{{asset('assets/img/afro-american-builders-wearing-helmets-face-masks-while-measuring-wall.png')}}" class="img-fluid" alt="">
                </div>

            </div><!-- media-body -->
            <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
                @include('shared.alert')
                <div class="wd-100p">
                    <h3 class="tx-color-01 mg-b-5">{{$trade}}</h3>
                    <p class="tx-color-03 tx-16 mg-b-40">Get responses from Urbanhire screened and reviewed tradespeople near you</p>
                    <form action="/post_trade_job" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Email </label>
                            <input type="text" name="email" class="form-control" placeholder="example-email@gmail.com">
                        </div>
                        <div class="form-group">
                            <label>House no.* </label>
                            <input type="text" name="house_no" class="form-control" placeholder="E12-D12S2">
                        </div>

                        <div class="form-group">
                            <label>Location </label>
                            <input type="text" name="location" class="form-control" placeholder="Adenta housing down">
                        </div>

                        <div class="form-group">
                            <label>Describe what you need</label>
                            <textarea class="form-control" rows="4" name="job_description" placeholder="I Want my door lock fixed"></textarea>
                        </div>

                        <button type="submit" id="trade" class="btn btn-brand-02 btn-block">Continue</button>
                    </form>



                </div>

            </div><!-- sign-wrapper -->
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
