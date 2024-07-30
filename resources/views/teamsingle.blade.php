@extends('layouts.homelayout')

@section('content')

    <!-- Header Banner -->
    <section class="banner-header section-padding bg-img" data-overlay-dark="6" data-background="{{asset('webasset/img/slider/21.jpg')}}">
        <div class="v-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h6>Sales Consultant</h6>
                        <h1>Micheal Brown</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- divider line -->
    <div class="line-vr-section"></div>
    <!-- Team Single -->
    <section class="team-single section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="team-img mb-30">
                        <div class="img"> <img src="{{asset('webasset/img/team/1.jpg')}}" class="rounded-5" alt=""> </div>
                    </div>
                    <div class="wrapper">
                        <div class="cont">
                            <div class="coll">
                                <div class="social-icon"> <a href="index.html"><i class="fa-brands fa-facebook-f"></i></a> <a href="index.html"><i class="fa-brands fa-youtube"></i></a> <a href="index.html"><i class="fa-brands fa-instagram"></i></a> <a href="index.html"><i class="fa-brands fa-whatsapp"></i></a> </div>
                            </div>
                        </div>
                        <div class="cont">
                            <div class="coll">
                                <p>My e-mail address: <a href="mailto:info@Next Ride.com">info@Next Ride.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-12 cont">
                    <h6>Hello, I'm Micheal Brown. I work as your sales consultant at Rentax Luxury Car Rental.</h6>
                    <p>Car rental utate ons amet ravida haretra nuam the duru miss uctus the drana accumsan justo aliquam sit amet auctor orci done vitaerisus duise the nisan sapien in the miss rana duru lorem ipsum silver sapien.</p>
                    <ul class="list-unstyled list mb-60">
                        <li>
                            <div class="list-icon"> <span class="ti-check"></span> </div>
                            <div class="list-text">
                                <p>B Driver License</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-icon"> <span class="ti-check"></span> </div>
                            <div class="list-text">
                                <p>Bachelor's Degree</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-icon"> <span class="ti-check"></span> </div>
                            <div class="list-text">
                                <p>Good English</p>
                            </div>
                        </li>
                    </ul>
                    <!-- tab -->
                    <ul class="nav nav-tabs simpl-bord mt-60" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation"> <span class="nav-link active cursor-pointer" id="vision-tab" data-bs-toggle="tab" data-bs-target="#biography">Biography</span> </li>
                        <li class="nav-item" role="presentation"> <span class="nav-link cursor-pointer" id="mission-tab" data-bs-toggle="tab" data-bs-target="#education">Education</span> </li>
                        <li class="nav-item" role="presentation"> <span class="nav-link cursor-pointer" id="mission-tab" data-bs-toggle="tab" data-bs-target="#awards">Awards</span> </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="biography" role="tabpanel" aria-labelledby="vision-tab">
                            <p>Biography utate ons amet ravida haretra nuam the duru miss uctus the drana accumsan justo aliquam sit amet auctor orci done vitaerisus duise the nisan sapien in the miss rana duru silver sapien.</p>
                        </div>
                        <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="mission-tab">
                            <p>Education utate ons amet ravida haretra nuam the duru miss uctus the drana accumsan justo aliquam sit amet auctor orci done vitaerisus duise the nisan sapien in the miss rana duru silver sapien.</p>
                        </div>
                        <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="mission-tab">
                            <p>Awards utate ons amet ravida haretra nuam the duru miss uctus the drana accumsan justo aliquam sit amet auctor orci done vitaerisus duise the nisan sapien in the miss rana duru silver sapien.</p>
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
                    <div class="section-subtitle">Seniors</div>
                    <div class="section-title">Other Team</div>
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