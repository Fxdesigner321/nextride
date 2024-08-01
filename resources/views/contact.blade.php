@extends('layouts.homelayout')

@section('content')

<!-- Header Banner -->
    <section class="banner-header middle-height section-padding bg-img" data-overlay-dark="6" data-background="{{asset('webasset/img/slider/4.jpg')}}">
        <div class="v-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h6>Get in touch</h6>
                        <h1>Contact <span>Us</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Box -->
    <div class="contact-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="item"> <span class="icon omfi-envelope"></span>
                        <h5>Email us</h5>
                        <p>info@Next Ride.com</p> <i class="numb omfi-envelope"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="item"> <span class="icon omfi-location"></span>
                        <h5>Our address</h5>
                        <p>Dubai, Water Tower, Office 123</p> <i class="numb omfi-location"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="item"> <span class="icon ti-time"></span>
                        <h5>Opening Hours</h5>
                        <p>Mon-Sun: 8 AM - 7 PM</p> <i class="numb ti-time"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="item active"> <span class="icon omfi-phone"></span>
                        <h5>Call us</h5>
                        <p>+971 52-333-4444</p> <i class="numb omfi-phone"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row">
                <!-- Form -->
                <div class="col-lg-6 col-md-12 mb-30">
                    <div class="form-box">
                        <h5>Get in touch</h5>
                        <form method="post" class="contact__form" action="https://duruthemes.com/demo/html/Next Ride/dark/mail.php">
                            <!-- form message -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
                                </div>
                            </div>
                            <!-- form elements -->
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input name="name" type="text" placeholder="Your Name *" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="email" placeholder="Your Email *" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="phone" type="text" placeholder="Your Number *" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="subject" type="text" placeholder="Subject *" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <input name="submit" type="submit" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Map -->
                <div class="col-lg-5 offset-lg-1 col-md-12">
                    <h5>Location</h5>
                    <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1573147.7480448114!2d-74.84628175962355!3d41.04009641088412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25856139b3d33%3A0xb2739f33610a08ee!2s1616%20Broadway%2C%20New%20York%2C%20NY%2010019%2C%20Amerika%20Birle%C5%9Fik%20Devletleri!5e0!3m2!1str!2str!4v1646760525018!5m2!1str!2str" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Lets Talk -->
    <section class="lets-talk bg-img bg-fixed section-padding" data-overlay-dark="6" data-background="{{asset('webasset/img/slider/3.jpg')}}">
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
