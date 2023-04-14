<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\JsonController;
use App\Http\Controllers\PaypalController;
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


Route::get('/', function () {
    return view('login')->name('/');
});

/* Session logout for home page  */

Route::middleware(['checksession'])->group(function () {
    Route::get('home', [Controller::class, 'myFunction'])->name('home');
});

/*  END Logout for home page  */ 

// Route::get('/', function () {
//   return view('jsonloginform')->name('/');
// });
// Route::middleware(['auth.session'])->group(function () {
//   Route::get('jsonview', [JsonController::class, 'myFunction'])->name('jsonview');
// });



// Route::get('home', [Controller::class,'myFunction'])->name('home');
Route::get('login', [Controller::class,'login'])->name('login');
/*Glass singup and Signin forms */
Route::get('glasssignup', [Controller::class, 'glassregister'])->name('glasssignup');
Route::get('glasslogin', [Controller::class, 'glassloginform'])->name('glasslogin');


/*Glass singup and Signin forms data insert into the DB table*/
Route::post('glasssignupdata', [Controller::class, 'glassregisterform'])->name('glasssignupdata');
Route::post('glasslogindata', [Controller::class, 'glassloginformm'])->name('glasslogindata');

/*  SIGN UP FORM ROUTE */
Route::any('signupform', [Controller::class,'register'])->name('signupform');


/*  SIGN IN FORM ROUTE */

Route::post('loginform', [Controller::class, 'userlogin'])->name('loginform');

/* USER DATA SUBMITION */
Route::post('userdata',[Controller::class, 'userinform'])->name('userdata');

/*CHANGE PASSWORD */
Route::get('/change-password', [Controller::class, 'changePassword'])->name('change-password');

Route::post('/change-password', [Controller::class, 'updatePassword'])->name('update-password');

    /*****************  */
  /***********LOGOUT */
/**************** */

Route::any('logout', [Controller::class, 'logout'])->name('logout');


   /****************** */
  /*  FORGOT PASSWORD */
/***************** */

Route::get('forget-password', [Controller::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [Controller::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
//Route::get('resetPassword', [Controller::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::any('reset-password', [Controller::class, 'submitResetPasswordForm'])->name('reset-password');

Route::get('resetPasswordMail', [Controller::class, 'showresetPasswordMailForm'])->name('resetPasswordMail');
Route::get('forgetPasswordLink', [Controller::class, 'submitResetPasswordFormm'])->name('forgetPasswordLink');

Route::post('passwordupdated', [Controller::class, 'resetPassword'])->name('passwordupdated');

  /*********** */
 /*  QR CODE */
/********** */
Route::get('qrcode', [Controller::class, 'qrcodefun'])->name('qrcode');
Route::post('qrcodedata', [Controller::class, 'qrcodefunction'])->name('qrcodedata');


/*  CRUD OPERATION CODE */

Route::get('crudtbl', [Controller::class, 'crudoprateview'])->name('crudtbl');

Route::get('create', [Controller::class, 'createtableview'])->name('create');

Route::get('view', [Controller::class, 'viewdatafunc'])->name('view');




    /*  ********************* ******************* */
  /*  PAYPAL Controllers Routs OPERATION CODE    */
/********************************************** */

Route::get('paywithpaypal',[PaypalController::class, 'getpaywithpaypal'])->name('paywithpaypal');
Route::post('paypal',[PaypalController::class, 'postpaymentwithpaypal'])->name('paypal');
Route::get('paypalstatus',[paypalController::class, 'getpaymentstatus'])->name('status');


   /*  ********************* *******************  */
  /*  JSON Controllers Routs OPERATION CODE      */
/********************************************** */

Route::get('jsonregisterform',[JsonController::class, 'jsonregisterform'])->name('jsonregisterform');
Route::any('jsonregisterformU',[JsonController::class, 'jsonuserregister'])->name('jsonregisterformU');

Route::get('jsonloginform',[JsonController::class, 'jsonloginuserform'])->name('jsonloginform');
Route::any('jsonloginformU',[JsonController::class, 'jsonuserlogin'])->name('jsonloginformU');

Route::get('jsonview',[JsonController::class, 'viewjson'])->name('jsonview');

Route::get('jsonproject',[JsonController::class, 'jsonprojectt'])->name('jsonproject');

Route::post('jsonpost',[JsonController::class, 'jsonpostdb'])->name('jsonpost');

Route::get('jsonuser',[JsonController::class, 'viewjsonuser'])->name('jsonuser');

Route::get('/jsonuser/{id}/edit',[JsonController::class, 'edit'])->name('jsonuser.edit');

Route::any('/jsonuserupdate',[JsonController::class, 'update'])->name('jsonuserupdate');

Route::any('/jsonuserdelete',[JsonController::class, 'destroy'])->name('jsonuserdelete');

Route::get('/jsonuserview/{id}/view', [JsonController::class, 'view'])->name('jsonuserview');


Route::get('jsonlogout',[JsonController::class, 'jsonlogout'])->name('jsonlogout');

Route::any('/tabledataview', [JsonController::class, 'index'])->name('tabledataview');


// Route::post('jsonupdata',[JsonController::class, 'viewupdate'])->name('jsonupdata');

// Route::get('jsonview',[JsonController::class, 'saveImage'])->name('jsonuserimg');

 /*  ********************* *******************  */
  /*  Fileupload Routs OPERATION CODE      */
/********************************************** */
Route::get('/indexfile', [JsonController::class, 'fileindex'])->name('indexfile');
Route::get('/creatfile', [JsonController::class, 'filecreate'])->name('creatfile');
// Route::post('/files/add', 'JsonController@store')->name('files.store');


// Route::get('Demo',[JsonController::class, 'index']); //test

Route::get('web',[JsonController::class, 'webUrl']);   //test


