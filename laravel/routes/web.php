<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Mail\ResetPasswordEmail;

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
// Route::get('/', function () {
//     return view('home');
// });


Route::get('home', [Controller::class,'myFunction'])->name('home');
Route::get('login', [Controller::class,'login'])->name('login');
/*Glass singup and Signin forms */
Route::get('glasssignup', [Controller::class, 'glassregister'])->name('glasssignup');
Route::get('glasslogin', [Controller::class, 'glassloginform'])->name('glasslogin');


/*Glass singup and Signin forms data insert into the DB table*/
Route::post('glasssignupdata', [Controller::class, 'glassregisterform'])->name('glasssignupdata');
Route::post('glasslogindata', [Controller::class, 'glassloginformm'])->name('glasslogindata');

/*  SIGN UP FORM ROUTE */
Route::post('signupform', [Controller::class,'register'])->name('signupform');


/*  SIGN IN FORM ROUTE */

Route::post('loginform', [Controller::class, 'userlogin'])->name('loginform');

/* USER DATA SUBMITION */
Route::post('userdata',[Controller::class, 'userinform'])->name('userdata');

/*CHANGE PASSWORD */
Route::get('/change-password', [Controller::class, 'changePassword'])->name('change-password');

Route::post('/change-password', [Controller::class, 'updatePassword'])->name('update-password');

/*LOGOUT */
Route::any('logout', [Controller::class, 'logout'])->name('logout');



/*  FORGOT PASSWORD */


Route::get('forget-password', [Controller::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [Controller::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
//Route::get('resetPassword', [Controller::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::any('reset-password', [Controller::class, 'submitResetPasswordForm'])->name('reset-password');

Route::get('resetPasswordMail', [Controller::class, 'showresetPasswordMailForm'])->name('resetPasswordMail');
Route::get('forgetPasswordLink', [Controller::class, 'submitResetPasswordFormm'])->name('forgetPasswordLink');

Route::post('passwordupdated', [Controller::class, 'resetPassword'])->name('passwordupdated');

/*  QR CODE */
Route::get('qrcode', [Controller::class, 'qrcodefun'])->name('qrcode');
Route::post('qrcodedata', [Controller::class, 'qrcodefunction'])->name('qrcodedata');


