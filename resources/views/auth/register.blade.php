@extends('layouts.authlayout')

@section('content')

<div class="wrapper">
    <section class="login-content">
<div class="container h-100">
<div class="row align-items-center justify-content-center h-100">
  <div class="col-md-5">
     <div class="card p-3">
        <div class="card-body">
           <div class="auth-logo">
            <img src="{{asset('dashasset/images/logo.png')}}" class="img-fluid  rounded-normal  darkmode-logo" alt="logo">
            <img src="../images/logo-dark.png" alt="user-icon" class="img-fluid rounded-normal light-logo">     
            </div>
           <h3 class="mb-3 font-weight-bold text-center">Getting Started</h3>
           {{-- <p class="text-center text-secondary mb-4">Choose your social media to create account</p>
           <div class="social-btn d-flex justify-content-around align-items-center mb-4">
               <button class="btn btn-outline-light">
                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="88.428 12.828 107.543 207.085">
                       <path d="M158.232 219.912v-94.461h31.707l4.747-36.813h-36.454V65.134c0-10.658 2.96-17.922 18.245-17.922l19.494-.009V14.278c-3.373-.447-14.944-1.449-28.406-1.449-28.106 0-47.348 17.155-47.348 48.661v27.149H88.428v36.813h31.788v94.461l38.016-.001z" fill="#3c5a9a"/>
                   </svg>
               </button>
               <button class="btn btn-outline-light">
                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 262" preserveAspectRatio="xMidYMid">
                       <path d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" fill="#4285F4"/>
                       <path d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" fill="#34A853"/>
                       <path d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782" fill="#FBBC05"/>
                       <path d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" fill="#EB4335"/>
                   </svg>
               </button>
               <button class="btn btn-outline-light">
                   <svg width="20" height="20" viewBox="328 355 335 276" xmlns="http://www.w3.org/2000/svg">
                       <path d="M 630, 425 A 195, 195 0 0 1 331, 600 A 142, 142 0 0 0 428, 570A  70,  70 0 0 1 370, 523A  70,  70 0 0 0 401, 521A  70,  70 0 0 1 344, 455A  70,  70 0 0 0 372, 460A  70,  70 0 0 1 354, 370A 195, 195 0 0 0 495, 442A  67,  67 0 0 1 611, 380A 117, 117 0 0 0 654, 363A  65,  65 0 0 1 623, 401A 117, 117 0 0 0 662, 390A  65,  65 0 0 1 630, 425Z" style="fill:#3BA9EE;"/>
                       </svg>
               </button>
           </div>
           <div class="mb-5">
               <p class="line-around text-secondary mb-0"><span class="line-around-1">or register with email</span></p class="line-around mb-0">
           </div> --}}
           <!-- Session Status -->
           
           <!-- Validation Errors -->
            <form method="POST" action="{{url('/registerstore')}}" data-toggle="validator">
                @csrf

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="first_name" class="text-secondary">First Name</label>
                            <input class="form-control" id="first_name"  name="first_name" value="" required placeholder="Enter First Name">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="last_name" class="text-secondary">Last Name</label>
                            <input class="form-control" id="last_name"  name="last_name" value="" required placeholder="Enter Last Name">
                        </div>
                    </div>
                 <div class="col-lg-12">
                    <div class="form-group">
                       <label for="email" class="text-secondary">Email</label>
                       <input class="form-control" type="email" id="email"  name="email" value="" required placeholder="Enter Email">
                    </div>
                 </div>
                 <div class="col-lg-12">
                    <div class="form-group">
                       <label for="password" class="text-secondary">Password</label>
                       <input class="form-control" type="password" id="password" name="password" required autocomplete="new-password"  placeholder="Enter Password">
                    </div>
                 </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="password_confirmation" class="text-secondary">Confirm Password</label>
                        <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password"  placeholder="Enter Confirmation Password">
                    </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-block mt-2">Create Account</button>
              <div class="col-lg-12 mt-3">
                   <p class="mb-0 text-center">Do you have an account? <a href="{{url('/login')}}">Sign In</a></p>
              </div>
           </form>
        </div>
     </div>
  </div>
</div>
</div>
</section>
</div>

@endsection