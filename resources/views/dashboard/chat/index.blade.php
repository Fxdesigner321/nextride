@extends('layouts.dashlayout')

@section('content')


<div id="remoteModelData" class="modal fade" role="dialog"></div>
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
           <div class="col-lg-4 chat-left-wrapper">
              <div class="chat-list">
                 <div class="card">
                    <div class="card-header">
                       <div class="d-flex justify-content-between align-items-center mb-2">
                          <h4 class="card-title">Messages</h4>
                          <button class="btn text-primary bg-primary-light btn-sm d-block d-lg-none" data-toggel-extra="side-nav-close" data-expand-extra=".chat-left-wrapper">
                             <i class="las la-arrow-left"></i>
                          </button>
                       </div>
                       <div class="form-group mb-0">
                          <div class="input-group input-group-sm">
                             <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                   <svg class="svg-icon text-primary" id="search" width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                   </svg>
                                </span>
                             </div>
                             <input type="text" class="form-control form-control-sm" placeholder="Enter name" aria-label="Username" aria-describedby="basic-addon1">
                             <div class="input-group-append d-none">
                                <span class="input-group-text">
                                   <div class="spinner-border spinner-border-sm" role="status">
                                      <span class="sr-only">Loading...</span>
                                   </div>
                                </span>
                             </div>
                          </div>
                       </div>
                    </div>
                    <nav>
                       <ul class="nav nav-tabs justify-content-around" id="nav-tab" role="tablist">
                          <li class="nav-item">
                             <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Recent</a>
                          </li>
                          <li class="nav-item">
                             <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Archive</a>
                          </li>
                          <li class="nav-item">
                             <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">New</a>
                          </li>
                       </ul>
                    </nav>
                    <div class="card-body item-list">
                       <ul id="chat-list" role="custom-tab">
                          <li class="simple-item hover" data-toggle-extra="tab" data-target-extra="#user-content-1">
    <div class="img-container">
        <div class="avatar avatar-60">
            <img src="../images/user/1.jpg" alt="users" class="img-fluid avatar-borderd avatar-rounded">
            <span class="avatar-status">
                <i class="ri-checkbox-blank-circle-fill text-success"></i>
            </span>
        </div>
    </div>
    <div class="simple-item-body">
        <div class="simple-item-title">
           
                <h5 class="title-text">Joan Duo</h5>
                <div class="simple-item-time"> <span>Today</span> </div>
            
        </div>
        <div class="simple-item-content">
        <span class="simple-item-text short">
            I have share some media you can enjoy.
        </span>
        <div class="dropdown">
            <button class="btn btn-link " type="button" id="chat-dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="las la-caret-down"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="chat-dropdown-1">
                <a class="dropdown-item" href="#">Move Archive</a>
                <a class="dropdown-item" href="#">Favourite</a>
                <a class="dropdown-item" href="#">Delete</a>
            </div>
        </div>
        </div>
    </div>
</li>                          <li class="simple-item hover" data-toggle-extra="tab" data-target-extra="#user-content-2">
    <div class="img-container">
        <div class="avatar avatar-60">
            <img src="../images/user/2.jpg" alt="users" class="img-fluid avatar-borderd avatar-rounded">
            <span class="avatar-status">
                <i class="ri-checkbox-blank-circle-fill text-success"></i>
            </span>
        </div>
    </div>
    <div class="simple-item-body">
        <div class="simple-item-title">
           
                <h5 class="title-text">Jenifer Markus</h5>
                <div class="simple-item-time"> <span>Yesterday</span> </div>
            
        </div>
        <div class="simple-item-content">
        <span class="simple-item-text short">
            What are you doing?
        </span>
        <div class="dropdown">
            <button class="btn btn-link " type="button" id="chat-dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="las la-caret-down"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="chat-dropdown-2">
                <a class="dropdown-item" href="#">Move Archive</a>
                <a class="dropdown-item" href="#">Favourite</a>
                <a class="dropdown-item" href="#">Delete</a>
            </div>
        </div>
        </div>
    </div>
</li>                          <li class="simple-item hover" data-toggle-extra="tab" data-target-extra="#user-content-3">
    <div class="img-container">
        <div class="avatar avatar-60">
            <img src="../images/user/3.jpg" alt="users" class="img-fluid avatar-borderd avatar-rounded">
            <span class="avatar-status">
                <i class="ri-checkbox-blank-circle-fill text-success"></i>
            </span>
        </div>
    </div>
    <div class="simple-item-body">
        <div class="simple-item-title">
           
                <h5 class="title-text">Maria Daf</h5>
                <div class="simple-item-time"> <span>2 Days Ago</span> </div>
            
        </div>
        <div class="simple-item-content">
        <span class="simple-item-text short">
            You have time for for my task?
        </span>
        <div class="dropdown">
            <button class="btn btn-link " type="button" id="chat-dropdown-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="las la-caret-down"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="chat-dropdown-3">
                <a class="dropdown-item" href="#">Move Archive</a>
                <a class="dropdown-item" href="#">Favourite</a>
                <a class="dropdown-item" href="#">Delete</a>
            </div>
        </div>
        </div>
    </div>
