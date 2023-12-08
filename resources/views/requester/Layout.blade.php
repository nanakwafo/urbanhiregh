@php
    use Illuminate\Support\Facades\URL;

    // Get the full URL
    $currentURL = URL::full();

    // Get the last segment of the URL
    $currentURL = collect(explode('/', $currentURL))->last();


@endphp
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

    <title>DashForge Responsive Bootstrap 4 Dashboard Template</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">


    @if ($currentURL === "requester-history" || $currentURL === "requester-payments" || $currentURL === "requester-properties" || $currentURL === "requester-request" || is_numeric($currentURL))
        <link href="{{ asset('lib/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/typicons.font/typicons.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/prismjs/themes/prism-vs.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/select2/css/select2.min.css') }}" rel="stylesheet">

        <!-- DashForge CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/dashforge.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/dashforge.profile.css') }}">
    @else
    <!-- vendor css -->
        <link href="{{ asset('lib/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

        <!-- DashForge CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/dashforge.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/dashforge.profile.css') }}">
    @endif

    <style type="text/css">
        /* Basic styles for the menu */
        .navbar-nav {
            list-style: none;
            padding: 0;
        }


        .navbar-nav a {
            text-decoration: none;
            color: #333;
            font-weight: normal;
            transition: color 0.3s;
        }

        /* Styles for the active menu item */
        .navbar-nav li.active a {
            color: #007bff; /* Change the text color for the active item */
            font-weight: bold; /* Make the text bold for the active item */
        }

        /* Styles for the button */
        .navbar-nav button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .navbar-nav button:hover {
            background-color: #0056b3; /* Darker background color on hover */
        }

        #charCount {
            color: #555;
            font-size: 12px;
        }

        .error {
            color: red;
        }
        /* Default styling for all screen sizes */
        .navbar-brand {
            display: none; /* Hide by default */
        }

        /* Custom styling for screens with a maximum width of 768px (mobile) */
        @media (max-width: 768px) {
            .navbar-brand {
                display: inline; /* Show on mobile devices */
                font-weight: bold;
                letter-spacing: 2px;
            }

        }
        /*Copied from bootstrap to handle input file multiple*/
        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: normal;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        /*Also */
        .btn-success {
            border: 1px solid #c5dbec;
            background: #d0e5f5;
            font-weight: bold;
            color: #2e6e9e;
        }

        /* This is copied from https://github.com/blueimp/jQuery-File-Upload/blob/master/css/jquery.fileupload.css */
        .fileinput-button {
            position: relative;
            overflow: hidden;
        }

        .fileinput-button input {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            opacity: 0;
            -ms-filter: "alpha(opacity=0)";
            font-size: 200px;
            direction: ltr;
            cursor: pointer;
        }

        .thumb {
            height: 80px;
            width: 100px;
            border: 1px solid #000;
        }

        ul.thumb-Images li {
            width: 120px;
            float: left;
            display: inline-block;
            vertical-align: top;
            height: 120px;
        }

        .img-wrap {
            position: relative;
            display: inline-block;
            font-size: 0;
        }

        .img-wrap .close {
            position: absolute;
            top: 2px;
            right: 2px;
            z-index: 100;
            background-color: #d0e5f5;
            color: #000;
            font-weight: bolder;
            cursor: pointer;
            opacity: 0.5;
            font-size: 23px;
            line-height: 10px;
            border-radius: 50%;
        }

        .img-wrap:hover .close {
            opacity: 1;
            background-color: #ff0000;
        }

        .FileNameCaptionStyle {
            font-size: 12px;
        }

    </style>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">



</head>
<body class="page-profile">
@include('shared.navbar-3')


