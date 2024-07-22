@extends('layouts.homelayout')

@section('content')

    <!-- Header Banner -->
    <section class="banner-header section-padding bg-img" data-overlay-dark="4" data-background="{{asset('webasset/img/slider/3.jpg')}}">
        <div class="v-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h6>Next Ride</h6>
                        <h1>About <span>Us</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- divider line -->
    <div class="line-vr-section"></div>
    <!-- About -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="content">
                        <div class="section-subtitle">Next Ride</div>
                        <div class="section-title">We Are More Than <span>A Car Rental Company</span></div>
                        <p>Car repair quisque sodales dui ut varius vestibulum drana tortor turpis porttiton tellus eu euismod nisl massa nutodio in the miss volume place urna lacinia eros nunta urna mauris vehicula rutrum in the miss on volume interdum.</p>
                        <p class="mb-30">Lorem ipsum potenti fringilla pretium ipsum non blandit vivamus eget nisi non mi iaculis iaculis imperie quiseros sevin elentesque habitant farmen.</p>

                        <ul class="list-unstyled list mb-30">
                            <li>
                                <div class="list-icon"> <span class="ti-check"></span> </div>
                                <div class="list-text">
                                    <p>We offer multiple services</p>
                                </div>
                            </li>
                            <li>
                                <div class="list-icon"> <span class="ti-check"></span> </div>
                                <div class="list-text">
                                    <p>Multiple Transport Services</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1">
                    <div class="item">
                        <img src="{{asset('webasset/img/about.jpg')}}" class="img-fluid" alt="">
                        <div class="curv-butn icon-bg">
                            <a href="https://youtu.be/1LxcTt1adfY" class="vid">
                                <div class="icon"> <i class="ti-control-play"></i> </div>
                            </a>
                            <div class="br-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="br-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video -->
    <section class="video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="4" data-background="{{asset('webasset/img/slider/1.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-subtitle">Explore</div>
                    <div class="section-title white">Car <span>Promo</span> Video</div>
                </div>
            </div>
            <div class="row">
                <div class="text-center col-md-12">
                    <a class="vid" href="https://youtu.be/1LxcTt1adfY">
                        <div class="vid-butn"> <span class="icon"> <i class="ti-control-play"></i> </span> </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials -->
    <section class="testimonials section-padding mt-15">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-30">
                    <div class="section-subtitle">Testimonials</div>
                    <div class="section-title">What Clients Say</div>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="stars"> <span class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                                <div class="shap-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                    </svg>
                                </div>
                                <div class="shap-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                    </svg>
                                </div>
                            </div> <i class="fa-solid fa-quote-left"></i>
                            <div class="text">
                                <p>Lorem posuere in miss drana en the nisan semere sceriun amiss etiam ornare in the miss drana is lorem fermen nunta urnase mauris in the interdum.</p>
                            </div>
                            <div class="info mt-30">
                                <div class="img-curv">
                                    <div class="img"> <img src="{{asset('webasset/img/team/1.jpg')}}" alt=""> </div>
                                    <div class="shap-left-top">
                                        <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                            <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                        </svg>
                                    </div>
                                    <div class="shap-right-bottom">
                                        <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                            <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-30">
                                    <h6>Dan Martin</h6>
                                    <p>Customer</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="stars"> <span class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                                <div class="shap-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                    </svg>
                                </div>
                                <div class="shap-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                    </svg>
                                </div>
                            </div> <i class="fa-solid fa-quote-left"></i>
                            <div class="text">
                                <p>Lorem posuere in miss drana en the nisan semere sceriun amiss etiam ornare in the miss drana is lorem fermen nunta urnase mauris in the interdum.</p>
                            </div>
                            <div class="info mt-30">
                                <div class="img-curv">
                                    <div class="img"> <img src="{{asset('webasset/img/team/4.jpg')}}" alt=""> </div>
                                    <div class="shap-left-top">
                                        <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                            <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                        </svg>
                                    </div>
                                    <div class="shap-right-bottom">
                                        <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                            <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-30">
                                    <h6>Olivia Brown</h6>
                                    <p>Customer</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="stars"> <span class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                                <div class="shap-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                    </svg>
                                </div>
                                <div class="shap-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                    </svg>
                                </div>
                            </div> <i class="fa-solid fa-quote-left"></i>
                            <div class="text">
                                <p>Lorem posuere in miss drana en the nisan semere sceriun amiss etiam ornare in the miss drana is lorem fermen nunta urnase mauris in the interdum.</p>
                            </div>
                            <div class="info mt-30">
                                <div class="img-curv">
                                    <div class="img"> <img src="{{asset('webasset/img/team/6.jpg')}}" alt=""> </div>
                                    <div class="shap-left-top">
                                        <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                            <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                        </svg>
                                    </div>
                                    <div class="shap-right-bottom">
                                        <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                            <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-30">
                                    <h6>Emily Martin</h6>
                                    <p>Customer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- divider line -->
    <div class="line-vr-section"></div>
    <!-- Team -->
    <section class="team section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-30">
                    <div class="section-subtitle">Certified Team</div>
                    <div class="section-title">Our Experts Team</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item"> <img src="{{asset('webasset/img/team/1.jpg')}}" class="img-fluid" alt="">
                            <div class="bottom-fade"></div>
                            <div class="butn icon-bg">
                                <a href="team-single.html" class="vid">
                                    <div class="icon"> <i class="ti-info"></i> </div>
                                </a>
                                <div class="br-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                    </svg>
                                </div>
                                <div class="br-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="title">
                                <h4>Dan Martin</h4>
                                <h6>Sales Consultant</h6>
                            </div>
                        </div>
                        <div class="item"> <img src="{{asset('webasset/img/team/4.jpg')}}" class="img-fluid" alt="">
                            <div class="bottom-fade"></div>
                            <div class="info">
                                <div class="butn icon-bg">
                                    <a href="team-single.html" class="vid">
                                        <div class="icon"> <i class="ti-info"></i> </div>
                                    </a>
                                    <div class="br-left-top">
                                        <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                            <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                        </svg>
                                    </div>
                                    <div class="br-right-bottom">
                                        <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                            <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="title">
                                    <h4>Emily Arla</h4>
                                    <h6>Sales Consultant</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item"> <img src="{{asset('webasset/img/team/5.jpg')}}" class="img-fluid" alt="">
                            <div class="bottom-fade"></div>
                            <div class="info">
                                <div class="butn icon-bg">
                                    <a href="team-single.html" class="vid">
                                        <div class="icon"> <i class="ti-info"></i> </div>
                                    </a>
                                    <div class="br-left-top">
                                        <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                            <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                        </svg>
                                    </div>
                                    <div class="br-right-bottom">
                                        <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                            <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="title">
                                    <h4>Oliva White</h4>
                                    <h6>Sales Consultant</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item"> <img src="{{asset('webasset/img/team/2.jpg')}}" class="img-fluid" alt="">
                            <div class="bottom-fade"></div>
                            <div class="butn icon-bg">
                                <a href="team-single.html" class="vid">
                                    <div class="icon"> <i class="ti-info"></i> </div>
                                </a>
                                <div class="br-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                    </svg>
                                </div>
                                <div class="br-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="title">
                                <h4>Margaret Nancy</h4>
                                <h6>Sales Department</h6>
                            </div>
                        </div>
                        <div class="item"> <img src="{{asset('webasset/img/team/6.jpg')}}" class="img-fluid" alt="">
                            <div class="bottom-fade"></div>
                            <div class="butn icon-bg">
                                <a href="team-single.html" class="vid">
                                    <div class="icon"> <i class="ti-info"></i> </div>
                                </a>
                                <div class="br-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                    </svg>
                                </div>
                                <div class="br-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="title">
                                <h4>Mia Jane</h4>
                                <h6>Finance Department</h6>
                            </div>
                        </div>
                        <div class="item"> <img src="{{asset('webasset/img/team/3.jpg')}}" class="img-fluid" alt="">
                            <div class="bottom-fade"></div>
                            <div class="butn icon-bg">
                                <a href="team-single.html" class="vid">
                                    <div class="icon"> <i class="ti-info"></i> </div>
                                </a>
                                <div class="br-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                    </svg>
                                </div>
                                <div class="br-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="title">
                                <h4>Micheal Brown</h4>
                                <h6>Sales Consultant</h6>
                            </div>
                        </div>
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
    <!-- Clients -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('webasset/img/clients/1.png')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('webasset/img/clients/2.png')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('webasset/img/clients/3.png')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('webasset/img/clients/4.png')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('webasset/img/clients/5.png')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('webasset/img/clients/6.png')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('webasset/img/clients/7.png')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('webasset/img/clients/8.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    @endsection
