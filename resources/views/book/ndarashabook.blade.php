<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTf4f7fbF-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="meta description of the page goes here" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Property Booking Box</title>

    <link rel="shortcut icon" href="{{asset('asset/Booking/css/images/favicon.ico')}}" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('asset/Booking/css/style.css')}}" type="text/css" media="all" />

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3"></script>
    <script type="text/javascript" src="{{asset('asset/Booking/js/jquery.flexslider-min.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/Booking/js/functions.js')}}"></script>
</head>
<body>

<div class="box-shell">
    <div class="property-box">
        <div class="property-box-inner">
            <div class="property-box-nav">
                <ul>
                    <li>
                        <a href="#property-box-tab1" class="active">Description</a>
                    </li>

                    <li>
                        <a href="#property-box-tab2">Gallery</a>
                    </li>

                    <li>
                        <a href="#property-box-tab3">Map</a>
                    </li>

                    <li>
                        <a href="#property-box-tab4">Calendar</a>
                    </li>

                    <li>
                        <a href="#property-box-tab5">Contacts</a>
                    </li>
                </ul>
            </div><!-- /.property-box-nav -->

            <div class="property-box-tabs">
                <div id="property-box-tab1" class="property-box-tab active">
                    <div class="property-box-post">
                        <div class="property-box-post-head">
                            <p>Ndarasha</p>
                        </div><!-- /.property-box-post-head -->

                        <div class="property-box-post-meta">
                            <ul>
                                <li>
                                    Plots

                                    <strong>6</strong>
                                </li>

                                <li>
                                    plot area

                                    <strong>2400 <small>sq m</small></strong>
                                </li>

                                <li>
                                    price

                                    <strong>ksh200,000</strong>
                                </li>
                            </ul>
                        </div><!-- /.property-box-post-meta -->

                        <div class="property-box-post-content">
                            <div class="property-box-post-content-inner">
                                <p>Bookings valid for 14 days after your placement of a booking. Terms and Conditions apply.</p>
                            </div><!-- /.property-box-post-content-inner -->
                        </div><!-- /.property-box-post-content -->
                    </div><!-- /.property-box-post -->
                </div><!-- /.property-box-tab -->

                <div id="property-box-tab2" class="property-box-tab">
                    <div class="property-box-slideshow">
                        <ul class="slides">
                            <li><img src="{{asset('asset/images/1-4.jpg')}}" alt=""></li>
                            <li><img src="{{asset('asset/images/2c.jpg')}}" alt=""></li>
                            <li><img src="{{asset('asset/images/3a.jpg')}}" alt=""></li>
                            <li><img src="{{asset('asset/images/1738.jpg')}}" alt=""></li>
                            <li><img src="{{asset('asset/images/3267.jpg')}}" alt=""></li>
                            <li><img src="{{asset('asset/images/Elah.jpg')}}" alt=""></li>
                            <li><img src="{{asset('asset/images/kit.jpg')}}" alt=""></li>
                        </ul><!-- /.slides -->
                    </div><!-- /.property-box-slideshow -->
                </div><!-- /.property-box-tab -->

                <div id="property-box-tab3" class="property-box-tab">
                    <div class="customMap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.009792323802!2d37.028712814102064!3d-1.1534955991586109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f4152ea367f59%3A0x2f8e48133069bd5f!2sNdarasha+Sundowner+Bar+And+Grill!5e0!3m2!1sen!2ske!4v1526980471625" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                    <div class="address" id="address" >
                        Ndarasha
                    </div><!-- /.address -->
                </div><!-- /.property-box-tab -->

                <div id="property-box-tab4" class="property-box-tab">
                    <div class="property-box-post">
                        <div class="property-box-post-content">
                            <div id="datepicker"></div>
                        </div><!-- /.property-box-post-content -->
                    </div><!-- /.property-box-calendar -->
                </div><!-- /.property-box-tab -->

                <div id="property-box-tab5" class="property-box-tab">
                    <div class="property-box-post">
                        <div class="property-box-post-head">
                            <p>Contact Details</p>
                        </div><!-- /.property-box-post-head -->

                        <div class="property-box-post-content">
                            <ul class="details-list">
                                <li><span>Name:</span> Jawaki Properties LTD</li>
                                <li><span>Phone:</span> +254 720 339-861</li>
                                <li><span>Cell phone:</span> +254 720 407-099</li>
                                <li><span>E-Mail:</span> <a href="jawakipropertiesco@gmail.com">jawakipropertiesco@gmail.com</a></li>
                            </ul><!-- /.details-list -->
                        </div><!-- /.property-box-post-content -->
                    </div><!-- /.property-box-post -->
                </div><!-- /.property-box-tab -->
            </div><!-- /.property-box-tabs -->
        </div><!-- /.property-box-inner -->

        <a href="{{url('payment')}}" class="external-link">External Link</a>
    </div><!-- /.property-box -->
</div><!-- /.box-shell -->

</body>
</html>