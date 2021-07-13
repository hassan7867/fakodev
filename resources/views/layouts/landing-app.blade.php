<!doctype html>
<html lang="en">


<!-- Mirrored from appscred.com/html/saasly/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 10:48:32 GMT -->
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!--====== Title ======-->
    <title>{{env('APP_NAME')}}</title>

    <!--====== Favicon Icon ======-->
     <link rel="shortcut icon" href="{{url('')}}/logo.webp" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{url('')}}/assets/css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{url('')}}/assets/css/font-awesome.min.css">

    <!--====== magnific popup css ======-->
    <link rel="stylesheet" href="{{url('')}}/assets/css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{url('')}}/assets/css/slick.css">

    <!--====== animation css ======-->
    <link rel="stylesheet" href="{{url('')}}/assets/css/animate.min.css">

    <!--====== custom animation css ======-->
    <link rel="stylesheet" href="{{url('')}}/assets/css/custom-animation.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{url('')}}/assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{url('')}}/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('bootstrap.min.css')}}" rel="stylesheet">

    <!--====== jquery js ======-->
    <script src="{{url('')}}/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{url('')}}/assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{url('')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{url('')}}/assets/js/popper.min.js"></script>

    <!--====== magnific popup js ======-->
    <script src="{{url('')}}/assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== wow js ======-->
    <script src="{{url('')}}/assets/js/wow.js"></script>

    <!--====== Slick js ======-->
    <script src="{{url('')}}/assets/js/slick.min.js"></script>

    <!--====== counterup js ======-->
    <script src="{{url('')}}/assets/js/jquery.counterup.min.js"></script>
    <script src="{{url('')}}/assets/js/waypoints.min.js"></script>

    <!--====== Main js ======-->
    <script src="{{url('')}}/assets/js/main.js"></script>
    <script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>

    <script type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('jquery/3.5.1/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('popper/popper.min.js')}}"></script>
    <style>
        .blackcolorlink {
            color: black !important;
        }

        .activenavlink {
            border-bottom: 2px solid;
        }

        hr.new5 {
            border: 2px solid #6b9ce8;
            /*border-radius: 5px;*/
        }

        .facustom {
            padding: 10px;
            font-size: 20px;
            width: 40px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            border-radius: 50%;
        }

        .facustom:hover {
            opacity: 0.7;
            color: white;
        }

        .fa-facebook {
            background: #3B5998;
            color: white;
        }

        .fa-twitter {
            background: #55ACEE;
            color: white;
        }

        /*Cookie Consent Begin*/
        #cookieConsent {
            background-color: rgba(20,20,20,0.8);
            min-height: 26px;
            font-size: 14px;
            color: #ccc;
            line-height: 26px;
            padding: 20px;
            font-family: "Trebuchet MS",Helvetica,sans-serif;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            display: none;
            z-index: 9999;
        }
        #cookieConsent a {
            color: #4B8EE7;
            text-decoration: none;
        }
        #closeCookieConsent {
            float: right;
            display: inline-block;
            cursor: pointer;
            height: 20px;
            width: 20px;
            margin: -15px 0 0 0;
            font-weight: bold;
        }
        #closeCookieConsent:hover {
            color: #FFF;
        }
        #cookieConsent a.cookieConsentOK {
            background-color: #6b9ce8;
            color: white;
            display: inline-block;
            border-radius: 5px;
            padding: 0 20px;
            cursor: pointer;
            float: right;
            margin: 0 60px 0 10px;
        }
        #cookieConsent a.cookieConsentOK:hover {
            background-color: #6b9ce8;
        }
        /*Cookie Consent End*/

        .dropdown:hover .dropdown-menu{
            display: block;
        }
        .dropdown-menu{
            margin-top: 0;
        }
        .onlyonmobile{
            display: none;
        }

        @media screen and (max-width: 600px) {
            .onlyonmobile{
                display: inline;
            }
        }
    </style>

</head>

<body>
<!--====== PRELOADER PART START ======-->
<div id="cookieConsent">
    <div id="closeCookieConsent">x</div>
    This website is using cookies. <a href="{{url('')}}" target="_blank">More info</a>. <a class="cookieConsentOK">That's Fine</a>
</div>

<div class="preloader" id="preloader">
    <div class="three ">
        <div class="loader" id="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>

