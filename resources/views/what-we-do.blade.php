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
                <li><img src="{{url('page1.webp')}}" style="width: 1200px;height: 450px"></li>
                {{--<li ><img src="{{url('3.webp')}}" style="width: 1200px;height: 450px"></li>--}}
{{--                <li><img src="{{url('2.webp')}}" style="width: 1200px;height: 450px"></li>--}}
            </ul>
        </div>
        <div style="float: right;margin-top: -15px">
            <h1 style="padding: 10px;background: #4eabc7;color: white;border-bottom-right-radius: 20px;text-align: center;width: 300px">WHAT WE DO
            </h1>
        </div>
        <div class="row" style="margin: 0 auto;max-width: 900px;margin-top: 100px">
            <div class="col-md-6">
                <div>
                   <p style="font-size: 16px">
                       Cameroon, a central African nation, is a typical poor developing country with the majority of its citizens living in forbiddingly poor conditions. The situation in Fako Division, in the Southwest region is very representative of that of the rest of the country: there is a crying need for improving, repairing and developing the health facilities, educational structures and a host of other necessities which are lacking.


                   </p>
                    <p style="margin-top: 10px;font-size: 16px">
                        Driven by the philosophy of self-reliant development, the Fako Development Organization (FADO), a non-profit organization, was created 2005 with an eye to addressing some of these basic challenges to improve the lives of the people of the region. FADO is shaped by the collective commitment to the overall development of Fako Division especially in the areas of education, health and social services such as recreation and other leisure activities. We plan to raise funds to cater to the health facilities in the region: cleaning, provision of healthcare and school supplies etc.


                    </p>
                    <p style="margin-top: 10px;font-size: 16px">
                        FADO is run and supported by Fako elements as well as friends of the region and Cameroonians abroad.


                    </p>
                </div>

            </div>
            <div class="col-md-6">

                    <p style="font-size: 16px">
                        To accomplish its mission, FADO focuses on the realization of projects in the following areas:


                    </p>
                    <ul>
                        <li style="font-size: 16px;margin-top: 15px">
                           <span style="color:#7046a9">Education:</span>  Provide under privileged youths and women with educational opportunities to develop knowledge, skills and abilities that will not only empower them to be responsible and productive citizens but also to improve their lives.


                        </li>
                        <li style="font-size: 16px;margin-top: 15px">
                            <span style="color:#7046a9">Health:</span> The improvement of the health facilities in the area. Education on personal hygiene, healthy nutrition and life-styles.


                        </li>
                        <li style="font-size: 16px;margin-top: 15px">
                            <span style="color:#7046a9">Economic Development:</span> Facilitating the creation of agro-economic initiatives.


                        </li>
                        <li style="font-size: 16px;margin-top: 15px">
                            <span style="color:#7046a9">Recreation:</span>  the provision of recreational facilities and the promotion of cultural activities in the interest of social welfare.


                        </li>
                    </ul>
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
