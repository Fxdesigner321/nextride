@extends('layouts.homelayout')

@section('content')

    <!-- Header Banner -->
    <section class="banner-header section-padding bg-img" data-overlay-dark="6" data-background="{{asset('webasset/img/slider/1.jpg')}}">
        <div class="v-middle">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <div class="post-wrapper">
                            <div>Home</div>
                            <div class="divider"></div>
                            <div class="text-white"><a href="blog.html">Blog</a></div>
                        </div>
                        <h1>Rental cost of sport and other cars</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- divider line -->
    <div class="line-vr-section"></div>
    <!-- Post -->
    <section class="post section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-30">
                    <p>Quisque pretium fermentum quam, sit amet cursus ante sollicitudin vel. Morbi consequat risus consequat, porttitor orci sit amet, iaculis nisl. Integer quis sapien nec elit ultrices euismon sit amet id lacus. Sed a imperdiet erat. Duis eu est dignissim lacus dictum hendrerit quis vitae mi. Fusce eu nulla ac nisi cursus tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer tristique sem eget leo faucibus porttiton.</p>
                    <p>Nulla vitae metus tincidunt, varius nunc quis, porta nulla. Pellentesque vel dui nec libero auctor pretium id sed arcu. Nunc consequat diam id nisl blandit dignissim. Etiam commodo diam dolor, at scelerisque sem finibus sit amet. Curabitur id lectus eget purus finibus laoreet.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-30"> <img src="{{asset('webasset/img/slider/1.jpg')}}" class="rounded-4" alt=""> </div>
                <div class="col-lg-6 col-md-12"> <img src="{{asset('webasset/img/slider/9.jpg')}}" class="rounded-4" alt=""> </div>
            </div>
            <div class="section">
                <div class="row">
                    <!-- Comment -->
                    <div class="col-lg-6 col-md-12">
                        <div class="wrap">
                            <div class="user"> <img src="{{asset('webasset/img/team/2.jpg')}}" alt=""> </div>
                            <div class="cont">
                                <h6>Olivia Brown &nbsp;&nbsp;<span>29 Dec 2024</span></h6>
                                <p>Lorem ultricies nibh non dolor maximus sceleue inte drana on molisen faubs neque nec tincidunte aliquam eraten volume id lectus fermen finibus in the miss rana duru fermen soreen. </p>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Form -->
                    <div class="col-lg-5 offset-lg-1 col-md-12">
                        <div class="form-box">
                            <h5 class="white">Leave <span>a Reply</span></h5>
                            <form method="post" class="row">
                                <div class="col-md-12">
                                    <input type="text" name="name" id="name" placeholder="Full Name *" required="">
                                </div>
                                <div class="col-md-12">
                                    <input type="email" name="email" id="email" placeholder="Email Address *" required="">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" id="message" cols="40" rows="4" placeholder="Your Comment *" required=""></textarea>
                                </div>
                                <div class="col-md-12">
                                    <input name="submit" type="submit" value="Send Message">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Prev-Next Post -->
    <section class="post-prev-next">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <div class="post-prev-next-left">
                            <a href="post.html"> <i class="ti-arrow-left"></i> Previous Post</a>
                        </div> <a href="blog.html"><i class="ti-layout-grid3-alt"></i></a>
                        <div class="post-prev-next-right"> <a href="post.html">Next Post <i class="ti-arrow-right"></i></a> </div>
                    </div>
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