<header class="header-area">
    <div class="header-nav" style="top: 0px">
        <div class="container">
            <div class="row">
                {{--<div class="col-lg-5">--}}

                {{--</div>--}}
                <div class="col-lg-12">
                    <div class="navigation">
                        <nav class="navbar navbar-expand-lg navbar-light " style="margin-top: 2px;margin-bottom: 30px">
                            <a class="navbar-brand" href="{{url('')}}" style="color: black;font-size: 30px"><img src="{{url('logo.webp')}}"></a>

                            <a class="navbar-brand-2" href="{{url('')}}" style="color: black;font-size: 30px"><img src="{{url('logo.webp')}}"></a>
                            <!-- logo -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation" style="color: black">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button> <!-- navbar toggler -->

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent" style="margin-top: 85px">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link {{!\Request::is('/') ? 'blackcolorlink ' : ''}}{{\Request::is('/') ? 'activenavlink' : ''}}"
                                           href="{{url('')}}">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{!\Request::is('/') ? 'blackcolorlink ' : ''}}{{\Request::is('what-we-do') ? 'activenavlink' : ''}}"
                                           href="{{url('what-we-do')}}">WHAT WE DO </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{!\Request::is('/') ? 'blackcolorlink ' : ''}}{{\Request::is('get-involved') ? 'activenavlink' : ''}}"
                                           href="{{url('get-involved')}}">GET INVOLVED </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{!\Request::is('/') ? 'blackcolorlink ' : ''}} {{\Request::is('projects') ? 'activenavlink' : ''}}{{\Request::is('updates') ? 'activenavlink' : ''}}{{\Request::is('completed-projects') ? 'activenavlink' : ''}}{{\Request::is('projects-in-pipeline') ? 'activenavlink' : ''}}" href="{{url('projects')}}">PROJECTS </a>
                                        <ul class="sub-menu">
                                            <li><a href="{{url('updates')}}">Updates</a></li>
                                            <li><a href="{{url('completed-projects')}}">Completed Projects</a></li>
                                            <li><a href="{{url('projects-in-pipeline')}}">Projects in Pipeline</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{!\Request::is('/') ? 'blackcolorlink ' : ''}}{{\Request::is('support-us') ? 'activenavlink' : ''}}"
                                           href="{{url('support-us')}}">SUPPORT US </a>

                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{!\Request::is('/') ? 'blackcolorlink ' : ''}} {{\Request::is('meet-our-team') ? 'activenavlink' : ''}}{{\Request::is('contact') ? 'activenavlink' : ''}}" href="{{url('meet-our-team')}}">MEET OUR TEAM </a>
                                        <ul class="sub-menu">
                                            <li><a href="{{url('contact')}}" style="color: black">CONTACT</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->

                        </nav>
                    </div> <!-- navigation -->
                </div>
            </div> <!-- row -->
        </div>
    </div>
</header>

<!--====== HEADER PART ENDS ======-->
<div class="container">
    @yield('content')
</div>

<!--====== FOOTER PART START ======-->

<footer class="footer-area" style="background-color: #1b6c85;padding-top: 0px;margin-top: 100px;">
    <div class="container">
        <div class="footer-items" style="margin-top: 0px;border-top: 0px">
            <div class="row">
                <div class="col-md-4">
                    <p style="color: #ffa600">​​CALL US</p>
                    <p style="color: white;margin-top: 20px">1-920-252-2386</p>
                </div>
                <div class="col-md-4">
                    <p style="color: #ffa600">FIND US</p>
                    <p style="color: white;margin-top: 20px">Appleton, WI</p>
                </div>
                <div class="col-md-4">
                    <p style="color: #ffa600">​​CONNECT WITH US</p>
                    <a target="_blank" href="#" class="fa fa-facebook facustom" style="color: white"></a>
                </div>
            </div>

            <div style="margin-top: 30px">
                <p style="text-align: center;padding: 20px;padding-top: 0px;color: white">Copyright 2021 @Fako Development Organization. All Rights
                    Reserved</p>
            </div>

        </div>
    </div>
</footer>

<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color: #00000033">
{{--            <div class="modal-header">--}}
{{--                <h5 class="modal-title">YouTube Video</h5>--}}
{{--                <button type="button" class="close" data-dismiss="modal">&times;</button>--}}
{{--            </div>--}}
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe id="cartoonVideo" class="embed-responsive-item" width="560" height="315" src="//www.youtube.com/embed/YE7VzlLtp-4" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="trustedsite-trustmark" data-type="202" data-width="120"  data-height="50"></div>


<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TO TOP START ======-->

<a class="back-to-top" style="display: none;opacity: 0">
    <i class="fal fa-angle-up"></i>
</a>

<!--====== BACK TO TOP ENDS ======-->

<script>

</script>
</body>


</html>