<div class="content content-fixed content-profile">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="media d-block d-lg-flex">
            <div class="profile-sidebar pd-lg-r-25">
                <div class="row">
                    <div class="col-sm-3 col-md-2 col-lg">

                        <div class="avatar avatar-xxl avatar-online"><img src="https://via.placeholder.com/500"
                                                                          class="rounded-circle" alt=""></div>

                    </div><!-- col -->
                    <div class="col-sm-8 col-md-7 col-lg mg-t-20 mg-sm-t-0 mg-lg-t-25">
                        @foreach ($self as $item)
                            <h5 class="mg-b-2 tx-spacing--1">{{ $item->last_name }} {{$item->first_name}} {{$item->other_names}}</h5>
                            <p class="tx-color-03 mg-b-25"></p>

                            <!-- <div class="d-flex mg-b-25">
                             <button class="btn btn-xs btn-white flex-fill">Message</button>
                             <button class="btn btn-xs btn-primary flex-fill mg-l-10">Follow</button>
                           </div>  -->


                            <label class="tx-sans tx-10 tx-semibold tx-uppercase tx-color-01 tx-spacing-1 mg-b-15">Contact
                                Information</label>
                            <ul class="list-unstyled profile-info-list">
                            <!-- <li><i data-feather="briefcase"></i> <span class="tx-color-03">{{ $item->email }}</span></li> -->
                                <li><i data-feather="home"></i> <span class="tx-color-03">{{ $item->address }}</span>
                                </li>
                                <li><i data-feather="smartphone"></i> <a href="">{{ $item->phone_number1 }}</a></li>
                                <li><i data-feather="phone"></i> <a href="">{{ $item->phone_number2 }}</a></li>
                                <li><i data-feather="mail"></i> <a href="">{{ $item->email }}</a></li>
                            </ul>



                            <!-- <p class="tx-13 tx-color-02 mg-b-25">Redhead, Innovator, Saviour of Mankind, Hopeless Romantic, Attractive 20-something Yogurt Enthusiast... <a href="">Read more</a></p> -->

                            <div class="d-flex">
                                <div class="profile-skillset flex-fill">
                                    <h4><a href="" class="link-01">1.4k</a></h4>
                                    <label>Requests</label>
                                </div>
                                <div class="profile-skillset flex-fill">
                                    <h4><a href="" class="link-01">2.8k</a></h4>
                                    <label>Done</label>
                                </div>
                                <div class="profile-skillset flex-fill">
                                    <h4><a href="" class="link-01">437</a></h4>
                                    <label>Reviews</label>
                                </div>
                            </div>
                        @endforeach
                    </div><!-- col -->


                </div><!-- row -->

            </div><!-- profile-sidebar -->
            <div class="media-body mg-t-40 mg-lg-t-0 pd-lg-x-10">


            <!--  <nav class="navbar navbar-expand-lg bg-gray-100 bd ">
    <div class="collapse navbar-collapse order-2" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ request()->is('requester-profile') ? 'active' : '' }}">
                <a href="requester-profile" class="nav-link ">Home</a>
            </li>
            <li class="nav-item {{ request()->is('requester-security') ? 'active' : '' }}">
                <a class="nav-link" href="requester-security">Security</a>
            </li>
            <li class="nav-item {{ request()->is('requester-properties') ? 'active' : '' }}">
                <a class="nav-link" href="requester-properties">Properties</a>
            </li>
            <li class="nav-item {{ request()->is('requester-history') ? 'active' : '' }}">
                <a class="nav-link" href="requester-history">Request History</a>
            </li>
            <li class="nav-item {{ request()->is('requester-payments') ? 'active' : '' }}">
                <a class="nav-link" href="requester-payments">Payments</a>
            </li>
            <li class="nav-item">
              <a href="requester-request" class="btn btn-xs btn-primary flex-fill mg-l-10">Request</a>
            </li>
        </ul>
    </div>
</nav> -->
                @include('shared.navbar-3')


                <nav class="navbar navbar-expand-lg navbar-light bg-light bd">
                    <a class="navbar-brand tx-bold tx-spacing--2 order-1" href="#"><h6
                            class="tx-uppercase tx-semibold mg-b-0">@yield('pagename')</h6></a>
                    <button class="navbar-toggler order-2" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <i data-feather="menu" class="wd-20 ht-20"></i>
                    </button>

                    <div class="collapse navbar-collapse order-2" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item {{ request()->is('requester-profile') ? 'active' : '' }}">
                                <a href="{{ url('requester-profile/' . $userId) }}" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item {{ request()->is('requester-security') ? 'active' : '' }}">
                                <a href="{{ url('requester-security/' . $userId) }}" class="nav-link">Security</a>
                            </li>
                            <li class="nav-item {{ request()->is('requester-properties') ? 'active' : '' }}">
                                <a href="{{ url('requester-properties/' . $userId) }}" class="nav-link">Properties</a>
                            </li>
                            <li class="nav-item {{ request()->is('requester-history') ? 'active' : '' }}">
                                <a href="{{ url('requester-history/' . $userId) }}" class="nav-link">Request History</a>
                            </li>
                            <li class="nav-item {{ request()->is('requester-payments') ? 'active' : '' }}">
                                <a href="{{ url('requester-payments/' . $userId) }}" class="nav-link">Payments</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('requester-request/' . $userId) }}"
                                   class="btn btn-xs btn-primary flex-fill mg-l-10" style="color:white;">Request</a>
                            </li>
                        </ul>


                    </div>
                </nav>
                <br>


                <div class="card mg-b-20 mg-lg-b-25">
                    <div class="card-header pd-y-15 pd-x-20 d-flex align-items-center justify-content-between">
                        <h6 class="tx-uppercase tx-semibold mg-b-0 ">@yield('pagename')</h6>

                    </div><!-- card-header  Full Name-->
                    <div class="card-body pd-20 pd-lg-25">

                        @yield('content')


                    </div>

                </div><!-- card -->


            </div><!-- media-body -->
            <!--  <div class="profile-sidebar mg-t-40 mg-lg-t-0 pd-lg-l-25">

             </div> -->
            <!-- profile-sidebar -->
        </div><!-- media -->
    </div><!-- container -->
