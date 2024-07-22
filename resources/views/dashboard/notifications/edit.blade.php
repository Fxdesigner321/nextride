@extends('layouts.dashlayout')

@section('content')

<div id="remoteModelData" class="modal fade" role="dialog"></div>
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between mb-3">
                   <div class="d-flex align-items-center justify-content-between">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="customer.html">Customers</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Customer</li>
                            </ol>
                        </nav>
                    </div>                                   
                </div>
            </div>
            <div class="col-lg-12 mb-3 d-flex justify-content-between">
                <h4 class="font-weight-bold d-flex align-items-center">Edit Customer</h4>
                <a href="customer.html" class="btn btn-primary btn-sm d-flex align-items-center justify-content-between ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
                    <span class="ml-2">Back</span>
                </a>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <div class="card-body rounded bg-light">
                                    <div class="d-flex justify-content-center">
                                       

                                        <img src="images/user/1.jpg" class="img-fluid" alt="profile">
                                    </div>
                                    <div class="d-flex justify-content-center mt-2 mb-3">
                                        
                                        <p class="mb-0 text-muted font-weight-bold">Upload Image</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <form class="row g-3 date-icon-set-modal">
                                    <div class="col-md-6 mb-3">
                                        <label for="Text1" class="form-label font-weight-bold text-muted text-uppercase">Full Name</label>
                                        <input type="text" class="form-control" id="Text1" placeholder="Enter Full Name" value="Christian Bale">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label font-weight-bold text-muted text-uppercase mb-3">Gender</label><br>
                                        <div class="form-check form-check-inline">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="inlineRadio1" name="customRadio-1" class="custom-control-input">
                                                <label class="custom-control-label" for="inlineRadio1"> Male </label>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="inlineRadio2" name="customRadio-1" class="custom-control-input" checked="">
                                                <label class="custom-control-label" for="inlineRadio2"> Female </label>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline mt-2">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="inlineRadio3" name="customRadio-1" class="custom-control-input">
                                                <label class="custom-control-label" for="inlineRadio3"> Other </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3  position-relative">
                                        <label for="Text2" class="form-label font-weight-bold text-muted text-uppercase">Birth Day</label>
                                        <input type="text" class="form-control vanila-datepicker" id="Text2" name="event_date" placeholder="Enter Birth Day" autocomplete="off" value="05/15/2021">
                                        <span class="search-link">                                            
                                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Text3" class="form-label font-weight-bold text-muted text-uppercase">Company Name</label>
                                        <input type="text" class="form-control" id="Text3" placeholder="Enter Company Name" value="AB Nexa">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Text4" class="form-label font-weight-bold text-muted text-uppercase">Email</label>
                                        <input type="text" class="form-control" id="Text4" placeholder="Enter Email" value="christian.Bale@blueberrye.com">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Text5" class="form-label font-weight-bold text-muted text-uppercase">Phone</label>
                                        <input type="text" class="form-control" id="Text5" placeholder="Enter Phone" value="+1 (021) 145-2256">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="inputState" class="form-label font-weight-bold text-muted text-uppercase">Country</label>
                                        <select id="inputcountry" class="form-select form-control choicesjs" >
                                            <option class="">Select Country</option>
                                            <option value="USA" selected>USA</option>
                                            <option value="UK">UK</option>
                                            <option value="France">France</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="inputState" class="form-label font-weight-bold text-muted text-uppercase">State/Region</label>
                                        <select id="inputState" class="form-select form-control choicesjs">
                                            <option class="">Select State/Region</option>
                                            <option value="Ohio" selected>Ohio</option>
                                            <option value="Briston">Briston</option>
                                            <option value="Nevada">Nevada</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Texas">Texas</option>
                                            <option value="California">California</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Text6" class="form-label font-weight-bold text-muted text-uppercase">Address</label>
                                        <input type="text" class="form-control" id="Text6" placeholder="Enter Address" value="Lane & High, 2124 North High Street, Columbus">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Text7" class="form-label font-weight-bold text-muted text-uppercase">Zipcode</label>
                                        <input type="text" class="form-control" id="Text7" placeholder="Enter Zipcode" value="43201">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="Text9" class="form-label font-weight-bold text-muted text-uppercase">Bio</label>
                                        <textarea class="form-control" id="Text9" rows="2" placeholder="Enter Bio">Brolin uploaded a picture of Christian Bale next to his own father James Brolin. ... He commented on how similar the two looked in the photographs proving that they really were father and son.
                                        </textarea>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label font-weight-bold text-muted text-uppercase mb-3">Notification Type</label><br>
                                        <div class="form-check form-check-inline">
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input m-0" id="inlineCheckbox1">
                                                <label class="custom-control-label" for="inlineCheckbox1">Email</label>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input m-0" id="inlineCheckbox2" checked>
                                                <label class="custom-control-label" for="inlineCheckbox2">SMS</label>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input m-0" id="inlineCheckbox3">
                                                <label class="custom-control-label" for="inlineCheckbox3">Phone</label>
                                            </div>
                                        </div>
                                    </div>                                    
                                </form>
                                <div class="d-flex flex-wrap justify-content-between mt-3">
                                    <button class="btn btn-secondary font-weight-bold btn-sm">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                            Delete Customer
                                        </div>                                        
                                    </button>
                                    <button class="btn btn-primary font-weight-bold btn-sm">
                                        Save Customer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>

@endsection