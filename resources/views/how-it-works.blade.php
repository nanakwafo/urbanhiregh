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
        <div class="align-items-stretch justify-content-center">
            <div class="wd-100p">
                <h2 class="tx-color-01 mg-b-5">How It Works!</h2>

                <p class="tx-color-03 tx-16 mg-b-40">If you're looking to get a job done properly, you want to find a trader you can trust to do a good job for a fair price. urbanhire allows you to quickly find
                    a tradesperson in your area who can be trusted to provide a high standard of work</p>
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#customer" role="tab" aria-controls="home" aria-selected="true">Customer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tradesmen" role="tab" aria-controls="profile" aria-selected="false">Tradesmen</a>
                </li>

            </ul>
            <div class="tab-content bd bd-gray-300 bd-t-0 pd-20" id="myTabContent">
                <div class="tab-pane fade show active" id="customer" role="tabpanel" aria-labelledby="home-tab">


                    <div class="row">
                        <div class="col-sm-12 col-lg-12">
                            <div class="card card-help">
                                <div class="card-body tx-13">

                                    <h5><a href="" class="link-01">Looking for a reliable Tradesperson?</a></h5>
                                    <p class="tx-color-03 mg-b-0">No problem - just enter the trade you're looking for and your postcode or town/city into the boxes at the top of the page, then click 'Search'.</p>
                                    <p class="tx-color-03 mg-b-0">Don't worry about having to enter exactly the right trade name - suggested options will be displayed as soon as you start typing.</p>
                                </div><!-- card-body -->

                            </div><!-- card -->
                        </div><!-- col -->


                    </div><!-- row -->
                    <div class="row mg-t-20">
                        <div class="col-sm-12 col-lg-12 ">
                            <div class="card card-help">
                                <div class="card-body tx-13">

                                    <h5><a href="" class="link-01">Choose your Trader</a></h5>
                                    <p class="tx-color-03 mg-b-0">You can view the company profiles of all trusted traders in your area who suit your job.</p>
                                    <p class="tx-color-03 mg-b-0">Reviews from previous customers are also available to help you to select the ideal tradesperson. Once you've chosen, you can immediately contact the trader by phone, text or email.</p>
                                </div><!-- card-body -->

                            </div><!-- card -->
                        </div><!-- col -->
                    </div>
                    <div class="row mg-t-20">
                        <div class="col-sm-12 col-lg-12 ">
                            <div class="card card-help">
                                <div class="card-body tx-13">

                                    <h5><a href="" class="link-01">Discuss the job</a></h5>
                                    <p class="tx-color-03 mg-b-0">The details of the job can then be discussed.

                                    </p>
                                    <p class="tx-color-03 mg-b-0">With costs agreed, and if both parties are happy, a date/timescale can be arranged for the work to be completed.

                                    </p>
                                </div><!-- card-body -->

                            </div><!-- card -->
                        </div><!-- col -->
                    </div>
                    <div class="row mg-t-20">
                        <div class="col-sm-12 col-lg-12 ">
                            <div class="card card-help">
                                <div class="card-body tx-13">

                                    <h5><a href="" class="link-01">Job Done</a></h5>
                                    <p class="tx-color-03 mg-b-0">The job is completed as agreed.

                                    </p>

                                </div><!-- card-body -->

                            </div><!-- card -->
                        </div><!-- col -->
                    </div>
                    <div class="row mg-t-20">
                        <div class="col-sm-12 col-lg-12 ">
                            <div class="card card-help">
                                <div class="card-body tx-13">

                                    <h5><a href="" class="link-01">Leave a review</a></h5>
                                    <p class="tx-color-03 mg-b-0">Once your job has been completed, leave a review on urbanhire to let others know the quality of work done by the trader.

                                    </p>
                                    <p class="tx-color-03 mg-b-0">This encourages a continued high standard and helps others to find tradespeople they can trust.

                                    </p>


                                </div><!-- card-body -->

                            </div><!-- card -->
                        </div><!-- col -->
                    </div>
                    <div class="row mg-t-20" style="justify-content: center;">
                        <div class="col-sm-6 col-lg-6 ">
                            <button type="submit" class="btn btn-brand-02 btn-block">Find a Trader</button>
                        </div><!-- col -->
                    </div>
                </div>
                <div class="tab-pane fade" id="tradesmen" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">
                            <div class="card card-help">
                                <div class="card-body tx-13">

                                    <h5><a href="" class="link-01">Are you an experienced professional Tradesperson?</a></h5>
                                    <p class="tx-color-03 mg-b-0"> If you're skilled in your trade, take pride in your work and have a selection of previously satisfied customers, you could join urbanhire.</p>
                                    <p class="tx-color-03 mg-b-0">As a member your company will be presented in the 710,170 searches made every month by visitors to the website. Go to the Join us page to start your urbanhire membership application.</p>
                                </div><!-- card-body -->

                            </div><!-- card -->
                        </div><!-- col -->


                    </div><!-- row -->
                    <div class="row mg-t-20">
                        <div class="col-sm-12 col-lg-12 ">
                            <div class="card card-help">
                                <div class="card-body tx-13">

                                    <h5><a href="" class="link-01">Making the selection</a></h5>
                                    <p class="tx-color-03 mg-b-0">When a search has been made, the urbanhire members who specialise in the relevant trade within the chosen region will be listed.</p>
                                    <p class="tx-color-03 mg-b-0">We allow only a limited number of members to be listed for any one trade in each region, providing a better quality selection for the consumer and guaranteeing a fair share of enquiries for each trader.</p>
                                </div><!-- card-body -->

                            </div><!-- card -->
                        </div><!-- col -->
                    </div>
                    <div class="row mg-t-20">
                        <div class="col-sm-12 col-lg-12 ">
                            <div class="card card-help">
                                <div class="card-body tx-13">

                                    <h5><a href="" class="link-01">Discuss the job</a></h5>
                                    <p class="tx-color-03 mg-b-0">The details of the job can then be discussed.

                                    </p>
                                    <p class="tx-color-03 mg-b-0">With costs agreed, and if both parties are happy, a date/timescale can be arranged for the work to be completed.

                                    </p>
                                </div><!-- card-body -->

                            </div><!-- card -->
                        </div><!-- col -->
                    </div>
                    <div class="row mg-t-20">
                        <div class="col-sm-12 col-lg-12 ">
                            <div class="card card-help">
                                <div class="card-body tx-13">

                                    <h5><a href="" class="link-01">Job Done</a></h5>
                                    <p class="tx-color-03 mg-b-0">The job is completed as agreed.

                                    </p>

                                </div><!-- card-body -->

                            </div><!-- card -->
                        </div><!-- col -->
                    </div>
                    <div class="row mg-t-20">
                        <div class="col-sm-12 col-lg-12 ">
                            <div class="card card-help">
                                <div class="card-body tx-13">

                                    <h5><a href="" class="link-01">Good results</a></h5>
                                    <p class="tx-color-03 mg-b-0">Reviews left by your satisfied customers boost your rating on urbanhire, encouraging others to enquire about your services.

                                    </p>
                                    <p class="tx-color-03 mg-b-0">As a trader, you can also sign in at any time to view a range of statistics showing how many have recently viewed your company profile, visited your website etc.

                                    </p>


                                </div><!-- card-body -->

                            </div><!-- card -->
                        </div><!-- col -->
                    </div>
                    <div class="row mg-t-20" style="justify-content: center;">
                        <div class="col-sm-6 col-lg-6 ">
                            <button type="submit" class="btn btn-brand-02 btn-block">Join Urbanhire</button>
                        </div><!-- col -->
                    </div>
                </div>

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
<script src="../../lib/jqueryui/jquery-ui.min.js"></script>
<script src="../../lib/prismjs/prism.js"></script>
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
        $('#accordion').accordion({
            heightStyle: 'content'
        });
    })
</script>
</body>
</html>