</div><!-- content -->

@include('shared.footer-1')







@if ($currentURL === "requester-history" || $currentURL === "requester-payments" || $currentURL === "requester-properties" || $currentURL === "requester-request" || is_numeric($currentURL))
    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <script src="{{ asset('assets/js/dashforge.js') }}"></script>

    <!-- Append theme customizer -->
    <script src="{{ asset('lib/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/js/dashforge.settings.js') }}"></script>

    <script src="{{ asset('lib/prismjs/prism.js') }}"></script>
    <script src="{{ asset('lib/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('lib/datatables.net-dt/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ asset('lib/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js') }}"></script>
    <script src="{{ asset('lib/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('assets/js/dashforge.js') }}"></script>

    <script>
        $(function () {
            'use strict'

            $('[data-toggle="tooltip"]').tooltip()

            window.darkMode = function () {
                $('.btn-white').addClass('btn-dark').removeClass('btn-white');
                $('.bg-white').addClass('bg-gray-900').removeClass('bg-white');
                $('.bg-gray-50').addClass('bg-dark').removeClass('bg-gray-50');
            }

            window.lightMode = function () {
                $('.btn-dark').addClass('btn-white').removeClass('btn-dark');
                $('.bg-gray-900').addClass('bg-white').removeClass('bg-gray-900');
                $('.bg-dark').addClass('bg-gray-50').removeClass('bg-dark');
            }

            var hasMode = Cookies.get('df-mode');
            if (hasMode === 'dark') {
                darkMode();
            } else {
                lightMode();
            }
        })
        $(function () {
            'use strict'

            $('#example1').DataTable({
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                }
            });

            $('#example2').DataTable({
                responsive: true,
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                }
            });

            // Select2
            $('.dataTables_length select').select2({minimumResultsForSearch: Infinity});
        });
    </script>


@else
    <!-- Content to display when the route is not 'requester-history' -->
    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <script src="{{ asset('assets/js/dashforge.js') }}"></script>

    <!-- Append theme customizer -->
    <script src="{{ asset('lib/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/js/dashforge.settings.js') }}"></script>

    <script>
        $(function () {
            'use strict'

            $('[data-toggle="tooltip"]').tooltip()

            window.darkMode = function () {
                $('.btn-white').addClass('btn-dark').removeClass('btn-white');
                $('.bg-white').addClass('bg-gray-900').removeClass('bg-white');
                $('.bg-gray-50').addClass('bg-dark').removeClass('bg-gray-50');
            }

            window.lightMode = function () {
                $('.btn-dark').addClass('btn-white').removeClass('btn-dark');
                $('.bg-gray-900').addClass('bg-white').removeClass('bg-gray-900');
                $('.bg-dark').addClass('bg-gray-50').removeClass('bg-dark');
            }

            var hasMode = Cookies.get('df-mode');
            if (hasMode === 'dark') {
                darkMode();
            } else {
                lightMode();
            }
        })
    </script>
@endif

