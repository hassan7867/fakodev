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

        .circle {
            width: 70px;
            height: 70px;
            line-height: 70px;
            border-radius: 50%;
            font-size: 50px;
            color: black;
            text-align: center;
            background: white;
            border: 3px solid #ffa600;
        }

    </style>
    <section  style="padding-top: 200px;">
        {{--        <div class="banner__bg"></div>--}}
        <div id="slider" style="width: 100%!important;">
            <a href="#" class="control_next">></a>
            <a href="#" class="control_prev"><</a>
            <ul>
                <li><img src="{{url('pr1.webp')}}" style="width: 1200px;height: 450px"></li>
                {{--<li ><img src="{{url('3.webp')}}" style="width: 1200px;height: 450px"></li>--}}
                {{--                <li><img src="{{url('2.webp')}}" style="width: 1200px;height: 450px"></li>--}}
            </ul>
        </div>
        <div style="float: right;margin-top: -15px">
            <h1 style="padding: 10px;background: #4eabc7;color: white;border-bottom-right-radius: 20px;text-align: center;width: 400px">WHAT WE DO
            </h1>
        </div>
        <div class="row" style="margin: 0 auto;max-width: 1200px;margin-top: 120px">
            <div class="col-md-4">
                <div style="margin: 0 auto;max-width: 300px">
                    <div style="margin: 0 auto;max-width: 70px">
                        <h1 style="text-align: center;" class="circle">1</h1>
                    </div>
                    <h3 style="margin-top: 15px;color: #66339c;text-align: center">Fako Scholars</h3>
                    <p style="font-size: 16px;margin-top: 15px">
                        <span style="font-weight: bold">FakoDev</span> seeks to support activities in Southern Cameroon that can improve the educational system for primary school students. To that end, our organization provides academic support to selected public and private schools in the region. Elements of support include:


                    </p>
                    <ul>
                        <li style="font-size: 16px;margin-top: 15px">
                            Scholarships that cover school fees and basic school supplies to deserving students, especially girls from underprivileged families.


                        </li>
                        <li style="font-size: 16px;margin-top: 15px">
                            Computers and educational equipment to school staff with a demonstrated record of performance.


                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-md-4">
                <div style="margin: 0 auto;max-width: 300px">
                    <div style="margin: 0 auto;max-width: 70px">
                        <h1 style="text-align: center;" class="circle">2</h1>
                    </div>
                    <h3 style="margin-top: 15px;color: #66339c;text-align: center">Health Systems</h3>
                    <p style="font-size: 16px;margin-top: 15px">
                        <span style="font-weight: bold">FakoDev</span>
                        supports local health systems in Southern Cameroon by providing basic health and cleaning supplies to hospitals and clinics across the region.  Entities in underserved areas receive the greatest attention.

                    </p>
                    <p style="margin-top: 15px;font-size: 16px">
                        This effort also includes support towards campaigns against the spread of HIV/AIDS.
                    </p>
                </div>

            </div>
            <div class="col-md-4">
                <div style="margin: 0 auto;max-width: 300px">
                    <div style="margin: 0 auto;max-width: 70px">
                        <h1 style="text-align: center;" class="circle">3</h1>
                    </div>
                    <h3 style="margin-top: 15px;color: #66339c;text-align: center">Little Libraries</h3>
                    <p style="font-size: 16px;margin-top: 15px">
                        <span style="font-weight: bold">FakoDev</span>
                        supports the establishment and growth of free exchange libraries across Southern Cameroon. Books donated for this cause is made available to students across the school system of Southern Cameroon.

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
            // setInterval(function () {
            //     moveRight();
            // }, 8000);
            // var slideCount = $('#slider ul li').length;
            // var slideWidth = $('#slider ul li').width();
            // var slideHeight = $('#slider ul li').height();
            // var sliderUlWidth = slideCount * slideWidth;
            //
            // $('#slider').css({ width: slideWidth, height: slideHeight });
            //
            // $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
            //
            // $('#slider ul li:last-child').prependTo('#slider ul');
            //
            // function moveLeft() {
            //     $('#slider ul').animate({
            //         left: + slideWidth
            //     }, 200, function () {
            //         $('#slider ul li:last-child').prependTo('#slider ul');
            //         $('#slider ul').css('left', '');
            //     });
            // };
            //
            // function moveRight() {
            //     $('#slider ul').animate({
            //         left: - slideWidth
            //     }, 200, function () {
            //         $('#slider ul li:first-child').appendTo('#slider ul');
            //         $('#slider ul').css('left', '');
            //     });
            // };
            //
            // $('a.control_prev').click(function () {
            //     moveLeft();
            // });
            //
            // $('a.control_next').click(function () {
            //     moveRight();
            // });

        });

    </script>
    <!--====== BANNER PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

@endsection
