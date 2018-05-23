@extends('master')




@section('content')




<!--/banner-->
<section class="banner-top">
    <div class="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="carousel-caption">

                        <h3>Choose The best way to find a plot </h3>

                        <!--<a href="#" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read More <i class="fa fa-caret-right" aria-hidden="true"></i></a>-->


                    </div>
                </div>
                <div class="carousel-item item2">
                    <div class="carousel-caption">

                        <h3>Pick The best way to find affordable plots</h3>

                        <!--<a href="#" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read More <i class="fa fa-caret-right" aria-hidden="true"></i></a>-->


                    </div>
                </div>
                <div class="carousel-item item3">
                    <div class="carousel-caption">

                        <h3>The best way to find plots for building</h3>

                        <!--<a href="#" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read More <i class="fa fa-caret-right" aria-hidden="true"></i></a>-->
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--/banner position-->
        <div class="w3-ban-pos">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 w3-pos-left">
                        <h1>Our Land services</h1>
                        <h2>Find the best plots available</h2>
                        <p>Jawaki Properties has the largest inventory of Land Plots Within Nairobi and its outskirts  </p>
                    </div>
                    <div class="col-lg-8 w3-pos-right">
                        <div class="row">
                            <div class="col-lg-6 w3-pos-inner">
                                <i class="fas fa-home"></i>
                                <h3>Selling Service</h3>
                                <p>Jawaki Properties provides you with ready to buy plots, no hustles involved </p>

                            </div>
                            <div class="col-lg-6 w3-pos-inner">
                                <i class="fas fa-warehouse"></i>
                                <h3>Renting Service</h3>
                                <p>Jawaki Properties provides you quality renting spaces as agreed </p>
                            </div>
                            <div class="col-lg-6 w3-pos-inner">
                                <i class="fab fa-accusoft"></i>
                                <h3>Property Listing</h3>
                                <p>All our Properties have been listed and have their respective documents available </p>

                            </div>
                            <div class="col-lg-6 w3-pos-inner">
                                <i class="fab fa-monero"></i>
                                <h3>Property Management</h3>
                                <p>We have the best Property management system, contact us to have your property managed by professionals </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//banner position-->
    </div>
</section>
<!--//banner-->
<!-- about -->
<div class="news">
    <div class="container">
        <div class="w3-head-all text-center mb-5">
            <h3>About us</h3>
        </div>
        <div class="news-agileinfo">
            <div class="news-w3row">
                <div class="wthree-news-grids row">
                    <div class="col-lg-6 datew3-agileits">
                        <img src="{{asset('asset/images/2c.jpg')}}" class="img-responsive img-fluid" alt=""/>
                    </div>
                    <div class="col-lg-6 datew3-agileits-info ">
                        <h5><a href="#" data-toggle="modal" data-target="#exampleModalCenter" role="button">Wide Range of Properties</a></h5>
                        <p>At Jawaki Properties; we believe efficient quality management is the prerequisite for reaching our high quality targets. Adjusting flexibly to technology development and adapting to changing market requirements as well ongoing development of the quality management system and continuous quality improvements in our products, services and processes are an integral part of our approach to value creation.</p>
                    </div>
                </div>
                <div class="wthree-news-grids news-grids-mdl row">
                    <div class="col-lg-6 datew3-agileits-info datew3-agileits-info-fltlft">
                        <h5><a href="#" data-toggle="modal" data-target="#exampleModalCenter" role="button"> Ready Agents for Your Service</a></h5>
                        <p>At Jawaki Properties; we believe efficient quality management is the prerequisite for reaching our high quality targets. Adjusting flexibly to technology development and adapting to changing market requirements as well ongoing development of the quality management system and continuous quality improvements in our products, services and processes are an integral part of our approach to value creation.</p>
                    </div>
                    <div class="col-lg-6  datew3-agileits datew3-agileits-fltrt">
                        <img src="{{asset('asset/images/3a.jpg')}}" class="img-responsive img-fluid" alt=""/>
                    </div>
                </div>
                <div class="wthree-news-grids row">
                    <div class="col-lg-6 datew3-agileits">
                        <img src="{{asset('asset/images/kit.jpg')}}" class="img-responsive img-fluid" alt=""/>
                    </div>
                    <div class="col-lg-6 datew3-agileits-info ">
                        <h5><a href="#" data-toggle="modal" data-target="#exampleModalCenter" role="button">Best Price Guarantee!</a></h5>
                        <p>At Jawaki Properties; we believe efficient quality management is the prerequisite for reaching our high quality targets. Adjusting flexibly to technology development and adapting to changing market requirements as well ongoing development of the quality management system and continuous quality improvements in our products, services and processes are an integral part of our approach to value creation.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- //about -->