<script>

    jQuery(document).ready(function () {
        ImgUpload();
    });

    function ImgUpload() {
        var imgWrap = "";
        var imgArray = [];

        $('.upload__inputfile').each(function () {
            $(this).on('change', function (e) {
                imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                var maxLength = $(this).attr('data-max_length');

                var files = e.target.files;
                var filesArr = Array.prototype.slice.call(files);
                var iterator = 0;
                filesArr.forEach(function (f, index) {

                    if (!f.type.match('image.*')) {
                        return;
                    }

                    if (imgArray.length > maxLength) {
                        return false
                    } else {
                        var len = 0;
                        for (var i = 0; i < imgArray.length; i++) {
                            if (imgArray[i] !== undefined) {
                                len++;
                            }
                        }
                        if (len > maxLength) {
                            return false;
                        } else {
                            imgArray.push(f);

                            var reader = new FileReader();
                            reader.onload = function (e) {
                                var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                imgWrap.append(html);
                                iterator++;
                            }
                            reader.readAsDataURL(f);
                        }
                    }
                });
            });
        });

        $('body').on('click', ".upload__img-close", function (e) {
            var file = $(this).parent().data("file");
            for (var i = 0; i < imgArray.length; i++) {
                if (imgArray[i].name === file) {
                    imgArray.splice(i, 1);
                    break;
                }
            }
            $(this).parent().parent().remove();
        });
    }


    const textArea = document.getElementById('textAreadetail');
    const count = document.getElementById('count');
    const errorMessage = document.getElementById('error-message');

    textArea.addEventListener('input', function () {
        const remaining = textArea.maxLength - textArea.value.length;

        if (remaining >= 0) {
            count.textContent = remaining;
            errorMessage.textContent = '';
        } else {
            errorMessage.textContent = 'Character limit exceeded';
        }
    });
</script>

