<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Bike_TypeController;
use App\Http\Controllers\bikesController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\Ride_RequestController;
use App\Http\Controllers\RidesController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\Trip_HistoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Vehicle_TypeController;
use App\Http\Controllers\VehiclesController;
use App\Http\Controllers\YearController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Home Page Routes
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/about',[HomeController::class, 'about']);
Route::get('/blog',[HomeController::class, 'blog']);
Route::get('/buses',[HomeController::class, 'buses']);
Route::get('/cardetails',[HomeController::class, 'cardetails']);
Route::get('/career',[HomeController::class, 'career']);
Route::get('/contact',[HomeController::class, 'contact']);
Route::get('/drive',[HomeController::class, 'drive'])->middleware('auth');
Route::get('/faq',[HomeController::class, 'faq']);
Route::get('/picnic',[HomeController::class, 'picnic']);
Route::get('/post',[HomeController::class, 'post']);
Route::get('/price',[HomeController::class, 'price']);
Route::get('/rentacar',[HomeController::class, 'rentacar']);
Route::get('/ride',[HomeController::class, 'ride']);
Route::get('/teamsingle',[HomeController::class, 'teamsingle']);

Route::get('/custom-auth',function(){
    return view('errors.403');
})->name('403');


// auth and register routees 


Route::get('/login',[AuthController::class , 'login'])->name('login');
Route::post('/loginstore',[AuthController::class , 'loginstore'])->name('loginstore');
Route::get('/register',[AuthController::class , 'register']);
Route::post('/registerstore',[AuthController::class , 'registerstore']);
Route::get('/logout',[AuthController::class , 'logout'])->name('logout');

// Dashboard Routes 
Route::get('/dashboard',[DashboardController::class , 'index'])->middleware('admin');

// Customer Routes
Route::get('/dashboard/customer',[CustomerController::class , 'index']);
Route::get('/dashboard/customer/add',[CustomerController::class , 'add']);
Route::post('/dashboard/customer/store',[CustomerController::class , 'store']);
Route::get('/dashboard/customer/edit/',[CustomerController::class , 'edit']); /*{id}*/
Route::get('/dashboard/customer/delete/{id}',[CustomerController::class , 'delete']);

// Bike_Type Routes
Route::get('/dashboard/bike_type',[Bike_TypeController::class , 'index']);
Route::post('/dashboard/bike_type/add',[Bike_TypeController::class , 'add']);
Route::post('/dashboard/bike_type/edit/{id}',[Bike_TypeController::class , 'edit']);
Route::post('/dashboard/bike_type/store',[Bike_TypeController::class , 'store']);
Route::get('/dashboard/bike_type/delete/{id}',[Bike_TypeController::class , 'delete']);

// Bike Routes
Route::get('/dashboard/bike',[BikesController::class , 'index']);
Route::get('/dashboard/bike/add',[BikesController::class , 'add']);
Route::post('/dashboard/bike/edit/{id}',[BikesController::class , 'edit']);
Route::post('/dashboard/bike/store',[BikesController::class , 'store']);
Route::get('/dashboard/bike/delete/{id}',[BikesController::class , 'delete']);

// Driver Routes
Route::get('/dashboard/driver',[DriverController::class , 'index']);
Route::get('/dashboard/driver/add',[DriverController::class , 'add']);
Route::post('/dashboard/driver/edit/{id}',[DriverController::class , 'edit']);
Route::post('/dashboard/driver/store',[DriverController::class , 'store']);
Route::get('/dashboard/driver/delete/{id}',[DriverController::class , 'delete']);

// Location Routes
Route::get('/dashboard/location',[LocationController::class , 'index']);
Route::post('/dashboard/location/add',[LocationController::class , 'add']);
Route::post('/dashboard/location/edit/{id}',[LocationController::class , 'edit']);
Route::post('/dashboard/location/store',[LocationController::class , 'store']);
Route::get('/dashboard/location/delete/{id}',[LocationController::class , 'delete']);

// Notifications Routes
Route::get('/dashboard/notifications',[NotificationController::class , 'index']);
Route::post('/dashboard/notifications/add',[NotificationController::class , 'add']);
Route::post('/dashboard/notifications/edit/{id}',[NotificationController::class , 'edit']);
Route::post('/dashboard/notifications/store',[NotificationController::class , 'store']);
Route::get('/dashboard/notifications/delete/{id}',[NotificationController::class , 'delete']);

// Payment Routes
Route::get('/dashboard/payment',[PaymentController::class , 'index']);
Route::post('/dashboard/payment/add',[PaymentController::class , 'add']);
Route::post('/dashboard/payment/edit/{id}',[PaymentController::class , 'edit']);
Route::post('/dashboard/payment/store',[PaymentController::class , 'store']);
Route::get('/dashboard/payment/delete/{id}',[PaymentController::class , 'delete']);

