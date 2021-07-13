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
        @if($errors->any())
            <div class="alert alert-danger" style="margin-top: 10px">
                <h4 style="color: black;font-size: 14px">{{$errors->first()}}</h4>
            </div>
        @endif
        @if(\Illuminate\Support\Facades\Session::has('msg'))
            <div class="alert alert-success" style="margin-bottom: 0px!important;margin-top: 10px">
                <h4 style="color: black">{{\Illuminate\Support\Facades\Session::get("msg")}}</h4>
            </div>
        @endif
        <div style="background: white;padding-bottom: 200px">
            <div style="padding-top: 50px">
                <h2 style="background: #f7db07;padding: 20px;width: 400px;">Completed Projects</h2>

              <div style="padding: 35px">
                  <p style="margin-top: 25px;color: #1d05f7;font-size: 20px;font-weight: bold">2016 School Renovations</p>
                  <p style="font-size: 16px;margin-top: 15px">
                      The School Renovation project involved upgrades the Teacher Faculty Room and the Prinicipal's Office. The Teacher Faculty Room received new flooring, new desks, and new furniture.  The Principal's Office also received new furniture, but additionally, FakoDev funds provided new doors and windows.


                  </p>
                  <p style="font-size: 16px;margin-top: 15px">
                      It might not look like a lot, but these projects can change the daily lives of the teachers which can then produce a big impact in the children. We thank all that contributed to this project!



                  </p>
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
