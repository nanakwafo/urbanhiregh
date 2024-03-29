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
    <meta name="twitter:title" content="Urbanhire">
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

    <!-- dashforge CSS -->
    <link rel="stylesheet" href="assets/css/dashforge.css">
    <link rel="stylesheet" href="assets/css/dashforge.landing.css">






    <!-- added files -->
    <link href="lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="lib/prismjs/themes/prism-vs.css" rel="stylesheet">
    <link href="lib/select2/css/select2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/dashforge.demo.css">

    <link rel="stylesheet" href="css/custom.css">



</head>
<body class="home-body">

@include('shared.navbar')


<div class="home-slider">

    <div class="home-lead">

        <p class="home-text">Win local work and grow your business with Urbanhire</p>

        <h6 class="home-headline">We’ll introduce you to the millions of <span>Homeowners</span>
            that are searching our website, or reading our printed directories every single month
            <span> looking for reputable tradespeople like you.</span></h6>

        <div class="d-flex wd-lg-350">
            <a href="register" class="btn btn-brand-01 btn-uppercase flex-fill">Join today</a>
            <a href="login" class="btn btn-white btn-uppercase flex-fill mg-l-10">Sign In</a>
        </div>

        <div class="tx-12 mg-t-40">
            <a href="/faq" class="link-03">FAQ's</a>
            <a href="{{ url('about-us') }}" class="link-03 mg-l-10 mg-sm-l-20">About Us</a>
            <a href="{{ url('contact-us') }}" class="link-03 mg-l-10 mg-sm-l-20">Contact Us</a>
            <a href="/terms" target="_blank" class="link-03 mg-l-10 mg-sm-l-20">Terms & Condition</a>
            <a href="/privacy-policy" target="_blank" class="link-03 mg-l-10 mg-sm-l-20">Privacy Policy</a>
        </div>
    </div>

    <div class="home-search">
        <form method="post" action="{{ url('viewtradesmen') }}" class="home-search-form">
                {{ csrf_field() }}
            <div class="home-search-divider">
                <!-- <input class="home-search-trade" name="tradeSearch" placeholder="Enter a trade" /> -->
                <input type="hidden" value="1" name="pageNumber">

             <select  id="trade" class="form-control select2 home-search-trade" name="tradeSearch" >
                       <option value="" disabled selected>Select Trade</option>
                        @foreach ($uniqueTrades as $trade)
                            <option value="{{ $trade }}">{{ $trade }}</option>
                        @endforeach
                    </select>


            </div>

             <div class="home-search-divider">
                    <select id="location" class="select2 home-search-location"   name="location" >
                     <option value="" disabled selected>Select Trade</option>
                        @foreach ($uniqueLocations as $location)
                            <option value="{{ $location }}">{{ $location }}</option>
                        @endforeach
                    </select>
                  </div>


           <!--  <div class="home-search-divider">
                <input class="home-search-location" name="location" placeholder="Location" />
            </div> -->
            <div class="home-search-divider search-button-small">
                <button class="btn btn-brand-02 btn-block home-search-button"  type="submit" >Search</button>
            </div>
        </form>
    </div>
    <div class="home-slider-bg-one"></div>
</div><!-- home-slider -->

<!-- <script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/feather-icons/feather.min.js"></script>
<script src="lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<script src="assets/js/dashforge.js"></script>
<script>
    $(document).ready(function() {
        'use strict'

        $('[data-toggle="tooltip"]').tooltip()


    });


</script> -->

 <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/feather-icons/feather.min.js"></script>
    <script src="lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="lib/prismjs/prism.js"></script>
    <script src="lib/select2/js/select2.min.js"></script>

    <script src="assets/js/dashforge.js"></script>
    <script>
      // Adding placeholder for search input
      (function($) {

        'use strict'

        var Defaults = $.fn.select2.amd.require('select2/defaults');

        $.extend(Defaults.defaults, {
          searchInputPlaceholder: ''
        });

        var SearchDropdown = $.fn.select2.amd.require('select2/dropdown/search');

        var _renderSearchDropdown = SearchDropdown.prototype.render;

        SearchDropdown.prototype.render = function(decorated) {

          // invoke parent method
          var $rendered = _renderSearchDropdown.apply(this, Array.prototype.slice.apply(arguments));

          this.$search.attr('placeholder', this.options.get('searchInputPlaceholder'));

          return $rendered;
        };

      })(window.jQuery);


      $(function(){
        'use strict'

        // Basic with search
        $('.select2').select2({
          placeholder: 'Choose one',
          searchInputPlaceholder: 'Search options'
        });

        // Disable search
        $('.select2-no-search').select2({
          minimumResultsForSearch: Infinity,
          placeholder: 'Choose one'
        });

        // Clearable selection
        $('.select2-clear').select2({
          minimumResultsForSearch: Infinity,
          placeholder: 'Choose one',
          allowClear: true
        });

        // Limit selection
        $('.select2-limit').select2({
          minimumResultsForSearch: Infinity,
          placeholder: 'Choose one',
          maximumSelectionLength: 2
        });

      });
    </script>

</body>
</html>
