@extends('master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>



<!--/inner_banner-->
<div class="inner_banner">
</div>
<!--//inner_banner-->
<!--/short-->
<div class="services-breadcrumb">
    <div class="inner_breadcrumb">

        <ul class="short">
            <li><a href="{{asset('index')}}">Home</a><span>|</span></li>
            <li>Properties</li>
        </ul>
    </div>
</div>
<!--//short-->
<!-- gallery -->
<div class="banner-bottom gallery py-5">
    <div class="container">
        <div class="w3-head-all text-center mb-5">
            <h3>Our Properties</h3>
        </div>
        <div class="w3ls_gallery_grids row">
            <div class="col-md-3 w3_section_1_gallery_grid">
                <div class="section_1_gallery_grid">
                    <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{url('athi')}}" class="img-fluid">
                        <div class="section_1_gallery_grid1">
                            <img src="{{asset('asset/images/toka.jpg')}}" alt=" " class="img-responsive img-fluid" />
                            <div class="w3layouts_gallery_grid1_pos">
                                <h3>Athi </h3>
                                <p> </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="section_1_gallery_grid">
                    <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{url('athioasis')}}" class="img-fluid">
                        <div class="section_1_gallery_grid1">
                            <img src="{{asset('asset/images/business.jpg')}}" alt=" " class="img-responsive img-fluid" />
                            <div class="w3layouts_gallery_grid1_pos">
                                <h3>Athi Oasis</h3>
                                <p> </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="section_1_gallery_grid">
                    <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{url('bypassmugetho')}}" class="img-fluid">
                        <div class="section_1_gallery_grid1">
                            <img src="{{asset('asset/images/OUT.jpg')}}" alt=" " class="img-responsive img-fluid" />
                            <div class="w3layouts_gallery_grid1_pos">
                                <h3>Bypass Mugetho</h3>
                                <p> </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 w3_section_1_gallery_grid">
                <div class="section_1_gallery_grid">
                    <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{url('gwakairu')}}" class="img-fluid">
                        <div class="section_1_gallery_grid1">
                            <img src="{{asset('asset/images/IMG_5440.jpg')}}" alt=" " class="img-responsive img-fluid" />
                            <div class="w3layouts_gallery_grid1_pos">
                                <h3>Gwa Kairu</h3>
                                <p> </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="section_1_gallery_grid">
                    <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{url('judah')}}" class="img-fluid">
                        <div class="section_1_gallery_grid1">
                            <img src="{{asset('asset/images/IMG_5440.jpg')}}" alt=" " class="img-responsive img-fluid" />
                            <div class="w3layouts_gallery_grid1_pos">
                                <h3>Judah Bypass</h3>
                                <p> </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="section_1_gallery_grid">
                    <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{url('kwamurage')}}" class="img-fluid">
                        <div class="section_1_gallery_grid1">
                            <img src="{{asset('asset/images/IMG_5502.jpg')}}" alt=" " class="img-responsive img-fluid" />
                            <div class="w3layouts_gallery_grid1_pos">
                                <h3>Kwa Murage</h3>
                                <p> </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 w3_section_1_gallery_grid">
                <div class="section_1_gallery_grid">
                    <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{url('murerabypass')}}" class="img-fluid">
                        <div class="section_1_gallery_grid1">
                            <img src="{{asset('asset/images/1738.jpg')}}" alt=" " class="img-responsive img-fluid" />
                            <div class="w3layouts_gallery_grid1_pos">
                                <h3>Murera Bypass</h3>
                                <p> </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="section_1_gallery_grid">
                    <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{url('mureramagomano')}}" class="img-fluid">
                        <div class="section_1_gallery_grid1">
                            <img src="{{asset('asset/images/imag.jpeg')}}" alt=" " class="img-responsive img-fluid" />
                            <div class="w3layouts_gallery_grid1_pos">
                                <h3>Murera Magomano</h3>
                                <p> l</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="section_1_gallery_grid">
                    <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{url('mwireri')}}" class="img-fluid">
                        <div class="section_1_gallery_grid1">
                            <img src="{{asset('asset/images/MEdia.jpg')}}" alt=" " class="img-responsive img-fluid" />
                            <div class="w3layouts_gallery_grid1_pos">
                                <h3>Mwireri</h3>
                                <p> </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 w3_section_1_gallery_grid">
                <div class="section_1_gallery_grid">
                    <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{url('ndarasha')}}" class="img-fluid">
                        <div class="section_1_gallery_grid1">
                            <img src="{{asset('asset/images/land-in.jpg')}}" alt=" " class="img-responsive img-fluid" />
                            <div class="w3layouts_gallery_grid1_pos">
                                <h3>Ndarasha</h3>
                                <p> </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="section_1_gallery_grid">
                    <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{url('ndurumo')}}" class="img-fluid">
                        <div class="section_1_gallery_grid1">
                            <img src="{{asset('asset/images/18.jpg')}}" alt=" " class="img-responsive img-fluid" />
                            <div class="w3layouts_gallery_grid1_pos">
                                <h3>Ndurumo</h3>
                                <p> </p>
                            </div>
                        </div>
                    </a>
                </div>
            <!--<div class="section_1_gallery_grid">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{asset('asset/images/g12.jpg')}}" class="img-fluid">
                            <div class="section_1_gallery_grid1">
                                <img src="{{asset('asset/images/g12.jpg')}}" alt=" " class="img-responsive img-fluid" />
                                <div class="w3layouts_gallery_grid1_pos">
                                    <h3>Estate Mark</h3>
                                    <p> lorem ipsum dolor</p>
                                </div>
                            </div>
                        </a>
                    </div>-->
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //gallery -->
<!-- subscribe -->

@endsection
