@extends('layouts.authlayout')

@section('content')


<div class="wrapper">
    <section class="login-content">
 <div class="container h-100">
    <div class="row align-items-center justify-content-center h-100">
       <div class="col-md-5">
          <div class="card">
             <div class="card-body">
                <div class="row align-items-center">
                   <div class="col-lg-12">
                      <div class="auth-logo">
                         <img src="../images/logo.png" class="img-fluid  rounded-normal  darkmode-logo" alt="logo">
                         <img src="../images/logo-dark.png" alt="user-icon" class="img-fluid rounded-normal light-logo">
                      </div>
                      <div class="text-center">
                         <h2 class="mb-2">Hi ! Barry Tech</h2>
                         <p>Enter your password to access the admin.</p>
                      </div>
                      <form>
                         <div class="row">
                            <div class="col-lg-12">
                               <div class="form-group">
                                  <label>Password</label>
                                  <input class="form-control" type="password" placeholder="********">
                               </div>
                            </div>
                         </div>
                         <button type="submit" class="btn btn-primary btn-block">Login</button>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
</section>
</div>

@endsection