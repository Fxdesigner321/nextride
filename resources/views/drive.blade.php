@extends('layouts.homelayout')

@section('content')
<style>
    
    .banner {
    position: relative;
    background-image: url("{{asset('webasset/img/slider/7.jpg')}}");
    background-size: cover;
    background-position: center;
    padding: 20px;
    overflow: hidden;
    color: white;
    display: flex;
    align-items: center;
    min-height: 400px;
}

.banner::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.5); /* White overlay with 50% opacity */
    z-index: 1;
}

.banner .content {
    position: relative;
    z-index: 2;
}

.banner img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    position: relative;
    z-index: 2; /* Ensures the image is above the overlay */
}

.banner h1 {
    margin-bottom: 10px;
    font-size: 2.5rem;
    color: black;
    
}

.banner p {
    font-size: 1.125rem;
    color: black;
}
.modal-dialog {
            display: flex;
            justify-content: center;
        }
        .modal-header {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .modal-title {
            color: white;
            text-align: center;
            margin: 0;
            width: 100%;
        }
  /* Sticky footer styles */
  .sticky-footer {
            position: sticky;
            bottom: 0;
            background-color: #1CCC00;
            padding: 10px 0;
            width: 100%;
            z-index: 11;
        }

        .btn-sticky {
            /* background-color: #1CCC00; */
            color: white;
            border: none;
            width: 100%;
            text-align: center;
        }
        .sticky-footer:hover{
            background-color: #ffffff;
            color: black;

        }
        /* .btn-sticky:hover {
            color: black;
        } */
           /* Additional custom styles */
           .faq-header {
            font-size: 36px;
            color: white;
            text-align: center;
            margin-bottom: 30px;
        }
        .accordion-header:hover{
            color: white;
        }
        .faq-container {
            margin: 0 50px; /* Custom margin for left and right */
        }
        .accordion-button {
            color: #ffffff;
            background-color: #1CCC00;
            border: 1px solid #1CCC00;
        }
        .accordion-button:focus {
            box-shadow: none;
        }
        .accordion-body {
            background-color: #e9ecef;
            border: 1px solid #1CCC00;
        }
</style>
<!-- Header Banner -->
<section class="banner-header section-padding bg-img" data-overlay-dark="4" data-background="{{asset('webasset/img/slider/7.jpg')}}">
    <div class="v-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h6>Next Ride</h6>
                    <h1>School & <span>Collage Bus</span></h1>
                </div>
                <div class="button-group" style="margin-top: 20px;">
                    <a href="#sign-up" class="btn" style="display: inline-block; padding: 10px 20px; font-size: 16px; color: white; background-color: #1CCC00; text-decoration: none; border-radius: 5px; margin-right: 10px; border: 1px solid #1CCC00;">
                        Sign Up to Drive
                    </a>
                    <a href="#learn-more" class="btn" style="display: inline-block; padding: 10px 20px; font-size: 16px; color: white; background-color: transparent; text-decoration: none; border-radius: 5px; border: 1px solid white; margin-right: 10px;">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="process section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center mb-30">
                <div class="section-subtitle">Steps</div>
                <div class="section-title white">Make money when
                    <span>you want</span></div>
                    <img src="{{asset('webasset/img/ww.svg')}}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-30">
                <div class="item">
                    <div class="text">
                        <h5>Set your own schedule</h5>
                        <p>You’re the boss. You can drive with the Next Ride app day or night. Fit driving around your life, not the other way around.</p>
                    </div>
                    <div class="numb">
                        <div class="numb-curv">
                            <div class="number">01.</div>
                            <div class="shap-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    class="w-11 h-11">
                                    <path
                                        d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                        fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="shap-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    class="w-11 h-11">
                                    <path
                                        d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                        fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-30">
                <div class="item">
                    <div class="text">
                        <h5>Make money on your terms</h5>
                        <p>You have the flexibility to drive as often as you wish. The more you drive, the greater your earning potential becomes. </p>
                    </div>
                    <div class="numb">
                        <div class="numb-curv">
                            <div class="number">02.</div>
                            <div class="shap-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    class="w-11 h-11">
                                    <path
                                        d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                        fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="shap-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    class="w-11 h-11">
                                    <path
                                        d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                        fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-30">
                <div class="item">
                    <div class="text">
                        <h5>Let the app lead the way</h5>
                        <p>Just tap and go. You get turn-by-turn directions, suggestions to help you make more money, and 24/7 support.</p>
                    </div>
                    <div class="numb">
                        <div class="numb-curv">
                            <div class="number">03.</div>
                            <div class="shap-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    class="w-11 h-11">
                                    <path
                                        d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                        fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="shap-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    class="w-11 h-11">
                                    <path
                                        d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                        fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 text-center mt-15">
                <p><span class="ti-info"></span> If you've never rented a car before, we'll guide you through the
                    process.</p>
            </div>
        </div>
</section>
{{--  ===================================================================  --}}
<section class="process section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center mb-30">
                <div class="section-subtitle" style="color: white;">Steps</div>
                <div class="section-title white" style="color: white;">Get <span>started</span></div>
            </div>
        </div>

        <!-- Tabs Navigation -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="color: green;">Step 1</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="color: green;">Step 2</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false" style="color: green;">Step 3</a>
            </li>
        </ul>

        <!-- Tabs Content -->
        <div class="tab-content mt-4" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    <div class="col-md-12 mb-30">
                        <div class="item">
                            <div class="text" style="color: white;">
                                <h5>Sign up online</h5>
                                <p>Just tell us which city you'd like to drive in and the type of licence you have. We'll email you with your next steps.</p>
                            </div>
                            <div class="numb">
                                <div class="numb-curv">
                                    <div class="number" style="color: white;">01.</div>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row">
                    <div class="col-md-12 mb-30">
                        <div class="item">
                            <div class="text" style="color: white;">
                                <h5>Make more money</h5>
                                <p>As well as driving passengers, you can also sign up to deliver food with Uber Eats. Find out more about how it works where you live.</p>
                            </div>
                            <div class="numb">
                                <div class="numb-curv">
                                    <div class="number" style="color: white;">02.</div>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row">
                    <div class="col-md-12 mb-30">
                        <div class="item">
                            <div class="text" style="color: white;">
                                <h5>Get a vehicle</h5>
                                <p>Which car is right for you? Make sure it meets our standards in Ireland, and remember that you’ll make more money if you keep your costs low.</p>
                            </div>
                            <div class="numb">
                                <div class="numb-curv">
                                    <div class="number" style="color: white;">03.</div>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="row justify-content-center">
            <div class="col-md-12 text-center mt-15">
                <p style="color: white;"><span class="ti-info"></span> If you've never rented a car before, we'll guide you through the process.</p>
            </div>
        </div> -->
    </div>
</section>
<!-- Safety on the Road Section -->
<section class="why-drive-section">
    <div class="container text-center">
    <div class="row justify-content-center">
            <div class="col-md-12 text-center mb-30">
                <div class="section-subtitle" style="color: white;">Steps</div>
                <div class="section-title white" style="color: white;">Safety on  <span>the road</span></div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <img src="{{asset('webasset/img/slider/1.jpg')}}" class="img-fluid" alt="Protection on every trip">
                <h3 style="color: #1CCC00;">Protection on every trip</h3>
                <p >Let us help you stay safe with our technology and safety features.</p>
            </div>
            <div class="col-md-4">
                <img src="{{asset('webasset/img/slider/2.jpg')}}" class="img-fluid" alt="Help if you need it">
                <h3 style="color: #1CCC00;">Help if you need it</h3>
                <p>Access emergency assistance and customer support whenever you need it.</p>
            </div>
            <div class="col-md-4">
                <img src="{{asset('webasset/img/slider/3.jpg')}}" class="img-fluid" alt="Community guidelines">
                <h3 style="color: #1CCC00;">Community guidelines</h3>
                <p>Our guidelines help drivers and riders enjoy a safe and respectful experience.</p>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid banner d-flex">
    <div class="col-md-6 d-flex align-items-center p-4">
        <div class="content">
            <h1>The Driver app</h1>
            <p>Easy to use and reliable, the app was built for drivers,<br> with drivers.</p>
            <div class="col-md-12">
                <input name="submit" type="submit" value="Submit" class="btn btn-primary">
            </div>
        </div>
    </div>
    <div class="col-md-6 p-0">
        <img src="{{asset('webasset/img/f.png')}}" alt="Banner Image" class="img-fluid">
    </div>
</div>
<section class="cars1 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-30">
                <div class="section-subtitle">Select Your Car</div>
                <div class="section-title">Luxury <span>Car Fleet</span></div>
            </div>
        </div>
        <div class="cars1-carousel owl-theme owl-carousel">
            <div class="item">
                <div class="img"> <img src="{{asset('webasset/img/slider/7.jpg')}}" alt=""> </div>
                <div class="con opacity-1">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="title"><a href="#">Lamborghini Urus</a></div>
                            <div class="details"> <span><i class="omfi-door"></i> 4 Seats</span> <span><i class="omfi-transmission"></i> Auto</span> <span><i class="omfi-luggage"></i> 2 Bags</span> <span><i class="omfi-age"></i> Age 25</span> </div>
                        </div>
                        <div class="col-md-5">
                            <div class="book">
                                <div><a href="car-details.html" class="btn"><span>Details</span></a></div>
                                <div><span class="price">$750</span><span>/day</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img"> <img src="{{asset('webasset/img/slider/8.jpg')}}" alt=""> </div>
                <div class="con opacity-1">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="title"><a href="#">Aston Martin DBX</a></div>
                            <div class="details"> <span><i class="omfi-door"></i> 4 Seats</span> <span><i class="omfi-transmission"></i> Auto</span> <span><i class="omfi-luggage"></i> 2 Bags</span> <span><i class="omfi-age"></i> Age 25</span></div>
                        </div>
                        <div class="col-md-5">
                            <div class="book">
                                <div><a href="car-details.html" class="btn"><span>Details</span></a></div>
                                <div><span class="price">$500</span><span>/day</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img"> <img src="{{asset('webasset/img/slider/9.jpg')}}" alt=""> </div>
                <div class="con opacity-1">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="title"><a href="#">Bugatti Mistral W16</a></div>
                            <div class="details"> <span><i class="omfi-door"></i> 2 Seats</span> <span><i class="omfi-transmission"></i> Auto</span> <span><i class="omfi-luggage"></i> 2 Bags</span> <span><i class="omfi-age"></i> Age 25</span></div>
                        </div>
                        <div class="col-md-5">
                            <div class="book">
                                <div><a href="car-details.html" class="btn"><span>Details</span></a></div>
                                <div><span class="price">$800</span><span>/day</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img"> <img src="{{asset('webasset/img/slider/11.jpg')}}" alt=""> </div>
                <div class="con opacity-1">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="title"><a href="#">Bentley Bentayga</a></div>
                            <div class="details"> <span><i class="omfi-door"></i> 4 Seats</span> <span><i class="omfi-transmission"></i> Auto</span> <span><i class="omfi-luggage"></i> 2 Bags</span> <span><i class="omfi-age"></i> Age 25</span></div>
                        </div>
                        <div class="col-md-5">
                            <div class="book">
                                <div><a href="car-details.html" class="btn"><span>Details</span></a></div>
                                <div><span class="price">$600</span><span>/day</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img"> <img src="{{asset('webasset/img/slider/12.jpg')}}" alt=""> </div>
                <div class="con opacity-1">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="title"><a href="#">Rolls Royce Cullinan</a></div>
                            <div class="details"> <span><i class="omfi-door"></i> 4 Seats</span> <span><i class="omfi-transmission"></i> Auto</span> <span><i class="omfi-luggage"></i> 4 Bags</span> <span><i class="omfi-age"></i> Age 25</span></div>
                        </div>
                        <div class="col-md-5">
                            <div class="book">
                                <div><a href="car-details.html" class="btn"><span>Details</span></a></div>
                                <div><span class="price">$900</span><span>/day</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img"> <img src="{{asset('webasset/img/slider/13.jpg')}}" alt=""> </div>
                <div class="con opacity-1">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="title"><a href="#">Bentley Continental</a></div>
                            <div class="details"> <span><i class="omfi-door"></i> 4 Seats</span> <span><i class="omfi-transmission"></i> Auto</span> <span><i class="omfi-luggage"></i> 2 Bags</span> <span><i class="omfi-age"></i> Age 25</span></div>
                        </div>
                        <div class="col-md-5">
                            <div class="book">
                                <div><a href="car-details.html" class="btn"><span>Details</span></a></div>
                                <div><span class="price">$500</span><span>/day</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img"> <img src="{{asset('webasset/img/slider/14.jpg')}}" alt=""> </div>
                <div class="con opacity-1">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="title"><a href="#">Audi RS7 Sportback</a></div>
                            <div class="details"> <span><i class="omfi-door"></i> 4 Seats</span> <span><i class="omfi-transmission"></i> Auto</span> <span><i class="omfi-luggage"></i> 2 Bags</span> <span><i class="omfi-age"></i> Age 25</span></div>
                        </div>
                        <div class="col-md-5">
                            <div class="book">
                                <div><a href="car-details.html" class="btn"><span>Details</span></a></div>
                                <div><span class="price">$450</span><span>/day</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img"> <img src="{{asset('webasset/img/slider/15.jpg')}}" alt=""> </div>
                <div class="con opacity-1">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="title"><a href="#">AUDI Q8</a></div>
                            <div class="details"> <span><i class="omfi-door"></i> 4 Seats</span> <span><i class="omfi-transmission"></i> Auto</span> <span><i class="omfi-luggage"></i> 3 Bags</span> <span><i class="omfi-age"></i> Age 25</span></div>
                        </div>
                        <div class="col-md-5">
                            <div class="book">
                                <div><a href="car-details.html" class="btn"><span>Details</span></a></div>
                                <div><span class="price">$450</span><span>/day</span></div>
                            </div>
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
                <p>Don't hesitate and send us a message.</p> <a href="tel:+8001234567"
                    class="button-1 mt-15 mb-15 mr-10"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a> <a
                    data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0"
                    class="button-2 mt-15 mb-15">Rent Now <span class="ti-arrow-top-right"></span></a>
            </div>
        </div>
    </div>
</section>
<div class="container mt-5 faq-container">
        <h1 class="faq-header">Frequently Asked Questions</h1>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne" >
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        What is your return policy?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Our return policy allows returns within 30 days of purchase...</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        How can I track my order?
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">You can track your order using the tracking link sent to your email...</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Do you offer international shipping?
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Yes, we offer international shipping to many countries...</div>
                </div>
            </div>
        </div>
    </div>
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
    </section><!-- Button to Open the Modal -->
<div class="sticky-footer">
    <button type="button" class="btn btn-sticky" data-bs-toggle="modal" data-bs-target="#formModal">
       Sign Up to Driver
    </button>
</div>

<!-- The Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">
                    Register Form
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <section class="contact section">
                    <div class="container">
                        <div class="row">
                            <!-- Form -->
                            <div class="col-md-12 mb-30">
                                <div class="form-box">
                                    <form method="post" class="contact__form" action="your-action-url" enctype="multipart/form-data">
                                        <!-- form message -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                                    Your message was sent successfully.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- form elements -->
                                        <div class="row">
                                        <div class="section-title text-center" style="margin-top: 20px;">Register <span>Form</span></div>
                                        <div class="col-md-6 form-group">
                                                <input name="name" type="text" class="form-control" placeholder="Your Name *" required>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input name="email" type="email" class="form-control" placeholder="Your Email *" required>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input name="phone" type="text" class="form-control" placeholder="Your Phone Number *" required>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input name="cnic_front_side" type="file" class="form-control" placeholder="CNIC Front Side *" required>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input name="cnic_back_side" type="file" class="form-control" placeholder="CNIC Back Side *" required>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input name="photo" type="file" class="form-control" placeholder="Your Photo *" required>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input name="driving_license" type="file" class="form-control" placeholder="Driving License *" required>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input name="vehicle_registration" type="file" class="form-control" placeholder="Vehicle Registration *" required>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <input name="vehicle_id" type="text" class="form-control" placeholder="Vehicle ID *" required>
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <input name="submit" type="submit" value="Register" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
</div>



    @endsection