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

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="../../assets/css/dashforge.css">
    <link rel="stylesheet" href="../../assets/css/dashforge.profile.css">
</head>
<body class="page-profile">

@include('shared.navbar-2')
<div class="content content-fixed bd-b">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="d-sm-flex align-items-center justify-content-between">
            <div>
                <h4 class="mg-b-5">Update User Profile</h4>
                <p class="mg-b-0 tx-color-03">Due on April 21, 2019</p>
            </div>

        </div>
    </div><!-- container -->
</div><!-- content -->

<div class="content tx-13">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">

           <ul class="nav nav-tabs" id="myTab" role="tablist">
               <li class="nav-item">
                   <a class="nav-link active" id="picture-tab" data-toggle="tab" href="#picture" role="tab" aria-controls="picture" aria-selected="true">Picture</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" id="detail-tab" data-toggle="tab" href="#detail" role="tab" aria-controls="detail" aria-selected="false">Personal Details</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="false">Education</a>
               </li>
           </ul>
           <div class="tab-content bd bd-gray-300 bd-t-0 pd-20" id="myTabContent">
               <div class="tab-pane fade show active" id="picture" role="tabpanel" aria-labelledby="picture-tab">
                   <form method="post" action="/update-tradesmanprofile-picture" enctype="multipart/form-data">

                       <input type="hidden" name="user_id" value="1" />
                       <input type="file" name="picture" >
                       <input type="hidden" name="_token" value="{{csrf_token()}}">

                       <button type="submit">Upload</button>
                   </form>

               </div>
               <div class="tab-pane fade" id="detail" role="tabpanel" aria-labelledby="detail-tab">

                   <form id="form1" class="" novalidate>
                       <div class="row row-sm mg-b-10">
                           <div class="col-sm-6">
                               <input type="text" class="form-control" placeholder="Valid state">

                           </div>
                           <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                               <input type="text" class="form-control" placeholder="Invalid state" required>

                           </div>
                           <div class="col-sm-6 mg-t-10">
                               <textarea class="form-control" rows="2" placeholder="Valid state"></textarea>

                           </div>
                           <div class="col-sm-6 mg-t-10">
                               <textarea class="form-control" rows="2" placeholder="Invalid state" required></textarea>

                           </div>
                       </div>
                   </form>
               </div>
               <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
                   <h6>Contact</h6>
                   <p>...</p>
               </div>
           </div>

    </div><!-- container -->
</div><!-- content -->

@include('shared.footer-1')

<script src="../../lib/jquery/jquery.min.js"></script>
<script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../lib/feather-icons/feather.min.js"></script>
<script src="../../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>

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
    })
</script>
</body>
</html>
