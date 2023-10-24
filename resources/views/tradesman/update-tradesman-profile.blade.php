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
        @include('shared.alert')
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="picture-tab" data-toggle="tab" href="#picture" role="tab"
                   aria-controls="picture" aria-selected="true">Picture</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="detail-tab" data-toggle="tab" href="#detail" role="tab" aria-controls="detail"
                   aria-selected="false">Personal Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="education-tab" data-toggle="tab" href="#education" role="tab"
                   aria-controls="education" aria-selected="false">Education</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="experience-tab" data-toggle="tab" href="#experience" role="tab"
                   aria-controls="experience" aria-selected="false">Experience</a>
            </li>
        </ul>
        <div class="tab-content bd bd-gray-300 bd-t-0 pd-20" id="myTabContent">
            <div class="tab-pane fade show active" id="picture" role="tabpanel" aria-labelledby="picture-tab">
                <div id="avatar" style="display: flex;justify-content: center">
                    @if(!empty($tradesmanprofile->picture))
                        <div class="avatar avatar-lg mg-b-15"><img id="preview_image"
                                                                   src="/uploads/{{$tradesmanprofile->picture}}"
                                                                   class="rounded-circle" alt=""></div>

                    @else
                        <div class="avatar avatar-lg mg-b-15"><img id="preview_image" src="/uploads/default.png"
                                                                   class="rounded-circle" alt=""></div>

                    @endif
                </div>


                <form method="post" action="/update-tradesmanprofile-picture" enctype="multipart/form-data">
                    <input type="hidden" name="user_id" value="{{$user_id}}"/>
                    <div class="custom-file" style=" display: flex;justify-content: center;margin-bottom: 2%;">
                        <input type="file" class="custom-file-input" id="imgInp" name="picture">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <button type="submit" class="btn btn-brand-02 btn-block">Upload</button>
                </form>

            </div>
            <div class="tab-pane fade" id="detail" role="tabpanel" aria-labelledby="detail-tab">

                <form action="/update_profile_details" method="post">

                    <div class="row row-sm mg-b-10 ">
                        <div class="form-group col-md-12">
                            <label for="formGroupExampleInput" class="d-block">About</label>
                            <textarea class="form-control" name="about" rows="2"
                                      placeholder="Tell Us About Yourself">{{$tradesmanprofile->about}}</textarea>
                        </div>
                    </div>


                    <div class="row row-sm mg-b-10">
                        <div class="form-group col-md-12">
                            <label for="formGroupExampleInput" class="d-block">Location</label>
                            <input type="text" name="location" value="{{$tradesmanprofile->location}}" class="form-control" placeholder="Enter Location"
                                   required>
                        </div>
                    </div>
                    <div class="row row-sm mg-b-10">
                        <div class="form-group col-md-12">
                            <label for="formGroupExampleInput" class="d-block">Home Address</label>
                            <input type="text" name="home_address" value="{{$tradesmanprofile->home_address}}" class="form-control" placeholder="Enter Home Address"
                                   required>
                        </div>
                    </div>
                    <div class="row row-sm mg-b-10">
                        <div class="form-group col-md-12">
                            <label for="formGroupExampleInput" class="d-block">Phone</label>

                            <input type="text" name="phone" value="{{$tradesmanprofile->phone}}" class="form-control" placeholder="Enter Phone" required>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="user_id" value="{{$tradesmanprofile->user_id}}">

            <button type="submit" class="btn btn-brand-02 btn-block">Update Details</button>
            </form>
        </div>
            <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
            <form action="/update_education_details" method="post">



                <div class="row row-sm mg-b-10">
                    <div class="form-group col-md-12">
                        <label for="formGroupExampleInput" class="d-block">Title</label>
                        <input type="text" name="title" value="{{$tradesmaneducation->title}}" class="form-control" placeholder="Select Skills">
                    </div>
                </div>
                <div class="row row-sm mg-b-10">
                    <div class="form-group col-md-12">
                        <label for="formGroupExampleInput" class="d-block">Institution_name</label>
                        <input type="text" name="institution_name" value="{{$tradesmaneducation->institution_name}}" class="form-control" placeholder="Enter Location"
                               required>
                    </div>
                </div>
                <div class="row row-sm mg-b-10">
                    <div class="form-group col-md-12">
                        <label for="formGroupExampleInput" class="d-block">Start Period</label>
                        <input type="date" name="start_period" value="{{$tradesmaneducation->start_period}}" class="form-control" placeholder="Enter Home Address"
                               required>
                    </div>
                </div>
                <div class="row row-sm mg-b-10">
                    <div class="form-group col-md-12">
                        <label for="formGroupExampleInput" class="d-block">End Period</label>

                        <input type="date" name="end_period" value="{{$tradesmaneducation->end_period}}" class="form-control" placeholder="Enter Phone" required>
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="user_id" value="{{$tradesmanprofile->user_id}}">

                <button type="submit" class="btn btn-brand-02 btn-block">Update Details</button>
            </form>
        </div>
            <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
              <form action="/update_experience" method="post">



                <div class="row row-sm mg-b-10">
                    <div class="form-group col-md-12">
                        <label for="formGroupExampleInput" class="d-block">Position</label>
                        <input type="text" name="position" value="{{$tradesmanexperience->position}}" class="form-control" placeholder="Select Skills">
                    </div>
                </div>
                <div class="row row-sm mg-b-10">
                    <div class="form-group col-md-12">
                        <label for="formGroupExampleInput" class="d-block">organisation_name</label>
                        <input type="text" name="organisation_name" value="{{$tradesmanexperience->organisation_name}}" class="form-control" placeholder="Enter Location"
                               required>
                    </div>
                </div>
                  <div class="row row-sm mg-b-10">
                    <div class="form-group col-md-12">
                        <label for="formGroupExampleInput" class="d-block">Location</label>
                        <input type="text" name="organisation_location" value="{{$tradesmanexperience->organisation_location}}" class="form-control" placeholder="Enter Location"
                               required>
                    </div>
                </div>
                  <div class="row row-sm mg-b-10">
                    <div class="form-group col-md-12">
                        <label for="formGroupExampleInput" class="d-block">Description</label>
                        <input type="text" name="description" value="{{$tradesmanexperience->description}}" class="form-control" placeholder="Enter Location"
                               required>
                    </div>
                </div>
                <div class="row row-sm mg-b-10">
                    <div class="form-group col-md-12">
                        <label for="formGroupExampleInput" class="d-block">Start Period</label>
                        <input type="date" name="start_period" value="{{$tradesmanexperience->start_period}}" class="form-control" placeholder="Enter Home Address"
                               required>
                    </div>
                </div>
                <div class="row row-sm mg-b-10">
                    <div class="form-group col-md-12">
                        <label for="formGroupExampleInput" class="d-block">End Period</label>

                        <input type="date" name="end_period" value="{{$tradesmanexperience->end_period}}" class="form-control" placeholder="Enter Phone" required>
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="user_id" value="{{$tradesmanexperience->user_id}}">

                <button type="submit" class="btn btn-brand-02 btn-block">Update Details</button>
            </form>
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

        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview_image').attr('src', e.target.result);

                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function () {

            readURL2(this);
        });
    })
</script>
</body>
</html>
