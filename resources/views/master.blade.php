<!DOCTYPE html>
<html>

<head>
    <title>Jawaki Properties</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Estate Mark a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.css')}}"> <!-- Bootstrap-Core-CSS -->
    <link href="{{asset('asset/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('asset/css/owl.carousel.css')}}" rel="stylesheet"><!-- Owl-carousel-CSS -->
    <link href="{{asset('asset/css/contact.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('asset/css/simpleLightbox.css')}}" rel="stylesheet" type="text/css" /><!-- gallery css -->
    <link href="{{asset('asset/css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>



<body>
<header>
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{url('index')}}">Jawaki Properties</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('index')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('home')}}">Properties</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="{{url('contact')}}">Contact Us</a>
                    </li>
                    @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    <!--<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pages
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="typography.html">Typography</a>
                            <a class="dropdown-item" href="services.html">Testimonials</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="about.html">Our Team</a>
                        </div>
                    </li>-->

                </ul>
                <!--<form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>-->
            </div>
        </nav>
    </div>
</header>
@yield('content')
<!-- subscribe -->
<div class="subscribe-main section-w3layouts text-center">
    <div class="subscribe-head">
        <h4 class="sec-title">subscribe </h4>
        <h6>to our newsletter</h6>
        <h5>Get the free newsletter to keep up-to-date with our latest projects.</h5>
         <p class="sub-p">Never miss out on latest sales and best offers!</p> 
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
</body>
</html>
