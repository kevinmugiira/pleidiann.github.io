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
                <li>Contacts</li>
            </ul>
        </div>
    </div>
    <!--//short-->
    <!--/contact-->
    <!-- /inner_content -->
    <div class="banner_bottom py-5">
        <div class="container">
            <div class="mail_form mb-5">
                <div class="w3-head-all text-center mb-3">
                    <h3>Contact us</h3>
                </div>
                <!---728x90--->
                <div class="inner_sec_info_wthree_agile">
                    <form action="#" method="post">
						<span class="input input--chisato">
						<input class="input__field input__field--chisato" name="Name" type="text" id="input-13" placeholder=" " required="" />
						<label class="input__label input__label--chisato" for="input-13">
							<span class="input__label-content input__label-content--chisato" data-content="Name">Name</span>
						</label>
						</span>
                        <span class="input input--chisato">
						<input class="input__field input__field--chisato" name="Email" type="email" id="input-14" placeholder=" " required="" />
						<label class="input__label input__label--chisato" for="input-14">
							<span class="input__label-content input__label-content--chisato" data-content="Email">Email</span>
						</label>
						</span>
                        <span class="input input--chisato">
						<input class="input__field input__field--chisato" name="Subject" type="text" id="input-15" placeholder=" " required="" />
						<label class="input__label input__label--chisato" for="input-15">
							<span class="input__label-content input__label-content--chisato" data-content="Subject">Subject</span>
						</label>
						</span>
                        <textarea name="Message" placeholder="Your comment here..." required=""></textarea>
                        <input type="submit" value="Submit">
                    </form>

                </div>
            </div>
            <div class="inner_sec_info_wthree_agile row">
                <div class="col-md-8 map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1828.7696970752156!2d36.959019624589644!3d-1.1476139998241386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f4750d7afef7f%3A0x47952cad2911b214!2sUnique+Bustani+Restaurant!5e0!3m2!1sen!2ske!4v1526984775933" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>                </div>
                <div class="col-md-4 contact_grids_info">
                    <div class="contact_grid">
                        <div class="contact_grid_right">
                            <h4> OFFICE 1</h4>
                            <p>Ruiru,</p>
                            <p>Nairobi Kenya</p>
                        </div>
                    </div>
                    <!--<div class="contact_grid">
                        <div class="contact_grid_right">
                            <h4> OFFICE 2</h4>
                            <p>8088 Jasmine hall,</p>
                            <p>NewYork City SD092.</p>
                        </div>
                    </div>
                    <div class="contact_grid" data-aos="flip-up">

                        <div class="contact_grid_right">
                            <h4>OFFICE 3</h4>
                            <p>436 Honey hall,</p>
                            <p>NewYork City SD092.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>-->
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <!--//contact-->

@endsection