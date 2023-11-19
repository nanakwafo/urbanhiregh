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

                <div class="pd-t-20 wd-100p">
                    <h4 class="tx-color-01 mg-b-5">About Us </h4>
                    <p class="tx-color-03 tx-16 mg-b-40">Urbanhire is the Ghana's trusted online trade directory, for which we must thank both the public for their strong support of our service, and our great traders who prove that there is an alternative to the 'cowboys'.</p>
                    <p class="tx-color-03 tx-16 mg-b-40">You know how frustrating it is to have to use a trader directly out of the paper or a directory without getting recommendations first. But if an emergency occurred, say in the middle of the night or at the weekend, then you simply had no choice in the matter.</p>
                    <p class="tx-color-03 tx-16 mg-b-40"> If work isn't carried out to your satisfaction, the whole experience can leave a bitter taste in your mouth, not to mention a hole in your pocket.</p>
                    <p class="tx-color-03 tx-16 mg-b-40">Wouldn't it be great if there was a website that could put you in touch with local, reliable tradesmen whose work had been checked out - a website that was as good as a personal recommendation? That's what we thought too. So, we made it our mission to create the Web's most trusted online directory when looking for tradesmen - not just for emergency 'out of hours' jobs but for any job, anytime. Welcome to Urbanhire.</p>
                    <p class="tx-color-03 tx-16 mg-b-40">Our 'Leave a Review' facility allows you, the consumer, to rate the work of the tradesperson or business you've used. This, together with the fact that we check that all our tradesmen have a minimum of two year's experience in their field and are members of the relevant trade association, makes us the safest bet on the Net when searching for a tradesperson.</p>


                </div>

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