</li>                          <li class="simple-item hover" data-toggle-extra="tab" data-target-extra="#user-content-4">
    <div class="img-container">
        <div class="avatar avatar-60">
            <img src="../images/user/4.jpg" alt="users" class="img-fluid avatar-borderd avatar-rounded">
            <span class="avatar-status">
                <i class="ri-checkbox-blank-circle-fill text-success"></i>
            </span>
        </div>
    </div>
    <div class="simple-item-body">
        <div class="simple-item-title">
           
                <h5 class="title-text">Joasaf Zurk</h5>
                <div class="simple-item-time"> <span>10/01/2021</span> </div>
            
        </div>
        <div class="simple-item-content">
        <span class="simple-item-text short">
            How are you?
        </span>
        <div class="dropdown">
            <button class="btn btn-link " type="button" id="chat-dropdown-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="las la-caret-down"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="chat-dropdown-4">
                <a class="dropdown-item" href="#">Move Archive</a>
                <a class="dropdown-item" href="#">Favourite</a>
                <a class="dropdown-item" href="#">Delete</a>
            </div>
        </div>
        </div>
    </div>
</li>                          <li class="simple-item hover" data-toggle-extra="tab" data-target-extra="#user-content-5">
    <div class="img-container">
        <div class="avatar avatar-60">
            <img src="../images/user/5.jpg" alt="users" class="img-fluid avatar-borderd avatar-rounded">
            <span class="avatar-status">
                <i class="ri-checkbox-blank-circle-fill text-success"></i>
            </span>
        </div>
    </div>
    <div class="simple-item-body">
        <div class="simple-item-title">
           
                <h5 class="title-text">Rock Musta</h5>
                <div class="simple-item-time"> <span>11/05/2020</span> </div>
            
        </div>
        <div class="simple-item-content">
        <span class="simple-item-text short">
            I want some teachnic for fast code can you help?
        </span>
        <div class="dropdown">
            <button class="btn btn-link " type="button" id="chat-dropdown-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="las la-caret-down"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="chat-dropdown-5">
                <a class="dropdown-item" href="#">Move Archive</a>
                <a class="dropdown-item" href="#">Favourite</a>
                <a class="dropdown-item" href="#">Delete</a>
            </div>
        </div>
        </div>
    </div>
</li>                          <li class="simple-item hover" data-toggle-extra="tab" data-target-extra="#user-content-6">
    <div class="img-container">
        <div class="avatar avatar-60">
            <img src="../images/user/6.jpg" alt="users" class="img-fluid avatar-borderd avatar-rounded">
            <span class="avatar-status">
                <i class="ri-checkbox-blank-circle-fill text-success"></i>
            </span>
        </div>
    </div>
    <div class="simple-item-body">
        <div class="simple-item-title">
           
                <h5 class="title-text">Joan Duo</h5>
                <div class="simple-item-time"> <span>Today</span> </div>
            
        </div>
        <div class="simple-item-content">
        <span class="simple-item-text short">
            I have share some media you can enjoy.
        </span>
        <div class="dropdown">
            <button class="btn btn-link " type="button" id="chat-dropdown-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="las la-caret-down"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="chat-dropdown-6">
                <a class="dropdown-item" href="#">Move Archive</a>
                <a class="dropdown-item" href="#">Favourite</a>
                <a class="dropdown-item" href="#">Delete</a>
            </div>
        </div>
        </div>
    </div>
</li>                          <li class="simple-item hover" data-toggle-extra="tab" data-target-extra="#user-content-7">
    <div class="img-container">
        <div class="avatar avatar-60">
            <img src="../images/user/7.html" alt="users" class="img-fluid avatar-borderd avatar-rounded">
            <span class="avatar-status">
                <i class="ri-checkbox-blank-circle-fill text-success"></i>
            </span>
        </div>
    </div>
    <div class="simple-item-body">
        <div class="simple-item-title">
           
                <h5 class="title-text">Jenifer Markus</h5>
                <div class="simple-item-time"> <span>Yesterday</span> </div>
            
        </div>
        <div class="simple-item-content">
        <span class="simple-item-text short">
            What are you doing?
        </span>
        <div class="dropdown">
            <button class="btn btn-link " type="button" id="chat-dropdown-7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="las la-caret-down"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="chat-dropdown-7">
                <a class="dropdown-item" href="#">Move Archive</a>
                <a class="dropdown-item" href="#">Favourite</a>
                <a class="dropdown-item" href="#">Delete</a>
            </div>
        </div>
        </div>
    </div>
</li>                          <li class="simple-item hover" data-toggle-extra="tab" data-target-extra="#user-content-8">
    <div class="img-container">
        <div class="avatar avatar-60">
            <img src="../images/user/1.jpg" alt="users" class="img-fluid avatar-borderd avatar-rounded">
            <span class="avatar-status">
                <i class="ri-checkbox-blank-circle-fill text-success"></i>
            </span>
        </div>
    </div>
    <div class="simple-item-body">
        <div class="simple-item-title">
           
                <h5 class="title-text">Maria Daf</h5>
                <div class="simple-item-time"> <span>2 Days Ago</span> </div>
            
        </div>
        <div class="simple-item-content">
        <span class="simple-item-text short">
            You have time for for my task?
        </span>
        <div class="dropdown">
            <button class="btn btn-link " type="button" id="chat-dropdown-8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="las la-caret-down"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="chat-dropdown-8">
                <a class="dropdown-item" href="#">Move Archive</a>
                <a class="dropdown-item" href="#">Favourite</a>
                <a class="dropdown-item" href="#">Delete</a>
            </div>
        </div>
        </div>
    </div>
