<?php

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

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\FinalController;

Route::get('/home',[FinalController::class,'home']);
Route::get('/navbar',[FinalController::class,'navbar']);
Route::get('/footer',[FinalController::class,'footer']);
Route::get('/stickey',[FinalController::class,'stickey']);
Route::get('/connect',[FinalController::class,'connect']);
Route::get('/about1',[FinalController::class,'about1']);
Route::get('/about2',[FinalController::class,'about2']);
Route::get('/about3',[FinalController::class,'about3']);
Route::get('/about4',[FinalController::class,'about4']);
Route::get('/about5',[FinalController::class,'about5']);
Route::get('/about6',[FinalController::class,'about6']);
Route::get('/careers',[FinalController::class,'careers']);
Route::post('/supportsubmitnu',[FinalController::class,'supportsubmitnu']);
Route::get('/apply',[FinalController::class,'apply']);

Route::get('/gallery',[FinalController::class,'gallery']);
Route::get('/contact',[FinalController::class,'contact']);
Route::get('/login',[FinalController::class,'login']);
Route::post('/login_data',[FinalController::class,'login_data']);
Route::get('/admin_profile',[FinalController::class,'admin_profile']);
Route::get('/adminHeader',[FinalController::class,'adminHeader']);
Route::get('/sidebar',[FinalController::class,'sidebar']);
Route::get('/user_data',[FinalController::class,'user_data']);
Route::get('/cab_data',[FinalController::class,'cab_data']);
Route::get('/apply',[FinalController::class,'apply']);
Route::get('/apply_driver{id}',[FinalController::class,'apply_driver']);
Route::get('/d_driver{id}',[FinalController::class,'d_driver']);
Route::get('/driver_data',[FinalController::class,'driver_data']);
Route::get('/licence{id}',[FinalController::class,'licence']);
Route::get('/admin_data',[FinalController::class,'admin_data']);
Route::post('/add_admin',[FinalController::class,'add_admin']);
Route::get('/editadmin{ep}',[FinalController::class,'editadmin']);
Route::get('/delete{del}',[FinalController::class,'delete_data']);
Route::get('/de_data{dele}',[FinalController::class,'de_data']);
Route::get('/total_drive',[FinalController::class,'total_drive']);
Route::get('/support_data',[FinalController::class,'support_data']);
Route::get('/details{id}',[FinalController::class,'details']);
Route::get('/reply{id}',[FinalController::class,'reply']);
Route::post('/reply_send',[FinalController::class,'reply_send']);
Route::get('/block{blk}',[FinalController::class,'block']);
Route::get('/unblock{ublk}',[FinalController::class,'unblock']);
Route::get('/b_user{blk}',[FinalController::class,'b_user']);
Route::get('/u_user{ublk}',[FinalController::class,'u_user']);
Route::get('/declined_driver',[FinalController::class,'declined_driver']);
Route::get('/del_driver{id}',[FinalController::class,'del_driver']);

Route::get('/user_profile',[FinalController::class,'user_profile']);
Route::get('/navbar_profile',[FinalController::class,'navbar_profile']);
Route::get('/sidebar_profile',[FinalController::class,'sidebar_profile']);
Route::get('/bookacab',[FinalController::class,'bookacab']);
Route::post('/bookcab',[FinalController::class,'bookcab']);
Route::get('/edit_user{ep}',[FinalController::class,'edit_user']);
Route::post('/update',[FinalController::class,'update_data']);
Route::get('/changepassword{cp}',[FinalController::class,'changepassword']);
Route::post('/update_password',[FinalController::class,'update_password']);
Route::get('/support',[FinalController::class,'support']);
Route::post('/supportsubmit',[FinalController::class,'supportsubmit']);
Route::get('/form',[FinalController::class,'register']);
Route::post('/submit',[FinalController::class,'submit_data']);
Route::get('/messages',[FinalController::class,'messages']);
Route::get('/detailsofdriver{id}',[FinalController::class,'detailsofdriver']);

Route::get('/logindriver',[FinalController::class,'driverLogin']);
Route::post('/login_driver',[FinalController::class,'login_driver']);
Route::get('/driverregister',[FinalController::class,'driverregister']);
Route::post('/register_driver',[FinalController::class,'register_driverdata']);
Route::get('/driverHeader',[FinalController::class,'driverHeader']);
Route::get('/sidebar_driver',[FinalController::class,'sidebar_driver']);
Route::get('/driver_profile',[FinalController::class,'driver_profile']);
Route::post('/search',[FinalController::class,'search']);
Route::get('/bookingdetails_driver',[FinalController::class,'bookingdetails_driver']);
Route::get('/payment_confirm{id}',[FinalController::class,'payment_confirm']);
Route::get('/driver_details',[FinalController::class,'driver_details']);
Route::get('/confirm{id}',[FinalController::class,'confirm']);
Route::get('/editdriver{id}',[FinalController::class,'editdriver']);
Route::post('/update_driver',[FinalController::class,'update_driver']);
Route::get('/change_driver{cp}',[FinalController::class,'change_driver']);
Route::post('/update_driverpassword',[FinalController::class,'update_driverpassword']);
Route::get('/support_driver',[FinalController::class,'support_driver']);
Route::get('/messages_driver',[FinalController::class,'messages_driver']);

Route::get('/logout',[FinalController::class,'logout']);
Route::get('/logout_driver',[FinalController::class,'logout_driver']);

