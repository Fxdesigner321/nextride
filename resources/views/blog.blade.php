@extends('layouts.homelayout')

@section('content')

    <!-- Header Banner -->
    <section class="banner-header section-padding bg-img" data-overlay-dark="6" data-background="{{asset('webasset/img/slider/1.jpg')}}">
        <div class="v-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h6>Blog & News</h6>
                        <h1>Latest News</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- divider line -->
    <div class="line-vr-section"></div>
    <!-- Blog -->
    <section class="blog1 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-45">
                    <div class="item">
                        <div class="img"> <img src="{{asset('webasset/img/blog/03.jpg')}}" alt=""> </div>
                        <div class="wrapper">
                            <div class="date"> <a href="#">29 Dec, 2024</a> </div>
                            <div class="con">
                                <div class="category"> <a href="#"><i class="ti-user"></i>Olivia D.</a> <a href="#"><i class="ti-comment"></i>5 Comments</a> </div>
                                <div class="text"> <a href="post.html">Documents required for car rental</a> </div> <a href="post.html" class="icon-btn"><i class="ti-arrow-top-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-45">
                    <div class="item">
                        <div class="img"> <img src="{{asset('webasset/img/blog/04.jpg')}}" alt=""> </div>
                        <div class="wrapper">
                            <div class="date"> <a href="#">27 Dec, 2024</a> </div>
                            <div class="con">
                                <div class="category"> <a href="#"><i class="ti-user"></i>Martin C.</a> <a href="#"><i class="ti-comment"></i>5 Comments</a> </div>
                                <div class="text"> <a href="post.html">Rental cost of sport and other cars</a> </div> <a href="post.html" class="icon-btn"><i class="ti-arrow-top-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-45">
                    <div class="item">
                        <div class="img"> <img src="{{asset('webasset/img/blog/05.jpg')}}" alt=""> </div>
                        <div class="wrapper">
                            <div class="date"> <a href="#">25 Dec, 2024</a> </div>
                            <div class="con">
                                <div class="category"> <a href="#"><i class="ti-user"></i>Martin C.</a> <a href="#"><i class="ti-comment"></i>5 Comments</a> </div>
                                <div class="text"> <a href="post.html">Rental cars how to check driving fines?</a> </div> <a href="post.html" class="icon-btn"><i class="ti-arrow-top-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-45">
                    <div class="item">
                        <div class="img"> <img src="{{asset('webasset/img/blog/06.jpg')}}" alt=""> </div>
                        <div class="wrapper">
                            <div class="date"> <a href="#">23 Dec, 2024</a> </div>
                            <div class="con">
                                <div class="category"> <a href="#"><i class="ti-user"></i>Arya T.</a> <a href="#"><i class="ti-comment"></i>5 Comments</a> </div>
                                <div class="text"> <a href="post.html">How to Rent a Car at the Airport Terminal?</a> </div> <a href="post.html" class="icon-btn"><i class="ti-arrow-top-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-45">
                    <div class="item">
                        <div class="img"> <img src="{{asset('webasset/img/blog/01.jpg')}}" alt=""> </div>
                        <div class="wrapper">
                            <div class="date"> <a href="blog1.html">22 Dec, 2024</a> </div>
                            <div class="con">
                                <div class="category"> <a href="#"><i class="ti-user"></i>Micheal B.</a> <a href="#"><i class="ti-comment"></i>5 Comments</a> </div>
                                <div class="text"> <a href="post.html">Penalties for violating the rules in rental cars</a> </div> <a href="post.html" class="icon-btn"><i class="ti-arrow-top-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-45">
                    <div class="item">
                        <div class="img"> <img src="{{asset('webasset/img/blog/02.jpg')}}" alt=""> </div>
                        <div class="wrapper">
                            <div class="date"> <a href="#">21 Dec, 2024</a> </div>
                            <div class="con">
                                <div class="category"> <a href="#"><i class="ti-user"></i>Daniel K.</a> <a href="#"><i class="ti-comment"></i>5 Comments</a> </div>
                                <div class="text"> <a href="post.html">How to check a car before renting?</a> </div> <a href="post.html" class="icon-btn"><i class="ti-arrow-top-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pagination -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="pagination-wrap">
                        <li><a href="blog2.html#"><i class="ti-angle-left"></i></a></li>
                        <li><a href="blog2.html#">1</a></li>
                        <li><a href="blog2.html#" class="active">2</a></li>
                        <li><a href="blog2.html#">3</a></li>
                        <li><a href="blog2.html#"><i class="ti-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Lets Talk -->
    <section class="lets-talk bg-img bg-fixed section-padding" data-overlay-dark="5" data-background="{{asset('webasset/img/slider/3.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h6>Rent Your Car</h6>
                    <h5>Interested in Renting?</h5>
                    <p>Don't hesitate and send us a message.</p> <a href="tel:+8001234567" class="button-1 mt-15 mb-15 mr-10"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a> <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-2 mt-15 mb-15">Rent Now <span class="ti-arrow-top-right"></span></a>
                </div>
            </div>
        </div>
    </section>

    @endsection
    