</li>                          <li class="simple-item hover" data-toggle-extra="tab" data-target-extra="#user-content-9">
    <div class="img-container">
        <div class="avatar avatar-60">
            <img src="../images/user/2.jpg" alt="users" class="img-fluid avatar-borderd avatar-rounded">
            <span class="avatar-status">
                <i class="ri-checkbox-blank-circle-fill text-success"></i>
            </span>
        </div>
    </div>
    <div class="simple-item-body">
        <div class="simple-item-title">
           
                <h5 class="title-text">Joasaf Zurk</h5>
                <div class="simple-item-time"> <span>10/01/2021</span> </div>
            
        </div>
        <div class="simple-item-content">
        <span class="simple-item-text short">
            How are you?
        </span>
        <div class="dropdown">
            <button class="btn btn-link " type="button" id="chat-dropdown-9" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="las la-caret-down"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="chat-dropdown-9">
                <a class="dropdown-item" href="#">Move Archive</a>
                <a class="dropdown-item" href="#">Favourite</a>
                <a class="dropdown-item" href="#">Delete</a>
            </div>
        </div>
        </div>
    </div>
</li>                          <li class="simple-item hover" data-toggle-extra="tab" data-target-extra="#user-content-10">
    <div class="img-container">
        <div class="avatar avatar-60">
            <img src="../images/user/3.jpg" alt="users" class="img-fluid avatar-borderd avatar-rounded">
            <span class="avatar-status">
                <i class="ri-checkbox-blank-circle-fill text-success"></i>
            </span>
        </div>
    </div>
    <div class="simple-item-body">
        <div class="simple-item-title">
           
                <h5 class="title-text">Rock Musta</h5>
                <div class="simple-item-time"> <span>11/05/2020</span> </div>
            
        </div>
        <div class="simple-item-content">
        <span class="simple-item-text short">
            I want some teachnic for fast code can you help?
        </span>
        <div class="dropdown">
            <button class="btn btn-link " type="button" id="chat-dropdown-10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="las la-caret-down"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="chat-dropdown-10">
                <a class="dropdown-item" href="#">Move Archive</a>
                <a class="dropdown-item" href="#">Favourite</a>
                <a class="dropdown-item" href="#">Delete</a>
            </div>
        </div>
        </div>
    </div>
