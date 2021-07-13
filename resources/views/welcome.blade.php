@extends('layouts.landing-app')
<!--====== BANNER PART START ======-->
@section('content')

    <link href="{{url('')}}/assets/css/works.css" rel="stylesheet">
    <style>
        .respmargintopbtn{
            margin-top: -360px!important;
        }
        .resppaddding1{
            padding: 50px;
        }
        .logomargin1{
            margin-top: 90px
        }
        .logomargin2{
            margin-left: 10px
        }
        .logosizeresp1{
            height: 80px;width: 100px;
        }
        .logosizeresp2{
            height: 80px;width: 80px;
        }
        .resppaddingiconsmain{
            padding: 30px;
        }
        .servicemargin{
            height: 380px;
        }
        @media screen and (max-width: 600px) {
            .respmargintopbtn{
                margin-top: -150px!important;
            }
            .resptopbtn1{
                margin-left: -20px;
            }
            .resppaddding1{
                padding: 0px;
            }
            .logomargin1{
                margin-top: 150px
            }
            .logosizeresp1{
                width: 80px;
                height: 60px;
            }
            .respfontsizelogotext{
                font-size: 14px;
            }
            .logosizeresp2{
                height: 65px;width: 70px;
            }
            .logomargin2{
                margin-left: 0px
            }
            .resppaddingiconsmain{
                padding: 17px;
            }
            .servicemargin{
                height: 470px;
            }
            .btnbottommarginleft{
                margin-left: -64px;
            }
            .btnbottommarginlef2t{
                margin-left: -50px;
            }
        }
        #slider {
            position: relative;
            overflow: hidden;
            margin: 20px auto 0 auto;
            border-radius: 4px;
        }

        #slider ul {
            position: relative;
            margin: 0;
            padding: 0;
            height: 200px;
            list-style: none;
        }

        #slider ul li {
            position: relative;
            display: block;
            float: left;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 450px;
            background: #ccc;
            text-align: center;
            /*line-height: 300px;*/
        }

        a.control_prev, a.control_next {
            position: absolute;
            top: 40%;
            z-index: 999;
            display: block;
            padding: 4% 3%;
            width: auto;
            height: auto;
            background: #2a2a2a;
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            font-size: 18px;
            opacity: 0.8;
            cursor: pointer;
            display: none;
        }

        a.control_prev:hover, a.control_next:hover {
            opacity: 1;
            -webkit-transition: all 0.2s ease;
        }

        a.control_prev {
            border-radius: 0 2px 2px 0;
        }

        a.control_next {
            right: 0;
            border-radius: 2px 0 0 2px;
        }

        .slider_option {
            position: relative;
            margin: 10px auto;
            width: 160px;
            font-size: 18px;
        }

    </style>
    <section  style="padding-top: 200px;">
{{--        <div class="banner__bg"></div>--}}
        <div id="slider" style="width: 100%!important;">
            <a href="#" class="control_next">></a>
            <a href="#" class="control_prev"><</a>
            <ul>
                <li><img src="{{url('1.webp')}}" style="width: 1200px;height: 450px"></li>
                <li ><img src="{{url('3.webp')}}" style="width: 1200px;height: 450px"></li>
                <li><img src="{{url('2.webp')}}" style="width: 1200px;height: 450px"></li>
            </ul>
        </div>
        <div style="float: right;margin-top: -15px">
            <h1 style="padding: 10px;background: #4eabc7;color: white;border-bottom-right-radius: 20px">SUPPORT THE CHILDREN</h1>
        </div>
        <div class="row" style="margin: 0 auto;max-width: 1100px;margin-top: 100px">
            <div class="col-md-4">
                <div style="max-width: 350px">
                    <p style="background: #4eabc7;color: white;padding: 15px;font-size: 20px">SCHOOL OF PROMISE PROJECT</p>
                    <p style="background: #bfeaea;color: black;padding: 25px;margin-top: -20px;font-size: 18px">
                        FAKO Development Organization (FAKODEV) is currently supporting several schools in Southwest region of Cameroon to strengthen the educational system for primary school students in the region.

                        <br>
                        <br>
                        <br>
                        Click <a href="{{url('get_involved')}}">GET INVOLVED</a> to learn more about our FAKO Scholars program.



                    </p>
                    <div style="margin: 0 auto;max-width: 200px;margin-top: -15px">
                        <a href="{{url('projects')}}" style="text-decoration: none;box-shadow: 0 4px 2px -2px gray;;padding: 15px;background: rebeccapurple;color: white;font-size: 18px;font-weight: bold;text-align: center">Find Out More...</a>

                    </div>
                </div>

            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{url('h1.webp')}}">
                        <p style="margin-top: 20px"></p>
                        <a style="margin-top: 20px;text-decoration: none;font-size: 15px" href="{{url('meet-our-team')}}">OUR MISSION</a>
                        <p style="margin-top: 20px">
                            Registered in the State of Wisconsin,  FADO is a non-profit organization dedicated to the improvement of the quality of life of the people of Fako Division in the S.W. Province of the Republic of Cameroon through self-reliant development.
                        </p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{url('h2.webp')}}">
                        <p style="margin-top: 20px"></p>
                        <a style="margin-top: 20px;text-decoration: none;font-size: 15px" href="{{url('get-involved')}}">GET INVOLVED</a>
                        <p style="margin-top: 20px">
                            Register and join the FakoDev mailing list. Stay informed with the latest projects of the foundation.

                        </p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{url('h3.webp')}}">
                        <p style="margin-top: 20px"></p>
                        <a style="margin-top: 20px;text-decoration: none;font-size: 15px" href="{{url('support-us')}}">DONATE</a>
                        <p style="margin-top: 20px">
                            One-time or recurring, all donations to FakoDev are tax deductible.

                        </p>
                    </div>
                    
                </div>
            </div>
        </div>

        {{--<div class="slider_option">--}}
            {{--<input type="checkbox" id="checkbox">--}}
            {{--<label for="checkbox">Autoplay Slider</label>--}}
        {{--</div>--}}



    </section>

    <script>
        jQuery(document).ready(function ($) {

            // $('#checkbox').change(function(){
            //     setInterval(function () {
            //         moveRight();
            //     }, 3000);
            // });
            setInterval(function () {
                moveRight();
            }, 8000);
            var slideCount = $('#slider ul li').length;
            var slideWidth = $('#slider ul li').width();
            var slideHeight = $('#slider ul li').height();
            var sliderUlWidth = slideCount * slideWidth;

            $('#slider').css({ width: slideWidth, height: slideHeight });

            $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

            $('#slider ul li:last-child').prependTo('#slider ul');

            function moveLeft() {
                $('#slider ul').animate({
                    left: + slideWidth
                }, 200, function () {
                    $('#slider ul li:last-child').prependTo('#slider ul');
                    $('#slider ul').css('left', '');
                });
            };

            function moveRight() {
                $('#slider ul').animate({
                    left: - slideWidth
                }, 200, function () {
                    $('#slider ul li:first-child').appendTo('#slider ul');
                    $('#slider ul').css('left', '');
                });
            };

            $('a.control_prev').click(function () {
                moveLeft();
            });

            $('a.control_next').click(function () {
                moveRight();
            });

        });

    </script>
    <!--====== BANNER PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

@endsection
