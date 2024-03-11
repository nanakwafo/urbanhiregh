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
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.png">

@include('shared.titlebar')

<!-- vendor css -->
    <link href="../../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="../lib/prismjs/themes/prism-vs.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- UrbanHire CSS -->
    <link rel="stylesheet" href="../../assets/css/UrbanHire.css">
    <link rel="stylesheet" href="../../assets/css/UrbanHire.auth.css">
</head>
<body>

{{--@include('shared.navbar-3')--}}
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
                    <h3 class="tx-color-01 mg-b-5">Post a job</h3>
                    <p class="tx-color-03 tx-16 mg-b-40">Get responses from Urbanhire screened and reviewed tradespeople near you</p>
                    <form action="/post_trade_job" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>What would you like to have done?</label>
                            <select class="form-control select2 " style="width: 100%" name="trade">
                                <option value="">Choose a trade category</option>
                                <option value="architects">Architectural Services</option>
                                <option value="bathroom-fitters">Bathroom Fitting</option>
                                <option value="bricklayers">Bricklaying &amp; Repointing</option>
                                <option value="carpenters-and-joiners">Carpentry &amp; Joinery</option>
                                <option value="carpet-flooring-fitters">Carpets, Lino &amp; Flooring</option>
                                <option value="heating-engineers">Central Heating</option>
                                <option value="chimney-fireplace-specialists">Chimney &amp; Fireplace</option>
                                <option value="conservatories-specialists">Conservatories</option>
                                <option value="conversions">Conversions</option>
                                <option value="damp-proofing-specialists">Damp Proofing</option>
                                <option value="demolition-specialists">Demolition &amp; Clearance</option>
                                <option value="driveway-specialists">Driveways &amp; Paving</option>
                                <option value="electricians">Electrical</option>
                                <option value="extension-specialists">Extensions</option>
                                <option value="fascias-soffits-guttering-specialists">Fascias, Soffits &amp; Guttering</option>
                                <option value="fencers">Fencing</option>
                                <option value="landscape-gardeners">Gardening &amp; Landscaping</option>
                                <option value="gas-engineers">Gas Work</option>
                                <option value="groundwork-and-foundations-specialists">Groundwork &amp; Foundations</option>
                                <option value="handymen">Handyman</option>
                                <option value="insulation-specialists">Insulation</option>
                                <option value="kitchen-fitters">Kitchen Fitting</option>
                                <option value="locksmiths">Locksmith</option>
                                <option value="loft-conversion-specialists">Loft Conversions</option>
                                <option value="new-builds-specialists">New Build</option>
                                <option value="painters-and-decorators">Painting &amp; Decorating</option>
                                <option value="plasterers">Plastering &amp; Rendering</option>
                                <option value="plumbers">Plumbing</option>
                                <option value="restoration-and-refurbishment-specialists">Restoration &amp; Refurbishment</option>
                                <option value="roofers">Roofing</option>
                                <option value="security-system-installers">Security Systems</option>
                                <option value="stonemasons">Stonemasonry</option>
                                <option value="tilers">Tiling</option>
                                <option value="tree-surgeons">Tree Surgery</option>
                                <option value="window-fitters">Windows &amp; Door Fitting</option>
                                <option value="not-determined">I'm not sure which to pick</option>
                            </select>
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

<script src="../../assets/js/UrbanHire.js"></script>

<!-- append theme customizer -->
<script src="../../lib/js-cookie/js.cookie.js"></script>
<script src="../../assets/js/UrbanHire.settings.js"></script>
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
