@extends('master')




@section('content')



    <!--/inner_banner-->
    <div class="inner_banner">
    </div>
    <!--//inner_banner-->
    <!--/short-->
    <div class="services-breadcrumb">
        <div class="inner_breadcrumb">

            <ul class="short">
                <li><a href="{{url('index')}}">Home</a><span>|</span></li>
                <li>Ndurumo</li>
            </ul>
        </div>
    </div>
    <!--//short-->
    <!-- Services -->
    <div class="services py-5">
        <div class="container">
            <div class="w3-head-all text-center mb-5">
                <h3>Ndurumo</h3>
            </div>
            <div class="service-grids row">
                <div class="col-lg-4 service_left_grid">
                    <img width="448" height="299" src="{{asset('asset/images/ser11.jpg')}}" alt="" class="img-fluid" />
                </div>
                <div class="col-lg-8 service_right_grid row">
                    <div class="col-lg-6">
                        <div class="innergrid1 picture margin">

                            <h3>Description</h3>
                            <p>40 by 80 plots with ready title deeds.</p>

                            <p>The plots are near Athi shopping centre where amenities such as schools,hospitals and a police post are located.</p>

                            <p>The roads are all weather and can be accessed via public means(matatus).</p>
                        </div>
                    </div>
                    <!--<div class="col-lg-6">
                        <div class="innergrid1 check margin">
                            <h3>Office Houses</h3>
                            <p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed.</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6">
                        <div class="innergrid1 deciduous">
                            <h3>Guest Houses</h3>
                            <p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="innergrid1 lamp">
                            <h3>Conceptual design</h3>
                            <p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed.</p>
                        </div>
                    </div>-->
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="serv-grids">
            <div class="container">
                <div class="serv-grids-main-1 row">
                    <div class="col-md-4 serv-grid1">
                        <div class="inner_grid">
                            <h3>Ndurumo 1</h3>
                            <p></p>
                            <a href="{{url('ndurumo_bookings')}}" data-toggle="" data-target="" role="button">Bookings and Buying</a>
                        </div>
                    </div>
                    <div class="col-md-4 serv-grid2">
                        <div class="inner_grid">
                            <h3>Ndurumo 2 </h3>
                            <p></p>
                            <a href="{{url('ndurumo_bookings')}}" data-toggle="" data-target="" role="button">Bookings and Buying</a>
                        </div>
                    </div>
                    <div class="col-md-4 serv-grid3">
                        <div class="inner_grid">
                            <h3>Ndurumo 3</h3>
                            <p></p>
                            <a href="{{url('ndurumo_bookings')}}" data-toggle="" data-target="" role="button">Bookings and Buying</a>
                        </div>
                    </div>
                    <div class="col-md-4 serv-grid3">
                        <div class="inner_grid">
                            <h3>Ndurumo 4</h3>
                            <p></p>
                            <a href="{{url('ndurumo_bookings')}}" data-toggle="" data-target="" role="button">Bookings and Buying</a>
                        </div>
                    </div>
                    <div class="col-md-4 serv-grid3">
                        <div class="inner_grid">
                            <h3>Ndurumo 5</h3>
                            <p></p>
                            <a href="{{url('ndurumo_bookings')}}" data-toggle="" data-target="" role="button">Booking and Buying</a>
                        </div>
                    </div>
                    <div class="col-md-4 serv-grid3">
                        <div class="inner_grid">
                            <h3>Ndurumo 6</h3>
                            <p></p>
                            <a href="{{url('ndurumo_bookings')}}" data-toggle="" data-target="" role="button">Booking and Buying</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Services -->
    <!-- agile_testimonials -->

    <!-- //agile_testimonials -->


    @endsection