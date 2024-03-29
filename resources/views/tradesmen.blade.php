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
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

@include('shared.titlebar')

<!-- vendor css -->
    <link href="lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="lib/prismjs/themes/prism-vs.css" rel="stylesheet">
    <!-- <link href="../lib/select2/css/select2.min.css" rel="stylesheet"> -->
    <!-- dashforge CSS -->
    <link rel="stylesheet" href="assets/css/dashforge.css">
    <link rel="stylesheet" href="assets/css/dashforge.auth.css">



     <!-- added files -->
    <link href="lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="lib/prismjs/themes/prism-vs.css" rel="stylesheet">
    <link href="lib/select2/css/select2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/dashforge.demo.css">
    <link rel="stylesheet" href="css/custom.css">

</head>
<body>

@include('shared.navbar')
<div class="content content-fixed content-auth">
{{--    <div class="container tradesmen-search-page">--}}
{{--        <div class="tradesmen-search">--}}
{{--            <form method="post" action="{{ url('viewtradesmen') }}" class="tradesmen-search-form">--}}
{{--                {{ csrf_field() }}--}}
{{--                 <div class="home-search-divider">--}}
{{--                    <select  id="trade" class="form-control select2 home-search-trade trade-dropdown" name="tradeSearch" >--}}
{{--                       <option value="" disabled selected>Select Trade</option>--}}
{{--                        @foreach ($uniqueTrades as $trade)--}}
{{--                            <option value="{{ $trade }}">{{ $trade }}</option>--}}
{{--                        @endforeach--}}
{{--                    </select></div>--}}

{{--                  <div class="home-search-divider">--}}

{{--                    <input type="hidden" value="1" name="pageNumber">--}}
{{--                    <select id="location" class="select2 home-search-location location-dropdown"   name="location" >--}}
{{--                     <option value="" disabled selected>Select Trade</option>--}}
{{--                        @foreach ($uniqueLocations as $location)--}}
{{--                            <option value="{{ $location }}">{{ $location }}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                  </div>--}}

{{--                <div class="tradesmen-search-divider">--}}
{{--                    <button class="btn btn-brand-02 btn-block home-search-button"  type="submit" >Search</button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div><!-- container -->--}}
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="row">
            <div class="col-lg-12">
                <div class="row row-xs mg-b-25" style="justify-content: center">
                    <form method="post" action="{{ url('viewtradesmen') }}" class="tradesmen-search-form">
                        {{ csrf_field() }}
                        <div class="home-search-divider">
                            <select  id="trade" class="form-control select2 home-search-trade trade-dropdown" name="tradeSearch" >
                                <option value="" disabled selected>Select Trade</option>
                                @foreach ($uniqueTrades as $trade)
                                    <option value="{{ $trade }}">{{ $trade }}</option>
                                @endforeach
                            </select></div>

                        <div class="home-search-divider">

                            <input type="hidden" value="1" name="pageNumber">
                            <select id="location" class="select2 home-search-location location-dropdown"   name="location" >
                                <option value="" disabled selected>Select Trade</option>
                                @foreach ($uniqueLocations as $location)
                                    <option value="{{ $location }}">{{ $location }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="tradesmen-search-divider">
                            <button class="btn btn-brand-02 btn-block home-search-button"  type="submit" >Search</button>
                        </div>
                    </form>
                </div>

                <div class="row row-xs mg-b-25">
                 @foreach($tradesmenprofiles as $tradesmenprofile)
                    <div class="col-sm-4 col-md-3 col-lg-4 col-xl-3 mg-t-10 ">
                        <div class="card card-profile">
                            <img src="assets/img/profile-image.png" class="card-img-top" alt="">
                            <div class="card-body tx-13">
                                <div>
                                    <a href="">
                                        <div class="avatar avatar-lg"><img src="/uploads/{{$tradesmenprofile->picture}}" class="rounded-circle" alt=""></div>
                                    </a>
                                    <h5><a href="">{{$tradesmenprofile->first_name . '' .$tradesmenprofile->last_name}}</a></h5>
                                    <p><h6>{{$tradesmenprofile->trade}}</h6>
                                    <p>{{$tradesmenprofile->location}}</p>
                                    <button class="btn btn-block btn-white">Call</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div><!-- row -->
                 <form method="post" action="{{ url('viewtradesmen') }}" class="tradesmen-search-form">
                {{ csrf_field() }}


           <input type="hidden" value="{{ $searchText }}" name="tradeSearch">
            <input type="hidden" value="{{ $location }}" name="location">
            <input type="hidden" value="{{ $pageNumber }}" name="pageNumber">


            <button class="btn btn-block btn-sm btn-white" type="submit">Load more</button>
                </form>

            </div><!-- col -->

        </div><!-- row -->
    </div><!-- container -->
</div><!-- content -->

@include('shared.footer-1')


<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/feather-icons/feather.min.js"></script>
<script src="lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="lib/select2/js/select2.min.js"></script>

<script src="assets/js/dashforge.js"></script>

<!-- append theme customizer -->
<script src="lib/js-cookie/js.cookie.js"></script>
<script src="assets/js/dashforge.settings.js"></script>
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


// Basic with search
        $('#trade').select2({
          placeholder: 'Choose A Trade',
          searchInputPlaceholder: 'Search options'
        });

        $('#location').select2({
          placeholder: 'Choose A Location',
          searchInputPlaceholder: 'Search options'
        });



    })
</script>







</body>
</html>
