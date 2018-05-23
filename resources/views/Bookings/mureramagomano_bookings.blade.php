

<link href="{{asset('asset/apart/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />




<!-- for-mobile-apps -->

<!-- //for-mobile-apps -->
<link href="{{asset('asset/apart/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />

<!-- js -->
<script type="text/javascript" src="{{asset('asset/apart/js/jquery-2.1.4.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('asset/apart/css/base.css')}}">
<script src="{{asset('asset/apart/js/modernizr.min.js')}}"></script>
<script src="{{asset('asset/apart/js/jquery.fitvids.js')}}"></script>
<script src="{{asset('asset/apart/js/script.js')}}"></script>

<!-- //js -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('asset/apart/css/font-awesome.min.css')}}" />
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>


<!-- //header -->
</div>
<!-- //banner -->
<div class="about_page">
    <div class="container">
        <h3 class="agile">Murera Magomano Bookings</h3>
        <div id="parentVerticalTab">
            <div class="resp-tabs-container hor_1">
                <div>

                    <div class="col-md-6 easy-left">
                        <img src="{{asset('asset/images/IMG_5497.jpg')}}" alt=" ">
                    </div>
                    <div class="col-md-6 easy-right">
                        <ul>
                            <li><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Ready Title Deed</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Available Transport</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Social Amenities Available </a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Easy Access</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Nearby Police Security</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Within your Bugdet </a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Within your Bugdet </a></li>
                            <li><a href="{{url('mureramagomanobook')}}" class="btn btn-primary">Book This Plot</a></li>
                            <li><a href="#" class="btn btn-primary">Download Title Deed (Recommended)</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <p>40 by 80 plots with ready title deeds.</p>

                    <p>The plots are near athi shopping centre where government e.g schools,hospitals and  police post are located.</p>

                    <p>The roads are all weather and they can be accessed using public transport(matatus).</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="team-page">
    <div class="container">
        <h3 class="agile">Map Location</h3>
        <div class="inner_sec_info_wthree_agile row">
            <div class="col-md-8 map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6697.7475067421165!2d36.95583794175594!3d-1.1456971310607353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f38afb668ec73%3A0x6f35ba025f7689fd!2sRuiru+Kamiti+Road%2C+Ruiru!5e0!3m2!1sen!2ske!4v1526828711403" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

@extends('main')




@section('cont')
    <!-- subscribe -->
        <div class="subscribe-main section-w3layouts text-center">
            <div class="subscribe-head">
                <h4 class="sec-title">subscribe </h4>
                <h6>to my newsletter</h6>
                <h5>Get the free newsletter to keep up-to-date with my projects.</h5>
                <!-- <p class="sub-p">Never miss out on latest sales and best offers!</p> -->
                <div class="subscribe-form">
                    <form action="#" method="post" class="subscribe_form">
                        <input type="email" placeholder="Email" required="">
                        <input type="submit" value="subscribe">
                    </form>
                    <div class="clearfix"> </div>
                </div>
                <p>We respect your privacy.No spam ever!</p>
            </div>
        </div>
        <!-- //subscribe -->
        <div class="footer-main">
            <div class="footer-social">
                <h4>follow us</h4>
                <ul>
                    <li>
                        <a href="#">
                            <span class="fab fa-facebook-f icon_facebook"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fab fa-twitter icon_twitter"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fab fa-dribbble icon_dribbble"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fab fa-google-plus-g icon_g_plus"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="cpy-right">
                <p>© 2018 Jawaki Properties. All rights reserved | Design by
                    <a href="http://air-bi.com"> Air-bi Technologies</a>
                </p>
            </div>
        </div>

        <!-- //footer -->
        <!-- Vertically centered Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-uppercase" id="exampleModalLongTitle">Jawaki Properties</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="{{asset('asset/images/modal.jpg')}}" class="img-fluid mb-4" alt="Modal Image" />
                        Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum, ut auctor turpis cursus. Sed sed odio pharetra, aliquet velit cursus, vehicula enim. Mauris porta aliquet magna, eget laoreet ligula.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Vertically centered Modal -->


        <!-- js -->
        <script type="text/javascript" src="{{asset('asset/js/jquery-2.2.3.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('asset/js/bootstrap.js')}}"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
        <!-- //js -->
        <!-- requried-jsfiles-for owl -->	<!-- testimonials -->
        <script src="{{asset('asset/js/owl.carousel.js')}}"></script>
        <script>
            $(document).ready(function () {
                $("#owl-demo2").owlCarousel({
                    items: 1,
                    lazyLoad: false,
                    autoPlay: true,
                    navigation: false,
                    navigationText: false,
                    pagination: true,
                });
            });
        </script>
        <!-- //requried-jsfiles-for owl -->	<!-- //testimonials -->
        <!-- start-smooth-scrolling -->
        <script src="{{asset('asset/js/move-top.js')}}"></script>
        <script src="{{asset('asset/js/easing.js')}}"></script>
        <script>
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();

                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });
            });
        </script>
        <!-- //end-smooth-scrolling -->

        <!-- smooth-scrolling-of-move-up -->
        <script>
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear'
                 };
                 */

                $().UItoTop({
                    easingType: 'easeOutQuart'
                });

            });
        </script>
        <!-- //smooth-scrolling-of-move-up -->


        <!-- smooth scrolling js -->
        <script src="{{asset('asset/js/SmoothScroll.min.js')}}"></script>
        <!-- //smooth scrolling js -->
</div>
</body>
@endsection



