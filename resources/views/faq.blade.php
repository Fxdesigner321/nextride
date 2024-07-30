@extends('layouts.homelayout')

@section('content')

    <!-- Header Banner -->
    <section class="banner-header section-padding bg-img" data-overlay-dark="6" data-background=""{{asset('webasset/img/slider/4.jpg')}}>
        <div class="v-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h6>Frequently Asked Questions</h6>
                        <h1>Popular Questions</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- divider line -->
    <div class="line-vr-section"></div>
    <!-- FAQs -->
    <section class="faqs section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <ul class="accordion-box clearfix">
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">1.</span> Age and responsibility</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Driver must be 25+ years old to drive economy, luxury cars and supercars.</div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">2.</span> Deposit</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">500 USD will be blocked on your card for the duration of 24 days, cash deposits are also accepted. This amount will be used only for fines and toll road charges. terms & conditions apply.</div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">3.</span> Documents</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">A Passport copy is required, Valid Driving License, Mobile number, Email address and Location and Time of delivery</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12"> <img src="{{asset('webasset/img/about2.png')}}" class="img-fluid" alt=""> </div>
                <div class="col-lg-4 col-md-12">
                    <ul class="accordion-box clearfix">
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">4.</span> Car Delivery</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">At the time of Delivery our team will contact And Deliver the car to your Location. On spot, You will check the car, Sign the contract & receive the key. Enjoy your ride !</div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">5.</span> Enquire Now</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">You can contact us for a quotation & our team will assist you with the booking process. You can use the contact methods available on this page.</div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">6.</span> Payment Methodes</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">We offer a variety of payment methods. We accept cash, Crypto and the majority of credit cards such as Visa, MasterCard and American Express.</div>
                                </div>
                            </div>
                        </li>
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
