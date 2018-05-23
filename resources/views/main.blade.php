

@yield('cont')
<link rel="stylesheet" href="{{asset('asset/css/bootstrap.css')}}"> <!-- Bootstrap-Core-CSS -->
<link href="{{asset('asset/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('asset/css/owl.carousel.css')}}" rel="stylesheet"><!-- Owl-carousel-CSS -->
<link href="{{asset('asset/css/contact.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('asset/css/simpleLightbox.css')}}" rel="stylesheet" type="text/css" /><!-- gallery css -->
<link href="{{asset('asset/css/fontawesome-all.css')}}" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">



<!-- subscribe -->


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