<script type="text/javascript">
    //I added event handler for the file upload control to access the files properties.
    document.addEventListener("DOMContentLoaded", init, false);

    //To save an array of attachments
    var AttachmentArray = [];

    //counter for attachment array
    var arrCounter = 0;

    //to make sure the error message for number of files will be shown only one time.
    var filesCounterAlertStatus = false;

    //un ordered list to keep attachments thumbnails
    var ul = document.createElement("ul");
    ul.className = "thumb-Images";
    ul.id = "imgList";

    function init() {
        //add javascript handlers for the file upload event
        document
            .querySelector("#files")
            .addEventListener("change", handleFileSelect, false);
    }

    //the handler for file upload event
    function handleFileSelect(e) {
        //to make sure the user select file/files
        if (!e.target.files) return;

        //To obtaine a File reference
        var files = e.target.files;

        // Loop through the FileList and then to render image files as thumbnails.
        for (var i = 0, f; (f = files[i]); i++) {
            //instantiate a FileReader object to read its contents into memory
            var fileReader = new FileReader();

            // Closure to capture the file information and apply validation.
            fileReader.onload = (function (readerEvt) {
                return function (e) {
                    //Apply the validation rules for attachments upload
                    ApplyFileValidationRules(readerEvt);

                    //Render attachments thumbnails.
                    RenderThumbnail(e, readerEvt);

                    //Fill the array of attachment
                    FillAttachmentArray(e, readerEvt);
                };
            })(f);

            // Read in the image file as a data URL.
            // readAsDataURL: The result property will contain the file/blob's data encoded as a data URL.
            // More info about Data URI scheme https://en.wikipedia.org/wiki/Data_URI_scheme
            fileReader.readAsDataURL(f);
        }
        document
            .getElementById("files")
            .addEventListener("change", handleFileSelect, false);
    }

    //To remove attachment once user click on x button
    jQuery(function ($) {
        $("div").on("click", ".img-wrap .close", function () {
            var id = $(this)
                .closest(".img-wrap")
                .find("img")
                .data("id");

            //to remove the deleted item from array
            var elementPos = AttachmentArray.map(function (x) {
                return x.FileName;
            }).indexOf(id);
            if (elementPos !== -1) {
                AttachmentArray.splice(elementPos, 1);
            }

            //to remove image tag
            $(this)
                .parent()
                .find("img")
                .not()
                .remove();

            //to remove div tag that contain the image
            $(this)
                .parent()
                .find("div")
                .not()
                .remove();

            //to remove div tag that contain caption name
            $(this)
                .parent()
                .parent()
                .find("div")
                .not()
                .remove();

            //to remove li tag
            var lis = document.querySelectorAll("#imgList li");
            for (var i = 0; (li = lis[i]); i++) {
                if (li.innerHTML == "") {
                    li.parentNode.removeChild(li);
                }
            }
        });
    });

    //Apply the validation rules for attachments upload
    function ApplyFileValidationRules(readerEvt) {
        //To check file type according to upload conditions
        if (CheckFileType(readerEvt.type) == false) {
            alert(
                "The file (" +
                readerEvt.name +
                ") does not match the upload conditions, You can only upload jpg/png/gif files"
            );
            e.preventDefault();
            return;
        }

        //To check file Size according to upload conditions
        if (CheckFileSize(readerEvt.size) == false) {
            alert(
                "The file (" +
                readerEvt.name +
                ") does not match the upload conditions, The maximum file size for uploads should not exceed 300 KB"
            );
            e.preventDefault();
            return;
        }

        //To check files count according to upload conditions
        if (CheckFilesCount(AttachmentArray) == false) {
            if (!filesCounterAlertStatus) {
                filesCounterAlertStatus = true;
                alert(
                    "You have added more than 4 files. According to upload conditions you can upload 4 files maximum"
                );
            }
            e.preventDefault();
            return;
        }
    }

    //To check file type according to upload conditions
    function CheckFileType(fileType) {
        if (fileType == "image/jpeg") {
            return true;
        } else if (fileType == "image/png") {
            return true;
        } else if (fileType == "image/gif") {
            return true;
        } else {
            return false;
        }
        return true;
    }

    //To check file Size according to upload conditions
    function CheckFileSize(fileSize) {
        if (fileSize < 300000) {
            return true;
        } else {
            return false;
        }
        return true;
    }

    //To check files count according to upload conditions
    function CheckFilesCount(AttachmentArray) {
        //Since AttachmentArray.length return the next available index in the array,
        //I have used the loop to get the real length
        var len = 0;
        for (var i = 0; i < AttachmentArray.length; i++) {
            if (AttachmentArray[i] !== undefined) {
                len++;
            }
        }
        //To check the length does not exceed 10 files maximum
        if (len > 3) {
            return false;
        } else {
            return true;
        }
    }

    //Render attachments thumbnails.
    function RenderThumbnail(e, readerEvt) {
        var li = document.createElement("li");
        ul.appendChild(li);
        li.innerHTML = [
            '<div class="img-wrap"> <span class="close">&times;</span>' +
            '<img class="thumb" src="',
            e.target.result,
            '" title="',
            escape(readerEvt.name),
            '" data-id="',
            readerEvt.name,
            '"/>' + "</div>"
        ].join("");

        var div = document.createElement("div");
        div.className = "FileNameCaptionStyle";
        li.appendChild(div);
        div.innerHTML = [readerEvt.name].join("");
        document.getElementById("Filelist").insertBefore(ul, null);
    }

    //Fill the array of attachment
    function FillAttachmentArray(e, readerEvt) {
        AttachmentArray[arrCounter] = {
            AttachmentType: 1,
            ObjectType: 1,
            FileName: readerEvt.name,
            FileDescription: "Attachment",
            NoteText: "",
            MimeType: readerEvt.type,
            Content: e.target.result.split("base64,")[1],
            FileSizeInBytes: readerEvt.size
        };
        arrCounter = arrCounter + 1;
    }

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>


    $(document).ready(function () {
        $('#updateHomeOwnerProfileForm').submit(function (e) {
            e.preventDefault();
            let formData = new FormData(this);
            formData.append('_token', '{{ csrf_token() }}');
            $.ajax({
                url: 'requester-update-home-owner-profile',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data.statusCode === 200) {
                        toastr.success(data.message, 'Success');
                    } else {
                        toastr.error(data.message, 'Error');
                    }
                },
                error: function (xhr, status, error) {
                    toastr.error(error, 'Error');
                }
            });
        });


        $('.btn-delete').on('click', function () {
            var theId = $(this).data('id');
            $('#the_id').val(theId);
        });

        $('.deletePropery').on('submit', function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            formData.append('_token', '{{ csrf_token() }}');
            $.ajax({
                url: '{{ url('requester-remove-property') }}',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data.statusCode === 200) {
                        toastr.success(data.message, 'Success');
                        setTimeout(function () {
                            window.location.href = '{{ url('requester-properties') }}';
                        }, 3000);
                    } else {
                        toastr.error(data.message, 'Error');
                    }
                },
                error: function (xhr, status, error) {
                    toastr.error(error, 'Error');
                    console.error(xhr, status, error);
                }
            });
        });


        $('.btn-deleteRequest').on('click', function () {
            var theId = $(this).data('id');
            $('#the_id').val(theId);
        });

        $('.deleteRequest').on('submit', function (e) {

            e.preventDefault();
            var formData = new FormData(this);
            formData.append('_token', '{{ csrf_token() }}');
            $.ajax({
                url: '{{ url('requester-remove-request') }}',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data.statusCode === 200) {
                        toastr.success(data.message, 'Success');
                        setTimeout(function () {
                            window.location.href = '{{ url('requester-history') }}';
                        }, 3000);
                    } else {
                        toastr.error(data.message, 'Error');
                    }
                },
                error: function (xhr, status, error) {
                    toastr.error(error, 'Error');
                    console.error(xhr, status, error);
                }
            });
        });


    });


    $('.selectServices').select2({
        placeholder: 'Choose all services you want',
        maximumSelectionLength: 5
    });


    toastr.options = {
        "closeButton": true,
        "positionClass": "toast-top-right",
        "timeOut": 5000,
    };


    function reloading(delay, path) {
        setTimeout(function () {
            window.location.href = path;
        }, delay);

    }

    $(document).ready(function () {


        $('.addproperty').submit(function (e) {
            alert("jk")
            e.preventDefault();
            let formData = new FormData(this);
            formData.append('_token', '{{ csrf_token() }}');
            $.ajax({
                url: '{{ url('requester-add-home-owner-property') }}',
                // url: 'requester-add-home-owner-property',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data.statusCode === 200) {
                        toastr.success(data.message, 'Success');
                        // Redirect to a new URL

                        reloading(500, '{{ url('requester-properties') }}')


                    } else {
                        toastr.error(data.message, 'Error');
                    }
                },
                error: function (xhr, status, error) {
                    toastr.error(error, 'Error');
                }
            });
        });


        $('#editproperty').on('submit', function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            // Append the CSRF token to the form data
            formData.append('_token', '{{ csrf_token() }}');

            $.ajax({
                url: '{{ url('requester-editing-property') }}',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data.statusCode === 200) {
                        toastr.success(data.message, 'Success');
                        // Redirect to a new URL after a delay
                        setTimeout(function () {
                            window.location.href = '{{ url('requester-properties') }}';
                        }, 500);
                    } else {
                        toastr.error(data.message, 'Error');
                    }
                },
                error: function (xhr, status, error) {
                    toastr.error(error, 'Error');
                    console.error(xhr, status, error);
                }
            });
        });


        $('#makeRequest').on('submit', function (e) {

            e.preventDefault();

            var selectedValues = $('.selectServices').val();
            alert(selectedValues);

            var formData = new FormData(this);
            // Check if any values are selected
            if (selectedValues.length > 0) {
                // Add the selected values to the FormData object
                for (var i = 0; i < selectedValues.length; i++) {
                    formData.append('selectServices[]', selectedValues[i]);
                }

            }
            // Append the CSRF token to the form data
            formData.append('_token', '{{ csrf_token() }}');

            $.ajax({
                url: '{{ url('requester-add-request') }}',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (data) {


                    if (data.statusCode === 200) {
                        toastr.success(data.message, 'Success');
                        // Redirect to a new URL after a delay
                        setTimeout(function () {
                            window.location.href = '{{ url('requester-history') }}';
                        }, 500);
                    } else {
                        toastr.error(data.message, 'Error');
                    }
                },
                error: function (xhr, status, error) {
                    toastr.error(error, 'Error');
                    console.error(xhr, status, error);
                }
            });
        });


    });


</script>

<script>
    window.onload = function () {
        if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;
                document.getElementById("property_location").value = latitude + "," + longitude;
            });
        } else {
            document.getElementById("property_location").value = "Geolocation is not supported by your browser.";
        }
    };

    $(".image-box").click(function (event) {
        var previewImg = $(this).children("img");

        $(this)
            .siblings()
            .children("input")
            .trigger("click");

        $(this)
            .siblings()
            .children("input")
            .change(function () {
                var reader = new FileReader();

                reader.onload = function (e) {
                    var urll = e.target.result;
                    $(previewImg).attr("src", urll);
                    previewImg.parent().css("background", "transparent");
                    previewImg.show();
                    previewImg.siblings("p").hide();
                };
                reader.readAsDataURL(this.files[0]);
            });
    });


    // @if ($currentURL === "requester-edit-property")
    // $(document).ready(function () {
    //     // New image source URL (enclosed in quotes)
    //     var newImageUrl = "{{ asset($property->property_image) }}";
    //     // Get a reference to the image element
    //     var image = document.getElementById('editImageproperty');
    //     // Change the src attribute of the image
    //     image.src = newImageUrl;
    // });
    // @endif


</script>


</body>
</html>
