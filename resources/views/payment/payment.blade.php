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
    <meta name="twitter:title" content="dashforge">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/dashforge">
    <meta property="og:title" content="dashforge">
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
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/img/favicon.png">

@include('shared.titlebar')

<!-- vendor css -->
    <link href="../../../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- dashforge CSS -->
    <link rel="stylesheet" href="../../../assets/css/dashforge.css">
    <link rel="stylesheet" href="../../../assets/css/dashforge.auth.css">
</head>
<body>

@include('shared.navbar')
<div class="content content-fixed content-auth-alt">
    <div class="container d-flex justify-content-center ht-100p">
        <div class="mx-wd-300 wd-sm-450 ht-100p d-flex flex-column align-items-center justify-content-center">
            <div class="wd-80p wd-sm-300 mg-b-15"><img src="{{asset('assets/img/tradesman.jpeg')}}" style="    border-radius: 18px;" class="img-fluid " alt=""></div>
            <h4 class="tx-20 tx-sm-24">Paying an amount of  </h4>
            <h4 class="tx-20 tx-sm-24"> GHC 5.00 </h4>
            <h4 class="tx-20 tx-sm-24">to Kwafo Nana Mensah </h4>
            <h4 class="tx-20 tx-sm-24"> for Job Done !</h4>
            <hr>
            <h3 class="tx-20 tx-sm-24">Job reference: 98761</h3>
            <hr>
            <h4 class="tx-20 tx-sm-24">Thank You!</h4>
            <button class="btn btn-primary mg-sm-l-10 mg-t-10 mg-sm-t-0" type="button" onclick="payWithPaystack()"> Pay </button>



        </div>
    </div><!-- container -->
</div><!-- content -->

@include('shared.footer-1')

<script src="../../../lib/jquery/jquery.min.js"></script>
<script src="../../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../../lib/feather-icons/feather.min.js"></script>
<script src="../../../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../../../assets/js/dashforge.js"></script>
<!-- append theme customizer -->
<script src="../../../lib/js-cookie/js.cookie.js"></script>
<script src="../    ../../assets/js/dashforge.settings.js"></script>
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
    })
</script>
<script src="https://js.paystack.co/v1/inline.js"></script>
<script>
    function payWithPaystack(){
        var handler = PaystackPop.setup({
            key: 'pk_test_d2bf7730fd2a23d6f04c6273a18fe9c582a8ddb1',
            email: 'nanamensah1140@gmail.com',
            amount: 10000,
            currency: 'GHS',
            ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            metadata: {
                custom_fields: [
                    {
                        display_name: "Mobile Number",
                        variable_name: "mobile_number",
                        value: "0598296977"
                    }
                ]
            },
            callback: function(response){
                window.location = "https://ijsucceed.replit.com/paystack-integeration-php/verify-redirect.php?reference=" + response.reference;
            },
            onClose: function(){
                alert('window closed');
            }
        });
        handler.openIframe();
    }
</script>
</body>
</html>