</li>                       </ul>
                    </div>
                 </div>
              </div>
           </div>
           <div class="col-lg-8 chat-right-wrapper">
            <div class="chat-content animate__animated animate__fadeIn active" data-toggle-extra="tab-content" id="user-content-1">
    <div class="card">
        <div class="right-sidenav" id="first-sidenav">
        <div class="d-flex">
            <button type="button" class="btn btn-sm" data-extra-dismiss="right-sidenav">
                <i class="las la-times"></i>
            </button>
        </div>
        <div class="chat-profile mx-auto">
            <div class="avatar avatar-70 avatar-borderd avatar-rounded mx-auto" data-toggel-extra="right-sidenav" data-target="#first-sidenav">
               <img src="../images/user/1.jpg" alt="users" class="img-fluid">
            </div>
            <h4 class="mb-2">Joan Duo</h4>
            <h6 class="mb-2">Developer</h6>
        </div>
        <div class="chat-detail">
            <div class="row">
                <div class="col-6 col-md-6 title">Nick Name:</div>
                <div class="col-6 col-md-6 text-right">Joan</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Tel:</div>
                <div class="col-6 col-md-6 text-right">0123456789</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Date Of Birth:</div>
                <div class="col-6 col-md-6 text-right">1 June 1997</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Gender:</div>
                <div class="col-6 col-md-6 text-right">Male</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Language:</div>
                <div class="col-6 col-md-6 text-right">English</div>
            </div>
        </div>
        </div>
        <div class="card-header chat-content-header">
        <div class="d-flex align-items-center">
            <button class="btn text-primary bg-primary-light btn-sm d-block d-lg-none mr-2" data-toggel-extra="side-nav" data-expand-extra=".chat-left-wrapper">
                <i class="las la-arrow-right"></i>
            </button>
            <div class="avatar-50 avatar-borderd avatar-rounded" data-toggel-extra="right-sidenav" data-target="#first-sidenav">
                <img src="../images/user/1.jpg" alt="users" class="img-fluid">
            </div>
            <div class="chat-title">
                <h5>Joan Duo</h5>
                <small>Online</small>
            </div>
        </div>
        <div class="chat-action">
            <div class="nav" id="user-1-action" role="tablist">
                <button class="btn text-primary bg-primary-light btn-sm" id="user-1-video-call-tab">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                </button>
                <button class="btn text-primary bg-primary-light btn-sm ml-2" id="user-1-call-tab">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </button>
            </div>
        </div>
        </div>
        <div class="card-body msg-content" id="user-1-chat-content">
        <div class="msg-list">
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="card-footer px-3 py-3">
        <form>
            <div class="input-group input-group-sm">
                <input type="text" class="form-control" id="chat-input" placeholder="Enter here..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button type="button" class="input-group-text chat-icon" id="basic-addon1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="las la-smile"></i>
                    </button>
                    <div class="dropdown-menu p-0 border-0" aria-labelledby="basic-addon1">
                    <emoji-picker data-target-input="#chat-input"></emoji-picker>
                    </div>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text chat-icon" id="basic-addon2">
                    <i class="lab la-telegram-plane"></i>
                    </span>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>            <div class="chat-content animate__animated animate__fadeIn " data-toggle-extra="tab-content" id="user-content-2">
    <div class="card">
        <div class="right-sidenav" id="first-sidenav">
        <div class="d-flex">
            <button type="button" class="btn btn-sm" data-extra-dismiss="right-sidenav">
                <i class="las la-times"></i>
            </button>
        </div>
        <div class="chat-profile mx-auto">
            <div class="avatar avatar-70 avatar-borderd avatar-rounded mx-auto" data-toggel-extra="right-sidenav" data-target="#first-sidenav">
               <img src="../images/user/2.jpg" alt="users" class="img-fluid">
            </div>
            <h4 class="mb-2">Jenifer Markus</h4>
            <h6 class="mb-2">Designer</h6>
        </div>
        <div class="chat-detail">
            <div class="row">
                <div class="col-6 col-md-6 title">Nick Name:</div>
                <div class="col-6 col-md-6 text-right">Jenifer</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Tel:</div>
                <div class="col-6 col-md-6 text-right">0678912345</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Date Of Birth:</div>
                <div class="col-6 col-md-6 text-right">8 July 1997</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Gender:</div>
                <div class="col-6 col-md-6 text-right">Female</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Language:</div>
                <div class="col-6 col-md-6 text-right">English</div>
            </div>
        </div>
        </div>
        <div class="card-header chat-content-header">
        <div class="d-flex align-items-center">
            <button class="btn text-primary bg-primary-light btn-sm d-block d-lg-none mr-2" data-toggel-extra="side-nav" data-expand-extra=".chat-left-wrapper">
                <i class="las la-arrow-right"></i>
            </button>
            <div class="avatar-50 avatar-borderd avatar-rounded" data-toggel-extra="right-sidenav" data-target="#first-sidenav">
                <img src="../images/user/2.jpg" alt="users" class="img-fluid">
            </div>
            <div class="chat-title">
                <h5>Jenifer Markus</h5>
                <small>Online</small>
            </div>
        </div>
        <div class="chat-action">
            <div class="nav" id="user-2-action" role="tablist">
                <button class="btn text-primary bg-primary-light btn-sm" id="user-2-video-call-tab">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                </button>
                <button class="btn text-primary bg-primary-light btn-sm ml-2" id="user-2-call-tab">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </button>
            </div>
        </div>
        </div>
        <div class="card-body msg-content" id="user-2-chat-content">
        <div class="msg-list">
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="card-footer px-3 py-3">
        <form>
            <div class="input-group input-group-sm">
                <input type="text" class="form-control" id="chat-input" placeholder="Enter here..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button type="button" class="input-group-text chat-icon" id="basic-addon1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="las la-smile"></i>
                    </button>
                    <div class="dropdown-menu p-0 border-0" aria-labelledby="basic-addon1">
                    <emoji-picker data-target-input="#chat-input"></emoji-picker>
                    </div>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text chat-icon" id="basic-addon2">
                    <i class="lab la-telegram-plane"></i>
                    </span>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>            <div class="chat-content animate__animated animate__fadeIn " data-toggle-extra="tab-content" id="user-content-3">
    <div class="card">
        <div class="right-sidenav" id="first-sidenav">
        <div class="d-flex">
            <button type="button" class="btn btn-sm" data-extra-dismiss="right-sidenav">
                <i class="las la-times"></i>
            </button>
        </div>
        <div class="chat-profile mx-auto">
            <div class="avatar avatar-70 avatar-borderd avatar-rounded mx-auto" data-toggel-extra="right-sidenav" data-target="#first-sidenav">
               <img src="../images/user/3.jpg" alt="users" class="img-fluid">
            </div>
            <h4 class="mb-2">Maria Daf</h4>
            <h6 class="mb-2">Planner</h6>
        </div>
        <div class="chat-detail">
            <div class="row">
                <div class="col-6 col-md-6 title">Nick Name:</div>
                <div class="col-6 col-md-6 text-right">Maria</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Tel:</div>
                <div class="col-6 col-md-6 text-right">0345671289</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Date Of Birth:</div>
                <div class="col-6 col-md-6 text-right">16 August 1997</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Gender:</div>
                <div class="col-6 col-md-6 text-right">Female</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Language:</div>
                <div class="col-6 col-md-6 text-right">English</div>
            </div>
        </div>
        </div>
        <div class="card-header chat-content-header">
        <div class="d-flex align-items-center">
            <button class="btn text-primary bg-primary-light btn-sm d-block d-lg-none mr-2" data-toggel-extra="side-nav" data-expand-extra=".chat-left-wrapper">
                <i class="las la-arrow-right"></i>
            </button>
            <div class="avatar-50 avatar-borderd avatar-rounded" data-toggel-extra="right-sidenav" data-target="#first-sidenav">
                <img src="../images/user/3.jpg" alt="users" class="img-fluid">
            </div>
            <div class="chat-title">
                <h5>Maria Daf</h5>
                <small>Online</small>
            </div>
        </div>
        <div class="chat-action">
            <div class="nav" id="user-3-action" role="tablist">
                <button class="btn text-primary bg-primary-light btn-sm" id="user-3-video-call-tab">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                </button>
                <button class="btn text-primary bg-primary-light btn-sm ml-2" id="user-3-call-tab">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </button>
            </div>
        </div>
        </div>
        <div class="card-body msg-content" id="user-3-chat-content">
        <div class="msg-list">
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="card-footer px-3 py-3">
        <form>
            <div class="input-group input-group-sm">
                <input type="text" class="form-control" id="chat-input" placeholder="Enter here..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button type="button" class="input-group-text chat-icon" id="basic-addon1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="las la-smile"></i>
                    </button>
                    <div class="dropdown-menu p-0 border-0" aria-labelledby="basic-addon1">
                    <emoji-picker data-target-input="#chat-input"></emoji-picker>
                    </div>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text chat-icon" id="basic-addon2">
                    <i class="lab la-telegram-plane"></i>
                    </span>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>            <div class="chat-content animate__animated animate__fadeIn " data-toggle-extra="tab-content" id="user-content-4">
    <div class="card">
        <div class="right-sidenav" id="first-sidenav">
        <div class="d-flex">
            <button type="button" class="btn btn-sm" data-extra-dismiss="right-sidenav">
                <i class="las la-times"></i>
            </button>
        </div>
        <div class="chat-profile mx-auto">
            <div class="avatar avatar-70 avatar-borderd avatar-rounded mx-auto" data-toggel-extra="right-sidenav" data-target="#first-sidenav">
               <img src="../images/user/4.jpg" alt="users" class="img-fluid">
            </div>
            <h4 class="mb-2">Joasaf Zurk</h4>
            <h6 class="mb-2">Content Writer</h6>
        </div>
        <div class="chat-detail">
            <div class="row">
                <div class="col-6 col-md-6 title">Nick Name:</div>
                <div class="col-6 col-md-6 text-right">Joasaf</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Tel:</div>
                <div class="col-6 col-md-6 text-right">0678945123</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Date Of Birth:</div>
                <div class="col-6 col-md-6 text-right">22 December 1997</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Gender:</div>
                <div class="col-6 col-md-6 text-right">Male</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Language:</div>
                <div class="col-6 col-md-6 text-right">English</div>
            </div>
        </div>
        </div>
        <div class="card-header chat-content-header">
        <div class="d-flex align-items-center">
            <button class="btn text-primary bg-primary-light btn-sm d-block d-lg-none mr-2" data-toggel-extra="side-nav" data-expand-extra=".chat-left-wrapper">
                <i class="las la-arrow-right"></i>
            </button>
            <div class="avatar-50 avatar-borderd avatar-rounded" data-toggel-extra="right-sidenav" data-target="#first-sidenav">
                <img src="../images/user/4.jpg" alt="users" class="img-fluid">
            </div>
            <div class="chat-title">
                <h5>Joasaf Zurk</h5>
                <small>Online</small>
            </div>
        </div>
        <div class="chat-action">
            <div class="nav" id="user-4-action" role="tablist">
                <button class="btn text-primary bg-primary-light btn-sm" id="user-4-video-call-tab">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                </button>
                <button class="btn text-primary bg-primary-light btn-sm ml-2" id="user-4-call-tab">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </button>
            </div>
        </div>
        </div>
        <div class="card-body msg-content" id="user-4-chat-content">
        <div class="msg-list">
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="card-footer px-3 py-3">
        <form>
            <div class="input-group input-group-sm">
                <input type="text" class="form-control" id="chat-input" placeholder="Enter here..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button type="button" class="input-group-text chat-icon" id="basic-addon1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="las la-smile"></i>
                    </button>
                    <div class="dropdown-menu p-0 border-0" aria-labelledby="basic-addon1">
                    <emoji-picker data-target-input="#chat-input"></emoji-picker>
                    </div>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text chat-icon" id="basic-addon2">
                    <i class="lab la-telegram-plane"></i>
                    </span>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>            <div class="chat-content animate__animated animate__fadeIn " data-toggle-extra="tab-content" id="user-content-5">
    <div class="card">
        <div class="right-sidenav" id="first-sidenav">
        <div class="d-flex">
            <button type="button" class="btn btn-sm" data-extra-dismiss="right-sidenav">
                <i class="las la-times"></i>
            </button>
        </div>
        <div class="chat-profile mx-auto">
            <div class="avatar avatar-70 avatar-borderd avatar-rounded mx-auto" data-toggel-extra="right-sidenav" data-target="#first-sidenav">
               <img src="../images/user/5.jpg" alt="users" class="img-fluid">
            </div>
            <h4 class="mb-2">Rock Musta</h4>
            <h6 class="mb-2">Developer</h6>
        </div>
        <div class="chat-detail">
            <div class="row">
                <div class="col-6 col-md-6 title">Nick Name:</div>
                <div class="col-6 col-md-6 text-right">Rock</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Tel:</div>
                <div class="col-6 col-md-6 text-right">0893456712</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Date Of Birth:</div>
                <div class="col-6 col-md-6 text-right">26 June 1997</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Gender:</div>
                <div class="col-6 col-md-6 text-right">Male</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Language:</div>
                <div class="col-6 col-md-6 text-right">English</div>
            </div>
        </div>
        </div>
        <div class="card-header chat-content-header">
        <div class="d-flex align-items-center">
            <button class="btn text-primary bg-primary-light btn-sm d-block d-lg-none mr-2" data-toggel-extra="side-nav" data-expand-extra=".chat-left-wrapper">
                <i class="las la-arrow-right"></i>
            </button>
            <div class="avatar-50 avatar-borderd avatar-rounded" data-toggel-extra="right-sidenav" data-target="#first-sidenav">
                <img src="../images/user/5.jpg" alt="users" class="img-fluid">
            </div>
            <div class="chat-title">
                <h5>Rock Musta</h5>
                <small>Online</small>
            </div>
        </div>
        <div class="chat-action">
            <div class="nav" id="user-5-action" role="tablist">
                <button class="btn text-primary bg-primary-light btn-sm" id="user-5-video-call-tab">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                </button>
                <button class="btn text-primary bg-primary-light btn-sm ml-2" id="user-5-call-tab">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </button>
            </div>
        </div>
        </div>
        <div class="card-body msg-content" id="user-5-chat-content">
        <div class="msg-list">
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="card-footer px-3 py-3">
        <form>
            <div class="input-group input-group-sm">
                <input type="text" class="form-control" id="chat-input" placeholder="Enter here..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button type="button" class="input-group-text chat-icon" id="basic-addon1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="las la-smile"></i>
                    </button>
                    <div class="dropdown-menu p-0 border-0" aria-labelledby="basic-addon1">
                    <emoji-picker data-target-input="#chat-input"></emoji-picker>
                    </div>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text chat-icon" id="basic-addon2">
                    <i class="lab la-telegram-plane"></i>
                    </span>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>            <div class="chat-content animate__animated animate__fadeIn " data-toggle-extra="tab-content" id="user-content-6">
    <div class="card">
        <div class="right-sidenav" id="first-sidenav">
        <div class="d-flex">
            <button type="button" class="btn btn-sm" data-extra-dismiss="right-sidenav">
                <i class="las la-times"></i>
            </button>
        </div>
        <div class="chat-profile mx-auto">
            <div class="avatar avatar-70 avatar-borderd avatar-rounded mx-auto" data-toggel-extra="right-sidenav" data-target="#first-sidenav">
               <img src="../images/user/6.jpg" alt="users" class="img-fluid">
            </div>
            <h4 class="mb-2">Joan Duo</h4>
            <h6 class="mb-2">Developer</h6>
        </div>
        <div class="chat-detail">
            <div class="row">
                <div class="col-6 col-md-6 title">Nick Name:</div>
                <div class="col-6 col-md-6 text-right">Joan</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Tel:</div>
                <div class="col-6 col-md-6 text-right">0123456789</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Date Of Birth:</div>
                <div class="col-6 col-md-6 text-right">1 June 1997</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Gender:</div>
                <div class="col-6 col-md-6 text-right">Male</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Language:</div>
                <div class="col-6 col-md-6 text-right">English</div>
            </div>
        </div>
        </div>
        <div class="card-header chat-content-header">
        <div class="d-flex align-items-center">
            <button class="btn text-primary bg-primary-light btn-sm d-block d-lg-none mr-2" data-toggel-extra="side-nav" data-expand-extra=".chat-left-wrapper">
                <i class="las la-arrow-right"></i>
            </button>
            <div class="avatar-50 avatar-borderd avatar-rounded" data-toggel-extra="right-sidenav" data-target="#first-sidenav">
                <img src="../images/user/6.jpg" alt="users" class="img-fluid">
            </div>
            <div class="chat-title">
                <h5>Joan Duo</h5>
                <small>Online</small>
            </div>
        </div>
        <div class="chat-action">
            <div class="nav" id="user-6-action" role="tablist">
                <button class="btn text-primary bg-primary-light btn-sm" id="user-6-video-call-tab">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                </button>
                <button class="btn text-primary bg-primary-light btn-sm ml-2" id="user-6-call-tab">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </button>
            </div>
        </div>
        </div>
        <div class="card-body msg-content" id="user-6-chat-content">
        <div class="msg-list">
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="card-footer px-3 py-3">
        <form>
            <div class="input-group input-group-sm">
                <input type="text" class="form-control" id="chat-input" placeholder="Enter here..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button type="button" class="input-group-text chat-icon" id="basic-addon1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="las la-smile"></i>
                    </button>
                    <div class="dropdown-menu p-0 border-0" aria-labelledby="basic-addon1">
                    <emoji-picker data-target-input="#chat-input"></emoji-picker>
                    </div>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text chat-icon" id="basic-addon2">
                    <i class="lab la-telegram-plane"></i>
                    </span>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>            <div class="chat-content animate__animated animate__fadeIn " data-toggle-extra="tab-content" id="user-content-7">
    <div class="card">
        <div class="right-sidenav" id="first-sidenav">
        <div class="d-flex">
            <button type="button" class="btn btn-sm" data-extra-dismiss="right-sidenav">
                <i class="las la-times"></i>
            </button>
        </div>
        <div class="chat-profile mx-auto">
            <div class="avatar avatar-70 avatar-borderd avatar-rounded mx-auto" data-toggel-extra="right-sidenav" data-target="#first-sidenav">
               <img src="../images/user/7.html" alt="users" class="img-fluid">
            </div>
            <h4 class="mb-2">Jenifer Markus</h4>
            <h6 class="mb-2">Designer</h6>
        </div>
        <div class="chat-detail">
            <div class="row">
                <div class="col-6 col-md-6 title">Nick Name:</div>
                <div class="col-6 col-md-6 text-right">Jenifer</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Tel:</div>
                <div class="col-6 col-md-6 text-right">0678912345</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Date Of Birth:</div>
                <div class="col-6 col-md-6 text-right">8 July 1997</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Gender:</div>
                <div class="col-6 col-md-6 text-right">Female</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Language:</div>
                <div class="col-6 col-md-6 text-right">English</div>
            </div>
        </div>
        </div>
        <div class="card-header chat-content-header">
        <div class="d-flex align-items-center">
            <button class="btn text-primary bg-primary-light btn-sm d-block d-lg-none mr-2" data-toggel-extra="side-nav" data-expand-extra=".chat-left-wrapper">
                <i class="las la-arrow-right"></i>
            </button>
            <div class="avatar-50 avatar-borderd avatar-rounded" data-toggel-extra="right-sidenav" data-target="#first-sidenav">
                <img src="../images/user/7.html" alt="users" class="img-fluid">
            </div>
            <div class="chat-title">
                <h5>Jenifer Markus</h5>
                <small>Online</small>
            </div>
        </div>
        <div class="chat-action">
            <div class="nav" id="user-7-action" role="tablist">
                <button class="btn text-primary bg-primary-light btn-sm" id="user-7-video-call-tab">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                </button>
                <button class="btn text-primary bg-primary-light btn-sm ml-2" id="user-7-call-tab">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </button>
            </div>
        </div>
        </div>
        <div class="card-body msg-content" id="user-7-chat-content">
        <div class="msg-list">
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="card-footer px-3 py-3">
        <form>
            <div class="input-group input-group-sm">
                <input type="text" class="form-control" id="chat-input" placeholder="Enter here..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button type="button" class="input-group-text chat-icon" id="basic-addon1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="las la-smile"></i>
                    </button>
                    <div class="dropdown-menu p-0 border-0" aria-labelledby="basic-addon1">
                    <emoji-picker data-target-input="#chat-input"></emoji-picker>
                    </div>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text chat-icon" id="basic-addon2">
                    <i class="lab la-telegram-plane"></i>
                    </span>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>            <div class="chat-content animate__animated animate__fadeIn " data-toggle-extra="tab-content" id="user-content-8">
    <div class="card">
        <div class="right-sidenav" id="first-sidenav">
        <div class="d-flex">
            <button type="button" class="btn btn-sm" data-extra-dismiss="right-sidenav">
                <i class="las la-times"></i>
            </button>
        </div>
        <div class="chat-profile mx-auto">
            <div class="avatar avatar-70 avatar-borderd avatar-rounded mx-auto" data-toggel-extra="right-sidenav" data-target="#first-sidenav">
               <img src="../images/user/1.jpg" alt="users" class="img-fluid">
            </div>
            <h4 class="mb-2">Maria Daf</h4>
            <h6 class="mb-2">Planner</h6>
        </div>
        <div class="chat-detail">
            <div class="row">
                <div class="col-6 col-md-6 title">Nick Name:</div>
                <div class="col-6 col-md-6 text-right">Maria</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Tel:</div>
                <div class="col-6 col-md-6 text-right">0345671289</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Date Of Birth:</div>
                <div class="col-6 col-md-6 text-right">16 August 1997</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Gender:</div>
                <div class="col-6 col-md-6 text-right">Female</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Language:</div>
                <div class="col-6 col-md-6 text-right">English</div>
            </div>
        </div>
        </div>
        <div class="card-header chat-content-header">
        <div class="d-flex align-items-center">
            <button class="btn text-primary bg-primary-light btn-sm d-block d-lg-none mr-2" data-toggel-extra="side-nav" data-expand-extra=".chat-left-wrapper">
                <i class="las la-arrow-right"></i>
            </button>
            <div class="avatar-50 avatar-borderd avatar-rounded" data-toggel-extra="right-sidenav" data-target="#first-sidenav">
                <img src="../images/user/1.jpg" alt="users" class="img-fluid">
            </div>
            <div class="chat-title">
                <h5>Maria Daf</h5>
                <small>Online</small>
            </div>
        </div>
        <div class="chat-action">
            <div class="nav" id="user-8-action" role="tablist">
                <button class="btn text-primary bg-primary-light btn-sm" id="user-8-video-call-tab">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                </button>
                <button class="btn text-primary bg-primary-light btn-sm ml-2" id="user-8-call-tab">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </button>
            </div>
        </div>
        </div>
        <div class="card-body msg-content" id="user-8-chat-content">
        <div class="msg-list">
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="card-footer px-3 py-3">
        <form>
            <div class="input-group input-group-sm">
                <input type="text" class="form-control" id="chat-input" placeholder="Enter here..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button type="button" class="input-group-text chat-icon" id="basic-addon1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="las la-smile"></i>
                    </button>
                    <div class="dropdown-menu p-0 border-0" aria-labelledby="basic-addon1">
                    <emoji-picker data-target-input="#chat-input"></emoji-picker>
                    </div>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text chat-icon" id="basic-addon2">
                    <i class="lab la-telegram-plane"></i>
                    </span>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>            <div class="chat-content animate__animated animate__fadeIn " data-toggle-extra="tab-content" id="user-content-9">
    <div class="card">
        <div class="right-sidenav" id="first-sidenav">
        <div class="d-flex">
            <button type="button" class="btn btn-sm" data-extra-dismiss="right-sidenav">
                <i class="las la-times"></i>
            </button>
        </div>
        <div class="chat-profile mx-auto">
            <div class="avatar avatar-70 avatar-borderd avatar-rounded mx-auto" data-toggel-extra="right-sidenav" data-target="#first-sidenav">
               <img src="../images/user/2.jpg" alt="users" class="img-fluid">
            </div>
            <h4 class="mb-2">Joasaf Zurk</h4>
            <h6 class="mb-2">Content Writer</h6>
        </div>
        <div class="chat-detail">
            <div class="row">
                <div class="col-6 col-md-6 title">Nick Name:</div>
                <div class="col-6 col-md-6 text-right">Joasaf</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Tel:</div>
                <div class="col-6 col-md-6 text-right">0678945123</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Date Of Birth:</div>
                <div class="col-6 col-md-6 text-right">22 December 1997</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Gender:</div>
                <div class="col-6 col-md-6 text-right">Male</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Language:</div>
                <div class="col-6 col-md-6 text-right">English</div>
            </div>
        </div>
        </div>
        <div class="card-header chat-content-header">
        <div class="d-flex align-items-center">
            <button class="btn text-primary bg-primary-light btn-sm d-block d-lg-none mr-2" data-toggel-extra="side-nav" data-expand-extra=".chat-left-wrapper">
                <i class="las la-arrow-right"></i>
            </button>
            <div class="avatar-50 avatar-borderd avatar-rounded" data-toggel-extra="right-sidenav" data-target="#first-sidenav">
                <img src="../images/user/2.jpg" alt="users" class="img-fluid">
            </div>
            <div class="chat-title">
                <h5>Joasaf Zurk</h5>
                <small>Online</small>
            </div>
        </div>
        <div class="chat-action">
            <div class="nav" id="user-9-action" role="tablist">
                <button class="btn text-primary bg-primary-light btn-sm" id="user-9-video-call-tab">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                </button>
                <button class="btn text-primary bg-primary-light btn-sm ml-2" id="user-9-call-tab">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </button>
            </div>
        </div>
        </div>
        <div class="card-body msg-content" id="user-9-chat-content">
        <div class="msg-list">
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="card-footer px-3 py-3">
        <form>
            <div class="input-group input-group-sm">
                <input type="text" class="form-control" id="chat-input" placeholder="Enter here..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button type="button" class="input-group-text chat-icon" id="basic-addon1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="las la-smile"></i>
                    </button>
                    <div class="dropdown-menu p-0 border-0" aria-labelledby="basic-addon1">
                    <emoji-picker data-target-input="#chat-input"></emoji-picker>
                    </div>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text chat-icon" id="basic-addon2">
                    <i class="lab la-telegram-plane"></i>
                    </span>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>            <div class="chat-content animate__animated animate__fadeIn " data-toggle-extra="tab-content" id="user-content-10">
    <div class="card">
        <div class="right-sidenav" id="first-sidenav">
        <div class="d-flex">
            <button type="button" class="btn btn-sm" data-extra-dismiss="right-sidenav">
                <i class="las la-times"></i>
            </button>
        </div>
        <div class="chat-profile mx-auto">
            <div class="avatar avatar-70 avatar-borderd avatar-rounded mx-auto" data-toggel-extra="right-sidenav" data-target="#first-sidenav">
               <img src="../images/user/3.jpg" alt="users" class="img-fluid">
            </div>
            <h4 class="mb-2">Rock Musta</h4>
            <h6 class="mb-2">Developer</h6>
        </div>
        <div class="chat-detail">
            <div class="row">
                <div class="col-6 col-md-6 title">Nick Name:</div>
                <div class="col-6 col-md-6 text-right">Rock</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Tel:</div>
                <div class="col-6 col-md-6 text-right">0893456712</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Date Of Birth:</div>
                <div class="col-6 col-md-6 text-right">26 June 1997</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Gender:</div>
                <div class="col-6 col-md-6 text-right">Male</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-6 title">Language:</div>
                <div class="col-6 col-md-6 text-right">English</div>
            </div>
        </div>
        </div>
        <div class="card-header chat-content-header">
        <div class="d-flex align-items-center">
            <button class="btn text-primary bg-primary-light btn-sm d-block d-lg-none mr-2" data-toggel-extra="side-nav" data-expand-extra=".chat-left-wrapper">
                <i class="las la-arrow-right"></i>
            </button>
            <div class="avatar-50 avatar-borderd avatar-rounded" data-toggel-extra="right-sidenav" data-target="#first-sidenav">
                <img src="../images/user/3.jpg" alt="users" class="img-fluid">
            </div>
            <div class="chat-title">
                <h5>Rock Musta</h5>
                <small>Online</small>
            </div>
        </div>
        <div class="chat-action">
            <div class="nav" id="user-10-action" role="tablist">
                <button class="btn text-primary bg-primary-light btn-sm" id="user-10-video-call-tab">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                </button>
                <button class="btn text-primary bg-primary-light btn-sm ml-2" id="user-10-call-tab">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </button>
            </div>
        </div>
        </div>
        <div class="card-body msg-content" id="user-10-chat-content">
        <div class="msg-list">
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg">
                <div class="triangle-topleft single-msg-shap">
                </div>
                <div class="single-msg-content">
                    <div class="msg-detail">
                    <span>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                    
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
            <div class="single-msg user">
                <div class="triangle-topright single-msg-shap">
                </div>
                <div class="single-msg-content user">
                    <div class="msg-detail">
                    <span>Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span>
                    </div>
                    <div class="msg-action">
                    <span>04:15</span>
                     
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="card-footer px-3 py-3">
        <form>
            <div class="input-group input-group-sm">
                <input type="text" class="form-control" id="chat-input" placeholder="Enter here..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button type="button" class="input-group-text chat-icon" id="basic-addon1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="las la-smile"></i>
                    </button>
                    <div class="dropdown-menu p-0 border-0" aria-labelledby="basic-addon1">
                    <emoji-picker data-target-input="#chat-input"></emoji-picker>
                    </div>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text chat-icon" id="basic-addon2">
                    <i class="lab la-telegram-plane"></i>
                    </span>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>           </div>
        </div>
     </div>
</div>


@endsection