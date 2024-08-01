@extends('layouts.homelayout')

<style>
    form{
        border: 2px solid #1CCC00;
        border-radius: 15px; 
        padding: 2rem 2rem 2rem 2rem;
    }

    form h3{
        font-weight: 500;
        color: white;
    }

    form button{
        max-width: 100%;
        background-color: greenyellow; 
    }
</style>

@section('content')


<div class="container" style="margin-top: 10rem; content">
    
        <!-- Tabs Navigation -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="color: lightgrey;">Ride</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="color: lightgrey;">Monthly Ride</a>
            </li>
        </ul>

        <!-- Tabs Content -->
        <div class="tab-content mt-4" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    <div class="col-sm-5">
                        <form>
                            <h3>Get a ride</h3>
                            <input type="text" class="form-control mt-3" name="#" placeholder="Pickup Location">
                            <input type="text" class="form-control mt-3" name="#" placeholder="Dropoff Location">
                            <input type="text" class="form-control mt-3" name="#" placeholder="Pickup Now">
                            <button type="submit" class="btn mt-3" style=" background-color: #1CCC00; width: 100%; color: black; height: 10%">Search</button>
                          </form>
                    </div>
                    <div class="col-sm-7">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d924237.7093914544!2d66.49597267064054!3d25.192983698398944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1722445491520!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                </div>
            </div>

            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row">
                    <div class="row">
                        <div class="col-sm-5">
                            <form>
                                <h3>Monthly Ride</h3>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control mt-3" name="#" placeholder="Pickup Location">
                                        <input type="text" class="form-control mt-3" name="#" placeholder="Dropoff Location">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                        <label for="">Reach work by:</label>
                                        <input type="time" class="form-control" name="#">
                                    </div>
                                    <div class="mt-1">
                                        <label for="">Leave work by:</label>
                                        <input type="time" class="form-control" name="#" >
                                    </div>
                                    </div>
                                </div>
                                <div class="passengers-add">
                                    <div class="row">
                                        <div class="col-sm-2"><p>Passenger</p></div>
                                        <div class="col-sm-5"><input type="number"><i class="fa-solid fa-person" style="color: #ffffff;"></i></div>
                                        <div class="col-sm-5"><input type="number"><i class="fa-solid fa-person-dress" style="color: #ffffff;"></i></div>
                                    </div>
                                </div>
                                <button type="submit" class="btn mt-3" style=" background-color: #1CCC00; width: 100%; color: black; height: 10%">Search</button>
                              </form>
                        </div>
                        <div class="col-sm-7">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d924237.7093914544!2d66.49597267064054!3d25.192983698398944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1722445491520!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>

</div>
@endsection