<!-- /pricing -->
<!--<div class="plans-section py-5">
    <div class="plans-main container-fluid">
        <div class="w3-head-all text-center mb-5">
            <h3>Our Plans</h3>
        </div>
        <div class="plans-grids row">
            <div class="price-grid col-md-3">
                <div class="price-block agile">
                    <div class="price-gd-top pric-clr1">
                        <h4>Basic</h4>
                        <img src="{{asset('asset/images/p3.jpg')}}" alt="img" class="img-fluid">
                        <h5>Normal estates</h5>
                        <h3><span>$</span>30</h3>
                        <p>double bedroom</p>
                        <p>swimming pool</p>
                    </div>
                    <div class="price-gd-bottom">
                        <div class="price-list">

                            <ul>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>

                            </ul>
                        </div>
                        <div class="price-selet pric-sclr1">
                            <a href="#" class="w3_agileits_sign_up2" data-toggle="modal" data-target="#exampleModalCenter" role="button" >Select plan</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="price-grid col-md-3">
                <div class="price-block price-block1 agile">
                    <div class="price-gd-top pric-clr2">
                        <h4>Standard</h4>
                        <img src="{{asset('asset/images/p2.jpg')}}" alt="img" class="img-fluid">
                        <h5>Medium estates</h5>
                        <h3><span>$</span>180</h3>
                        <p>triple bedroom</p>
                        <p>swimming pool</p>
                    </div>
                    <div class="price-gd-bottom">
                        <div class="price-list">
                            <ul>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>

                            </ul>

                        </div>
                        <div class="price-selet pric-sclr2">
                            <a href="#" class="w3_agileits_sign_up2" data-toggle="modal" data-target="#exampleModalCenter" role="button" >Select plan</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="price-grid lost col-md-3">
                <div class="price-block price-block2 agile">
                    <div class="price-gd-top pric-clr3">
                        <h4>Expensive </h4>
                        <img src="{{asset('asset/images/p1.jpg')}}" alt="img" class="img-fluid">
                        <h5>Luxary estates</h5>
                        <h3><span>$</span>150</h3>
                        <p>triple bedroom</p>
                        <p>swimming pool </p>

                    </div>
                    <div class="price-gd-bottom">
                        <div class="price-list">
                            <ul>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>

                            </ul>
                        </div>
                        <div class="price-selet pric-sclr3">
                            <a href="#" class="w3_agileits_sign_up2" data-toggle="modal" data-target="#exampleModalCenter" role="button" >Select plan</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="price-grid lost col-md-3">
                <div class="price-block price-block4 agile">
                    <div class="price-gd-top">
                        <h4>platinum  </h4>
                        <img src="{{asset('asset/images/p2.jpg')}}" alt="img" class="img-fluid">
                        <h5>platinum estates</h5>
                        <h3><span>$</span>180</h3>
                        <p>triple bedroom</p>
                        <p>swimming pool </p>

                    </div>
                    <div class="price-gd-bottom">
                        <div class="price-list">
                            <ul>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>

                            </ul>
                        </div>
                        <div class="price-selet pric-sclr3">
                            <a href="#" class="w3_agileits_sign_up2" data-toggle="modal" data-target="#exampleModalCenter" role="button" >Select plan</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</div>-->
<!-- //pricing -->
<!-- agile_testimonials -->

<!-- //agile_testimonials -->



@endsection