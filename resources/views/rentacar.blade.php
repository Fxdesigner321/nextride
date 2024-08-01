@extends('layouts.homelayout')

@section('content')

    <!-- Header Banner -->
    <section class="banner-header section-padding bg-img" data-overlay-dark="4" data-background="{{asset('webasset/img/slider/3.jpg')}}">
        <div class="v-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h6>Next Ride</h6>
                        <h1>Rent A <span>Car</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .modal-dialog {
            max-width: 80%; /* Adjust width as needed */
        }
        /* .modal-content {
            padding: 20px;
        } */
        .modal-body {
            padding: 0;
        }
        .modal-title {
            color: white;
            text-align: center;
            margin: 0;
            width: 100%;
        }
    </style>
    <!-- Main Content -->
    <div class="container mt-5">
        <h2>Search for Rental Cars</h2>
        <form action="" method="GET">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="city">City:</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="Enter city">
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="car_type">Car Type:</label>
                        <input type="text" class="form-control" id="car_type" name="car_type" placeholder="Enter car type">
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <input name="submit" type="submit" value="Search Location" class="btn btn-primary">
            </div>
        </form>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="formModalLabel">
          Search for Rental Cars
                </h5>            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container">
              <form action="" method="GET">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <br>
                      <label for="city">City:</label>
                      <input type="text" class="form-control" id="city" name="city" placeholder="Enter city">
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                  <br>
                    <div class="form-group">
                      <label for="car_type">Car Type:</label>
                      <input type="text" class="form-control" id="car_type" name="car_type" placeholder="Enter car type">
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <input name="submit" type="submit" value="Search Location" class="btn btn-primary">
                </div>
                <br>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myModal = new bootstrap.Modal(document.getElementById('searchModal'), {
                keyboard: false
            });
            myModal.show();
        });
    </script>




            <br> <br>
                    <!-- End Search Form -->
    <!-- divider line -->
    <div class="line-vr-section"></div>
    <!-- Blog 2 -->
    <section class="blog2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-45">
                    <div class="item"> <img src="{{asset('webasset/img/blog/3.jpg')}}" class="img-fluid" alt="">
                        <div class="bottom-fade"></div>
                        <div class="title">
                            <h6>Rental</h6>
                            <h4>Documents required for car rental</h4>
                        </div>
                        <div class="curv-butn icon-bg">
                            <a href="post.html" class="vid">
                                <div class="icon"> <i class="icon-show"><span>29<br><i>Apr</i></span>
                                    </i><i class="ti-arrow-top-right icon-hidden"></i> </div>
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
                <div class="col-lg-4 col-md-6 mb-45">
                    <div class="item"> <img src="{{asset('webasset/img/blog/4.jpg')}}" class="img-fluid" alt="">
                        <div class="bottom-fade"></div>
                        <div class="title">
                            <h6>Sport Cars</h6>
                            <h4>Rental cost of sport and other cars</h4>
                        </div>
                        <div class="curv-butn icon-bg">
                            <a href="post.html" class="vid">
                                <div class="icon"> <i class="icon-show"><span>27<br><i>Apr</i></span>
                                    </i><i class="ti-arrow-top-right icon-hidden"></i> </div>
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
                <div class="col-lg-4 col-md-6 mb-45">
                    <div class="item"> <img src="{{asset('webasset/img/blog/5.jpg')}}" class="img-fluid" alt="">
                        <div class="bottom-fade"></div>
                        <div class="title">
                            <h6>Fines</h6>
                            <h4>Rental cars how to check driving fines?</h4>
                        </div>
                        <div class="curv-butn icon-bg">
                            <a href="post.html" class="vid">
                                <div class="icon"> <i class="icon-show"><span>25<br><i>Apr</i></span>
                                    </i><i class="ti-arrow-top-right icon-hidden"></i> </div>
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
                <div class="col-lg-4 col-md-6 mb-45">
                    <div class="item"> <img src="{{asset('webasset/img/blog/6.jpg')}}" class="img-fluid" alt="">
                        <div class="bottom-fade"></div>
                        <div class="title">
                            <h6>Airport</h6>
                            <h4>How to Rent a Car at the Airport Terminal?</h4>
                        </div>
                        <div class="curv-butn icon-bg">
                            <a href="post.html" class="vid">
                                <div class="icon"> <i class="icon-show"><span>23<br><i>Apr</i></span>
                                    </i><i class="ti-arrow-top-right icon-hidden"></i> </div>
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
                <div class="col-lg-4 col-md-6 mb-45">
                    <div class="item"> <img src="{{asset('webasset/img/blog/7.jpg')}}" class="img-fluid" alt="">
                        <div class="bottom-fade"></div>
                        <div class="title">
                            <h6>Rules</h6>
                            <h4>Penalties for violating the rules in rental cars</h4>
                        </div>
                        <div class="curv-butn icon-bg">
                            <a href="post.html" class="vid">
                                <div class="icon"> <i class="icon-show"><span>22<br><i>Apr</i></span>
                                    </i><i class="ti-arrow-top-right icon-hidden"></i> </div>
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
                <div class="col-lg-4 col-md-6 mb-45">
                    <div class="item"> <img src="{{asset('webasset/img/blog/8.jpg')}}" class="img-fluid" alt="">
                        <div class="bottom-fade"></div>
                        <div class="title">
                            <h6>Rental Car</h6>
                            <h4>How to check a car before renting?</h4>
                        </div>
                        <div class="curv-butn icon-bg">
                            <a href="post.html" class="vid">
                                <div class="icon"> <i class="icon-show"><span>20<br><i>Apr</i></span>
                                    </i><i class="ti-arrow-top-right icon-hidden"></i> </div>
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
            <!-- Pagination -->
            <div class="row">
                <div class="col-md-12 mt-15 text-center">
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
