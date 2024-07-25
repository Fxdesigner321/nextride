@extends('layouts.authlayout')

@section('content')


<div class="wrapper">
    <section class="login-content">
<div class="container h-100">
   <div class="row align-items-center justify-content-center h-100">
      <div class="col-md-5">
         <div class="card p-5">
            <div class="card-body">
               <div class="auth-logo">
               <img src="../images/logo.png" class="img-fluid  rounded-normal  darkmode-logo" alt="logo">
                  <img src="../images/logo-dark.png" alt="user-icon" class="img-fluid rounded-normal light-logo">
                </div>
               <h3 class="mb-3 text-center">Reset Password</h3>
               <p class="text-center small text-secondary mb-3">You can reset your password here</p>
               <!-- Session Status -->
               
               <!-- Validation Errors -->
                                      <form method="POST" action="https://templates.iqonic.design/datum/laravel/public/forgot-password">
                    <input type="hidden" name="_token" value="6bYqF3CFloigfnwqIZVI2JtmIysek8sFgGcoLHnT">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="form-group">
                           <label class="text-secondary">Email</label>
                           <input class="form-control" type="email" placeholder="Enter Email" id="email" name="email" :value="old('email')" required autofocus>
                        </div>
                     </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
</section>
</div>


@endsection