// Rating Routes
Route::get('/dashboard/rating',[RatingController::class , 'index']);
Route::post('/dashboard/rating/add',[RatingController::class , 'add']);
Route::post('/dashboard/rating/edit/{id}',[RatingController::class , 'edit']);
Route::post('/dashboard/rating/store',[RatingController::class , 'store']);
Route::get('/dashboard/rating/delete/{id}',[RatingController::class , 'delete']);

// Ride_Request Routes
Route::get('/dashboard/ride_request',[Ride_RequestController::class , 'index']);
Route::post('/dashboard/ride_request/add',[Ride_RequestController::class , 'add']);
Route::post('/dashboard/ride_request/edit/{id}',[Ride_RequestController::class , 'edit']);
Route::post('/dashboard/ride_request/store',[Ride_RequestController::class , 'store']);
Route::get('/dashboard/ride_request/delete/{id}',[Ride_RequestController::class , 'delete']);

// Rides Routes
Route::get('/dashboard/rides',[RidesController::class , 'index']);
Route::post('/dashboard/rides/add',[RidesController::class , 'add']);
Route::post('/dashboard/rides/edit/{id}',[RidesController::class , 'edit']);
Route::post('/dashboard/rides/store',[RidesController::class , 'store']);
Route::get('/dashboard/rides/delete/{id}',[RidesController::class , 'delete']);

// Roles Routes
Route::get('/dashboard/roles',[RolesController::class , 'index']);
Route::post('/dashboard/roles/add',[RolesController::class , 'add']);
Route::post('/dashboard/roles/edit/{id}',[RolesController::class , 'edit']);
Route::post('/dashboard/roles/store',[RolesController::class , 'store']);
Route::get('/dashboard/roles/delete/{id}',[RolesController::class , 'delete']);

// Trip_History Routes
Route::get('/dashboard/trip_history',[Trip_HistoryController::class , 'index']);
Route::post('/dashboard/trip_history/add',[Trip_HistoryController::class , 'add']);
Route::post('/dashboard/trip_history/edit/{id}',[Trip_HistoryController::class , 'edit']);
Route::post('/dashboard/trip_history/store',[Trip_HistoryController::class , 'store']);
Route::get('/dashboard/trip_history/delete/{id}',[Trip_HistoryController::class , 'delete']);

// Users Routes
Route::get('/dashboard/user',[UserController::class , 'index']);
Route::get('/dashboard/user/add',[UserController::class , 'add']);
Route::post('/dashboard/user/edit/{id}',[UserController::class , 'edit']);
Route::post('/dashboard/user/store',[UserController::class , 'store']);
Route::get('/dashboard/user/delete/{id}',[UserController::class , 'delete']);
Route::get('/dashboard/user/privacy_setting',[UserController::class , 'privacy_setting']);
Route::get('/dashboard/user/profile_edit',[UserController::class , 'profile_edit']);
Route::get('/dashboard/user/account_setting',[UserController::class , 'account_setting']);



// Vehicle_Type Routes
Route::get('/dashboard/vehicle_type',[Vehicle_TypeController::class , 'index']);
Route::post('/dashboard/vehicle_type/add',[Vehicle_TypeController::class , 'add']);
Route::post('/dashboard/vehicle_type/edit/{id}',[Vehicle_TypeController::class , 'edit']);
Route::post('/dashboard/vehicle_type/store',[VehiclesController::class , 'store']);
Route::get('/dashboard/vehicle_type/delete/{id}',[Vehicle_TypeController::class , 'delete']);

// Vehicles Routes
Route::get('/dashboard/vehicles',[VehiclesController::class , 'index']);
Route::get('/dashboard/vehicles/add',[VehiclesController::class , 'add']);
Route::post('/dashboard/vehicles/edit/{id}',[VehiclesController::class , 'edit']);
Route::post('/dashboard/vehicles/store',[VehiclesController::class , 'store']);
Route::get('/dashboard/vehicles/delete/{id}',[VehiclesController::class , 'delete']);

// Year Routes
Route::get('/dashboard/year',[YearController::class , 'index']);
Route::post('/dashboard/year/add',[YearController::class , 'add']);
Route::post('/dashboard/year/edit/{id}',[YearController::class , 'edit']);
Route::post('/dashboard/year/store',[YearController::class , 'store']);
Route::get('/dashboard/year/delete/{id}',[YearController::class , 'delete']);

// Chat Routes
Route::get('/dashboard/chat',[ChatController::class , 'index']);

// Auth Rouths
Route::get('/dashboard/auth',[AuthController::class , 'index']);
Route::get('/dashboard/auth/add',[AuthController::class , 'add']);
Route::post('/dashboard/auth/store',[AuthController::class , 'store']);
Route::get('/dashboard/auth/delete/{id}',[AuthController::class , 'delete']);
Route::get('/dashboard/auth/lock_screen',[AuthController::class , 'lock_screen']);
Route::get('/dashboard/recover_password',[AuthController::class , 'recover_password']);
Route::get('/dashboard/register',[AuthController::class , 'register']);
Route::get('/dashboard/reset_password',[AuthController::class , 'reset_password']);

Route::get('/dashboard/auth/verify_email',[AuthController::class , 'verify_email']);
