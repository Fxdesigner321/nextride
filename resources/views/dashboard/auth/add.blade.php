@extends('layouts.dashlayout')

@section('content')

<div id="remoteModelData" class="modal fade" role="dialog"></div>
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                   <div class="d-flex align-items-center justify-content-between">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="{{url('dashboard/auth')}}">User</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add User</li>
                            </ol>
                        </nav>
                    </div>                                   
                </div>
            </div>
            <div class="col-lg-12 mb-3 d-flex justify-content-between">
                <h4 class="font-weight-bold0 d-flex align-items-center">Add New User</h4>
                <a href="{{url('dashboard/auth')}}" class="btn btn-primary btn-sm d-flex align-items-center justify-content-between">
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
                                    <div class="d-flex justify-content-center mt-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" height="80px" x="0px" y="0px" viewBox="0 0 419.2 419.2" style="enable-background:new 0 0 419.2 419.2;" xml:space="preserve" stroke="currentColor">
                                            <g>
                                                <g>
                                                    <g>
                                                        <circle cx="158" cy="144.4" r="28.8"/>
                                                        <path d="M394.4,250.4c-13.6-12.8-30.8-21.2-49.6-23.6V80.4c0-15.6-6.4-29.6-16.4-40C318,30,304,24,288.4,24h-232     c-15.6,0-29.6,6.4-40,16.4C6,50.8,0,64.8,0,80.4v184.4V282v37.2c0,15.6,6.4,29.6,16.4,40c10.4,10.4,24.4,16.4,40,16.4h224.4     c14.8,12,33.2,19.6,53.6,19.6c23.6,0,44.8-9.6,60-24.8c15.2-15.2,24.8-36.4,24.8-60C419.2,286.8,409.6,265.6,394.4,250.4z      M21.2,80.4c0-9.6,4-18.4,10.4-24.4c6.4-6.4,15.2-10.4,24.8-10.4h232c9.6,0,18.4,4,24.8,10.4c6.4,6.4,10.4,15.2,10.4,24.8v124.8     l-59.2-59.2c-4-4-10.8-4.4-15.2,0L160,236l-60.4-60.8c-4-4-10.8-4.4-15.2,0l-63.2,64V80.4z M56,355.2v-0.8     c-9.6,0-18.4-4-24.8-10.4c-6-6.4-10-15.2-10-24.8V282v-12.4L92,198.4l60.4,60.4c4,4,10.8,4,15.2,0l89.2-89.6l58.4,58.8     c-1.2,0.4-2.4,0.8-3.6,1.2c-1.6,0.4-3.2,0.8-5.2,1.6c-1.6,0.4-3.2,1.2-4.8,1.6c-1.2,0.4-2,0.8-3.2,1.6c-1.6,0.8-2.8,1.2-4,2     c-2,1.2-4,2.4-6,3.6c-1.2,0.8-2,1.2-3.2,2c-0.8,0.4-1.2,0.8-2,1.2c-3.6,2.4-6.8,5.2-9.6,8.4c-15.2,15.2-24.8,36.4-24.8,60     c0,6,0.8,11.6,2,17.6c0.4,1.6,0.8,2.8,1.2,4.4c1.2,4,2.4,8,4,12v0.4c1.6,3.2,3.2,6.8,5.2,9.6H56z M378.8,355.2     c-11.6,11.6-27.2,18.4-44.8,18.4c-16.8,0-32.4-6.8-43.6-17.6c-1.6-1.6-3.2-3.6-4.8-5.2c-1.2-1.2-2.4-2.8-3.6-4     c-1.6-2-2.8-4.4-4-6.8c-0.8-1.6-1.6-2.8-2.4-4.4c-0.8-2-1.6-4.4-2-6.8c-0.4-1.6-1.2-3.6-1.6-5.2c-0.8-4-1.2-8.4-1.2-12.8     c0-17.6,7.2-33.2,18.4-44.8c11.2-11.6,27.2-18.4,44.8-18.4s33.2,7.2,44.8,18.4c11.6,11.6,18.4,27.2,18.4,44.8     C397.2,328,390,343.6,378.8,355.2z"/>
                                                        <path d="M341.6,267.6c-0.8-0.8-2-1.6-3.6-2.4c-1.2-0.4-2.4-0.8-3.6-0.8c-0.4,0-0.4,0-0.4,0c-0.4,0-0.4,0-0.4,0     c-1.2,0-2.4,0.4-3.6,0.8c-1.2,0.4-2.4,1.2-3.6,2.4l-24.8,24.8c-4,4-4,10.8,0,15.2c4,4,10.8,4,15.2,0l6.4-6.4v44     c0,6,4.8,10.8,10.8,10.8s10.8-4.8,10.8-10.8v-44l6.4,6.4c4,4,10.8,4,15.2,0c4-4,4-10.8,0-15.2L341.6,267.6z"/>
                                                    </g>
                                                </g>
                                            </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                        </svg>
                                    </div>
                                    <div class="d-flex justify-content-center mt-2 mb-5">
                                        <p class="mb-0 text-muted font-weight-bold">Upload Image</p>
                                    </div>
                                </div>
                            </div>
                            @if ($errors)
                            @foreach ($errors as $error)
                            {{$error}}
                            @endforeach
                            @endif
                            <div class="col-md-9">
                                <form action="{{url('/dashboard/auth/store')}}" method="POST"  enctype="multipart/form-data" class="row g-3 date-icon-set-modal">
                                    @csrf
                                    <div class="col-md-6 mb-3">
                                        <label for="Text1" class="form-label font-weight-bold text-muted text-uppercase">First Name</label>
                                        <input type="text" class="form-control" id="Text1" name="fname" placeholder="Enter First Name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Text1" class="form-label font-weight-bold text-muted text-uppercase">Last Name</label>
                                        <input type="text" class="form-control" id="Text1" name="lname" placeholder="Enter Last Name">
                                    </div>
                                    
                                    <div class="col-md-6 mb-3 position-relative">
                                        <label for="Text2" class="form-label font-weight-bold text-muted text-uppercase">Birth Day</label>
                                        <input type="text" class="form-control vanila-datepicker" id="Text2" name="dob" placeholder="Enter Birth Day" autocomplete="off">
                                        <span class="search-link">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Text4" class="form-label font-weight-bold text-muted text-uppercase">Email</label>
                                        <input type="text" class="form-control" id="Text4" name="email" placeholder="Enter Email">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Text5" class="form-label font-weight-bold text-muted text-uppercase">Password</label>
                                        <input type="text" class="form-control" id="Text5" name="password" placeholder="Enter Password">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Text5" class="form-label font-weight-bold text-muted text-uppercase">Phone</label>
                                        <input type="text" class="form-control" name="phone" id="Text5" placeholder="Enter Phone">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label font-weight-bold text-muted text-uppercase">Gender</label><br>
                                        <div class="form-check form-check-inline">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="inlineRadio1" value="1" name="gender" class="custom-control-input">
                                                <label class="custom-control-label"  for="inlineRadio1"> Male </label>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="inlineRadio2" value="2" name="gender" class="custom-control-input">
                                                <label class="custom-control-label" for="inlineRadio2"> Female </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mt-3">
                                        <button type="submit" class="btn btn-primary">
                                            Add Customer
                                        </button>
                                    </div>
                                </form>
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