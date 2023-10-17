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
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    @include('shared.titlebar')

    <!-- vendor css -->
    <link href="lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="assets/css/dashforge.css">
    <link rel="stylesheet" href="assets/css/dashforge.landing.css">

</head>
<body class="home-body">

@include('shared.navbar')


<div class="home-slider">
    <div class="home-lead">
        <div class="df-logo-initial mg-b-15"><p>UH</p></div>
        <p class="home-text">Win local work and grow your business with Urbanhire</p>

        <h6 class="home-headline">We’ll introduce you to the millions of <span>homeowners</span> that are searching our website, or reading our printed directories every single month<span>looking for reputable tradespeople like you.</span></h6>

        <div class="d-flex wd-lg-350">
            <a href="https://themeforest.net/item/dashforge-responsive-admin-dashboard-template/23725961" class="btn btn-brand-01 btn-uppercase flex-fill">Join today</a>
            <a href="template/classic/dashboard-one.html" class="btn btn-white btn-uppercase flex-fill mg-l-10">Sign In</a>
        </div>

        <div class="tx-12 mg-t-40">
            <a href="docs.html" class="link-03">F<span class="d-none d-sm-inline">AQ's</span></a>
            <a href="changelog.html" class="link-03 mg-l-10 mg-sm-l-20">Contact Us</a>
            <a href="https://themeforest.net/licenses/standard" target="_blank" class="link-03 mg-l-10 mg-sm-l-20">Terms & Condition</a>
            <a href="https://themeforest.net/page/customer_refund_policy" target="_blank" class="link-03 mg-l-10 mg-sm-l-20">Privacy Policy</a>
        </div>
    </div>
    <div class="home-slider-img">
        <div><img src="assets/img/home-2.png" alt=""></div>
        <div><img src="assets/img/home-1.png" alt=""></div>
        <div><img src="assets/img/home-1.png" alt=""></div>
    </div>
    <div class="home-slider-bg-one"></div>
</div><!-- home-slider -->

<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/feather-icons/feather.min.js"></script>
<script src="lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<script src="assets/js/dashforge.js"></script>
<script>
    $(document).ready(function() {
        'use strict'

        $('[data-toggle="tooltip"]').tooltip()


    });
</script>
</body>
</html>
