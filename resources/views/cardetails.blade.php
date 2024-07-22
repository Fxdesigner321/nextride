@extends('layouts.homelayout')

@section('content')

<!-- Header Banner -->
    <section class="banner-header section-padding bg-img" data-overlay-dark="5" data-background="{{asset('webasset/img/slider/11.jpg')}}">
        <div class="v-middle">
            <div class="container">
                <div class="col-md-12">
                    <h6>Luxury Cars</h6>
                    <h1>Bentley Bentayga</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Details -->
    <section class="car-details section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row mb-60">
                        <div class="col-md-12">
                            <h3>General Information</h3>
                            <p class="mb-30">Lorem pretium fermentum quam, sit amet cursus ante sollicitudin velen morbi consesua the miss sustion consation miss orcisition amet iaculis nisan. Lorem pretium fermentum quam sit amet cursus ante sollicitudin velen fermen orbinetion consesua the risus consequation the porttiton.</p>
                            <ul class="list-unstyled list mb-30">
                                <li>
                                    <div class="list-icon"> <span class="ti-check"></span> </div>
                                    <div class="list-text">
                                        <p>24/7 Roadside Assistance</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-icon"> <span class="ti-check"></span> </div>
                                    <div class="list-text">
                                        <p>Free Cancellation & Return</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-icon"> <span class="ti-check"></span> </div>
                                    <div class="list-text">
                                        <p>Rent Now Pay When You Arrive</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--  Gallery Image -->
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Image Gallery</h3>
                        </div>
                    </div>
                    <div class="row gallery-items mb-60">
                        <div class="col-md-6 gallery-masonry-wrapper single-item cardio">
                            <a href="{{asset('webasset/img/slider/11b.jpg')}}" title="" class="gallery-masonry-item-img-link img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="{{asset('webasset/img/slider/11b.jpg')}}" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-masonry-item-img"></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 gallery-masonry-wrapper single-item crossfit">
                            <a href="{{asset('webasset/img/slider/11a.jpg')}}" title="" class="gallery-masonry-item-img-link img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="{{asset('webasset/img/slider/11a.jpg')}}" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-masonry-item-img"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- FAQs -->
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Rental Conditions</h3>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <ul class="accordion-box clearfix">
                                <li class="accordion block">
                                    <div class="acc-btn"><span class="count">1.</span> Contract and Annexes</div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">In addition to the car rental contract to be signed at the time of delivery, a credit card is required from our individual customers. We request our commercial customers to submit their company documents (tax plate, signature slip, ID photocopy).</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn"><span class="count">2.</span> Driving License and Age</div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">The tenant must be 25 years of age and have a 5-year local or valid international driver's license for group A, B, C, D vehicles at the time of the rental agreement.</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn"><span class="count">3.</span> Prices</div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Prices include maintenance and insurance guarantee against third parties (within legal policy limits). 18% VAT (value added tax) is not included. Fuel belongs to the renter. Chauffeur driven service and translator guide are available upon request.</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn"><span class="count">4.</span> Payments</div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">The total rental fee is collected at the time of rental. The shortest rental period is 72 hours, and in case of delay, 1/3 of the fee is charged for each additional hour. Delays exceeding 3 hours in total are calculated as a full day. A deposit is required from a valid credit card.</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn"><span class="count">5.</span> Delivery</div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Delivery is free of charge where our Rent a car company is located. Delivery in these cities is possible with prior notice; hotel, workplace, station, port etc. It can be done in places. For vehicle deliveries and returns in cities where our office is not located, a delivery fee of 0.2 Euro/km is applied, starting from the rented location.</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn"><span class="count">6.</span> Traffic Fines</div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Traffic fines toll and illegal toll fees belong to the customer. If the vehicles are detained by traffic, this period is included in the rental period. In necessary cases, we may change these conditions and information and the vehicle type specified in the reservation without prior notice. Our vehicles cannot be taken abroad.</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn"><span class="count">7.</span> Contract and Annexes</div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">In addition to the car rental contract to be signed at the time of delivery, a credit card is required from our individual customers. We request our commercial customers to submit their company documents (tax plate, signature slip, ID photocopy).</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->
                <div class="col-lg-4 col-md-12">
                    <div class="sidebar-car">
                        <div class="title">
                            <h4>$600 <span>/ rent per day</span></h4>
                        </div>
                        <div class="item">
                            <div class="features"><span><i class="omfi-door"></i> Doors</span>
                                <p>4</p>
                            </div>
                            <div class="features"><span><i class="omfi-passengers"></i> Passengers</span>
                                <p>5</p>
                            </div>
                            <div class="features"><span><i class="omfi-transmission"></i> Transmission</span>
                                <p>Auto</p>
                            </div>
                            <div class="features"><span><i class="omfi-luggage"></i> Luggage</span>
                                <p>2 Bags</p>
                            </div>
                            <div class="features"><span><i class="omfi-condition"></i> Air Condition</span>
                                <p>Yes</p>
                            </div>
                            <div class="features"><span><i class="omfi-age"></i> Age</span>
                                <p>25</p>
                            </div>
                            <div class="btn-double mt-30" data-grouptype="&amp;"> <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0">Rent Now</a> <a href="https://api.whatsapp.com/send?phone=8551004444" target="_blank"><span class="fa-brands fa-whatsapp"></span> WhatsApp</a> </div>
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
