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
    <meta property="og:title" content="Urbanhire">
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
    <!-- dashforge CSS -->
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
                    <h4 class="tx-color-01 mg-b-5">Contact  Urbanhire</h4>
                    <p class="tx-color-03 tx-16 mg-b-40">If you would like further information about any aspect of Urbanhire, don't forget to check the Help & Advice section, but also feel free to use the contact details below or complete the enquiry form.</p>

                </div>
            </div><!-- sign-wrapper -->
            <div class="media-body pd-y-30 pd-lg-x-50 pd-xl-x-60 align-items-center d-none d-lg-flex pos-relative">
                <div class="mx-lg-wd-500 mx-xl-wd-550">
                    <img src="https://dashforgegh.com/assets/img/home-2.png" class="img-fluid" alt="">
                </div>

            </div><!-- media-body -->
        </div><!-- media -->
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="card card-help">
                    <div class="card-body tx-13">
                        <div class="tx-60 lh-0 mg-b-25"><i class="icon ion-ios-home"></i></div>
                        <h5><a href="" class="link-01">Urbanhire Ltd.</a></h5>
                        <p class="tx-color-03 mg-b-0">
                           Aburi Kitase,Berekusu Road
                        </p>
                    </div><!-- card-body -->

                </div><!-- card -->
            </div><!-- col -->
            <div class="col-sm-6 col-lg-4 mg-t-20 mg-sm-t-0">
                <div class="card card-help">
                    <div class="card-body tx-13">
                        <div class="tx-60 lh-0 mg-b-25"><i class="icon ion-ios-call"></i></div>
                        <h5><a href="" class="link-01">Call us</a></h5>
                        <p class="tx-color-03 mg-b-0">059 829 6977</p>
                    </div><!-- card-body -->

                </div><!-- card -->
            </div><!-- col -->
            <div class="col-sm-6 col-lg-4 mg-t-20 mg-sm-t-30 mg-lg-t-0">
                <div class="card card-help">
                    <div class="card-body tx-13">
                        <div class="tx-60 lh-0 mg-b-25"><i class="icon ion-ios-mail"></i></div>
                        <h5><a href="" class="link-01">Email us</a></h5>
                        <p class="tx-color-03 mg-b-0">support@Urbanhiregh.com</p>
                    </div><!-- card-body -->

                </div><!-- card -->
            </div><!-- col -->

        </div><!-- row -->
        <div class="media align-items-stretch justify-content-center ht-100p">
            <div class="media-body pd-y-30 pd-lg-x-50 pd-xl-x-60 align-items-center d-none d-lg-flex pos-relative">
                <div class="mx-lg-wd-500 mx-xl-wd-550">
                    <div class="media align-items-stretch justify-content-center ht-100p">
                        <div class="sign-wrapper mg-lg-r-50 mg-xl-r-60">
                            @include('shared.alert')
                            <div class="pd-t-20 wd-100p">
                                <form action="/sendContact" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>Name:</label>
                                        <input type="text" name="contactname" class="form-control" placeholder="Enter your name">
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between mg-b-5">
                                            <label class="mg-b-0-f">Email:</label>
                                        </div>
                                        <input type="email" name="contactemail" class="form-control" placeholder="Enter your  email">
                                    </div>

                                    <div class="form-group">
                                        <label>Message:</label>
                                        <textarea class="form-control" name="contactmessage" cols="5"> </textarea>
                                    </div>

                                    <button type="submit" class="btn btn-brand-02 btn-block">Send</button>
                                </form>
                            </div>
                        </div><!-- sign-wrapper -->

                    </div><!-- media -->
                    </div>

            </div><!-- media-body -->
            <div class="sign-wrapper mg-lg-r-50 mg-xl-r-60">
                <div class="pd-t-20 wd-100p">
                    <h4 class="tx-color-01 mg-b-5">Urbanhire Equiry</h4>
                    <p class="tx-color-03 tx-16 mg-b-40">If you are sending us an enquiry about a trader on the website, please first ensure that they are a member on the website before getting in touch.</p>

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
