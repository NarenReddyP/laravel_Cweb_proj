<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\User;
use App\Models\PasswordReset;
use Illuminate\Contracts\Auth\Authenticatable;
// use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Input;
// use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Mail\SendMail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Mail\ResetPasswordEmail;
use Illuminate\Support\Facades\URL;

use function GuzzleHttp\Promise\all;

class Controller extends BaseController
{
use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

   public function myFunction()
    {  
    return view('index');
    }

    public function login(){
    return view('login');

    }

    public function glassregister(){
      return view('glassregister');
    }

    public function glassloginform(){
      return view('glasslogin');
    }


    public function showForgetPasswordForm()
    {
       return view('forgetPassword');
    }
    public function showresetPasswordMailForm()
    {
       return view('resetPasswordMail');
    }

    public function submitResetPasswordFormm(){
      return view('forgetPasswordLink');
    }

    public function qrcodefun(){
      return view('qrcode');
    }

    public function register(Request $request){

   // $validated = $request->validate([
   //    'userName' => 'required|min:3',
   //    'email' => 'required|email',
   //    'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
   //    'password' => 'required|min:6|confirmed'

   //]);

   //dd($validated);

    $validator = Validator::make($request->all(), [
    'userName' => 'required|min:4|max:12|unique:user_login_tbl',
    'email' => 'required|unique:user_login_tbl|email',
    'mobile'=> 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:user_login_tbl',
    'password' => 'min:6|required_with:Cpassword|same:Cpassword',
    'Cpassword' => 'min:6',
    'Gender' => 'required'
    ]);
    // if($validate->fails()){
    // return back()->withErrors($validate->errors())->withInput();
    // }
     if ($validator->fails()) {
     return redirect('/login/')
                ->withErrors($validator)
                ->withInput();
     }
  
     $parameters = array(

     'username'=>$request->input('userName'),
     'email'=>$request->input('email'),
     'mobile'=>$request->input('mobile'),
     'password'=>bcrypt($request->input('password')),
     'Cpassword'=>$request->input('Cpassword'),
     'Gender'=>$request->input('Gender'),
     'Date'=>now()
     
     );

    $singupdata = UserModel::registerdata($parameters);

    //return view('login');

     return back()->with('success', 'Amazing! Your Account has been Created Successfully.');

    // return Redirect::to("/")->withSuccess('Success message');

    // return redirect('/users')->with('success','welcome '. $user->userName . ' you are registered');

    //return redirect('login')->with('success', 'Amazing! Your Account has been Created Successfully.');

     }

     public function userlogin(Request $request){

     $validator = Validator::make($request->all(),[
     'luserName' => 'required',
     'lpassword' => 'required'

      ]);

      // $validator = $request->Validator([
      //   'userName' => 'required',
      //   'password' => 'required'
    
      // ]);

      if ($validator->fails()) {
      return redirect('/login/')
                ->withErrors($validator)
                ->withInput();
      }

       $data = array ( 

       'username'=>$request->input('luserName'),
       'password'=>$request->input('lpassword')
       );
       //dd(bcrypt($data['password']));
       // print_r($data);exit;
       if(Auth::attempt($data)){
       Session::put('user', $request->input('luserName'));
       $request->session()->regenerate();
       return Redirect::to('home');
       }

       else{
    
      // return Redirect::to('login');
       return back()->with('Passwordd', 'Your entered wrong username or password!');

      }
  
      }

      public function userinform(Request $request){
   
      $validator = Validator::make($request->all(), [
      'username'=> 'required|alpha',
      'email'=> 'required|email|unique:users_information',
      'mobile'=>'required',
      'Companyname'=>'required',
      'textmsg'=> 'required'

       ]);

      if($validator->fails()){
      return redirect('/home/')
               ->withErrors($validator)
               ->whithInput();
      }

     $userparame = array(
     'username'=>$request->input('username'),
     'email'=>$request->input('email'),
     'mobile'=>$request->input('mobile'),
     'companyname'=>$request->input('Companyname'),
     'usermesge'=>$request->input('textmsg'),
     'Date'=>now()
     );
     $userdata = UserModel::userinformation($userparame);
    //  return view('welcome');
     return back()->with('successed', 'Your data has been sented Successfully.');
  
     }

     // public function __construct()
     //     {
     //         $this->middleware('auth');
     //     }
     
     public function changePassword()
     {
     $session_user=Session::get('user');

     $data['session_data'] = User::getSessionData($session_user);

     return view('change-password',$data);
     }

     public function updatePassword(Request $request)
     {
        # Validation
        // dd($request->all());
      $user = Auth()->User();
      $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed|min:6',
            'new_password_confirmation' => 'required|same:new_password'
      ]);
        
      // echo $chanpas =  Session::get('user');
      // exit;
        #Match The Old Password
      if(!Hash::check($request->old_password, $user->password)){
          
      return back()->with("error", "Your Old Password Doesn't match!");
      } 
      else{
          // dd($request->all());
      //   if (!(Hash::check($request->old_password, Auth::user()->password))) {
      //     dd("Your current password cant be with new password");
      //     return response()->json(['errors' => ['Your current password cant be with new password']], 400);
          
      // }
        
        #Update the new Password
      //echo "<pre>";
      //print_r($user);exit;

        $new_password = bcrypt($request->get('new_password'));
        $new_cpassword = $request->get('new_password_confirmation');
        $result= User::whereId($user->id)->update(['password' => $new_password,'Cpassword' => $new_cpassword]);
        //$res = User::updatePassword($user->id,$new_password);
        // echo "<pre>";
        // print_r($user);exit;

        return back()->with("status", "Password changed successfully!");
         }

         }
          //******************** *//
         // Function for logout  //
         public function logout(Request $request) {
 
         Session::flush();
         Auth::logout();
  
         return redirect('login');
         }
         // END Function for logout  //



             // Start glass porject data form code here//
         public function glassregisterform(Request $request){

         $glassvaldiate = Validator::make($request->all(), [
           'username'=>'required|min:4|max:12|unique:glassslogin_reg_tbl|alpha_dash',
           'email'=>'required|email|unique:glassslogin_reg_tbl',
           'password'=>'required|min:6|required_with:regpassword|same:regpassword',
           'regpassword'=>'required'
           ]);

         if($glassvaldiate->fails()){
         return redirect('glasssignup')
            ->withErrors($glassvaldiate)
            ->withInput(); 

         }
         else{
      
        $glassperameters = array(
        'username'=>$request->input('username'),
        'email'=>$request->input('email'),
        'password'=>bcrypt($request->input('password')),
        'regpassword'=>$request->input('regpassword'),
        'Date'=>now()
        );

        $glassdbdata = User::glassregisterdata($glassperameters);

        return back()->with('glassuccess', 'Your have registered successfully!!');

        }

        }
        public function glassloginformm(Request $request){
     
        $glogindata = Validator::make($request->all(), [
        'ggusername'=>'required',
        'ggpassword'=>'required'
         ]);

         if($glogindata->fails()){
         return redirect('glasslogin')
              ->withErrors($glogindata)
              ->withInput();
   
        //  return back()->with("glasserror", "Your Password and Username Doesn't match!");
         }
         $glassdata = array(
         'username'=>$request->input('ggusername'),
         'password'=>$request->input('ggpassword')
          );
         // $password = $glassdata['gpassword'] ?? null;

         // dd($password);
         // $ab=Auth::attempt($glassdata);
         // echo $ab;

         // $glasslogindbdata = User::glasslogindata($glassdata);
          if(Auth::attempt($glassdata)){
          Session::put('user', $request->input('ggusername'));
          $request->session()->regenerate();
          return Redirect::to('home');

          }
          else{
          return back()->with('gsuccess', 'Your are entered wrong password and usernames !!');
          }                    

       // if (Auth::attempt($glassdata)) {
       //   // The user has been authenticated
       //   return redirect()->intended('home');
       // } else {
       //   // The authentication failed
       //   return back()->withInput()->withErrors([
       //       'gemail' => 'The provided credentials do not match our records.',
       //   ]);
       // }

          }


             // END  glass porject data form code here//




                //***************************** //
              //                               //
            // FORGET PASSWORD START code here//
           //*****************************   //
          
             public function submitForgetPasswordForm(Request $request)
             {

             try{
                  $user = User::where('email',$request->email)->first();
                //  if(count($user) > 0){
                  if(!empty($user->id)){ 
                  $token = Str::random(64);
                  $domain = URL::to('/');
                  $url = $domain.'/reset-password?token='.$token;

                  $data['url'] = $url;
                  $data['email']= $request->email;
                  $data['name']= $user->username;
                  $data['title']= 'Password Reset Request';
                  $data['body']='Please click on the below link to reset your password!';
                  
           
                  Mail::send('resetPasswordMail',['data'=>$data], function ($message) use ($data) {
                      // $message->from('naren drar321@gmail.com', 'narendra');
                      // $message->sender('narendrar321@gmail.com', 'no-replay');
                      $message->to($data['email'])->subject($data['title']);
                      // $message->cc('narendrar321@gmail.com', 'narendra');
                      // $message->bcc('narendrar321@gmail.com', 'narendra');
                      // $message->replyTo('narendrar321@gmail.com', 'narendra');
                      // $message->subject('Subject');
                      // $message->priority(3);
                      // $message->attach('pathToFile');
                  });

                  // $datetime = Carbon::now()->format('Y-m-d H:i:s');


                  User::where('email', $request->email)
                               ->update(['remember_token' => $token]);



                      // User::updateOrCreate(
                      //      ['email' => $request->email],
                      //      [
                      //       'email' => $request->email,
                      //       'remember_token' => $token,
                      //       'created_at' => $datetime
                      //      ]
                      // );
                      //  return response()->json(['success'=>true,'msg'=>'We have send reset password link, Please check your email to reset your password!']);
                       
                       return back()->with('resetsuccess', 'We have send reset password link, Please check your email to reset your password.');
                       }
                       else{
                       //  return response()->json(['success'=>false, 'msg'=>'User not found!!!']);
                       return back()->with('errorsuccess', 'Entered User email is not found, kinldy enter valid user email.');

                       } 

                       }
              catch(\Exception $e){
                      // return response()->json(['success'=>false,'msg'=>$e->getMessage()]);
                      return back()->with('errorsuccess',['msg'=>$e->getMessage()]);
                      
                     }

                //  $request->validate([
                //      'email' => 'required|email|exists:user_login_tbl',
                //  ]);
                //  $request_data=$request->all();

                //  $input['email'] =$request_data['email']; //Input::get('email');

                //  $rules = array('email' => 'unique:user_login_tbl,email');

                //  $validator = Validator::make($input, $rules);

                // if ($validator->fails()) {
                //     echo 'That email address is already registered. You sure you don\'t have an account?';
                // }
                // else {

         
            //      $token = Str::random(64);
         
            //      DB::table('password_resets')->insert([
            //          'email' => $request->email, 
            //          'token' => $token, 
            //          'created_at' => Carbon::now()
            //        ]);

            //        $user_namee = User::where('username',$request->username)->get();
            //        $link=  '<button  style="position: fixed;left: 20%;border-color:#cc2290;background-color:#cc2290;border-radius:5px;padding: 10px;" id="btnhome" class="btn btn-info" name="submitbtn"><a style="text-decoration:none;color:#fff;font-weight:600;" id="homebtn" href="{{ url("reset-password") }}">Change Password link</a></button>';
            //        $subject = 'Request for Forgot Password';
            //        $user_name = $user_namee;
            //        $first_name = 'Narendra';
            //        $to= $request->email;
            //        $email = $request->email;
            //        $logo="{{ asset('assets/C_img/forget-pin.PNG') }}";

            //        $message = '<html><body>
            //         <table style="width:75%">
            //         <tr style="background-color:#F7C8E0;">
            //                 <th style="padding:1rem;border:1px solid #cc2290;"><img src="http://127.0.0.1:8000/assets/C_img/forget-pin.PNG" alt="image" width="10px" class="img-logo"></th>
            //         </tr>
            //         <tr><td style="padding:2rem 3rem;border-left:1px solid #cc2290;border-right:1px solid #cc2290;">';
            // $message .= '<p>Dear <b>'.$first_name.'</b>,
            //                 <br><br>We getting forgot password request for username : <i><b>'.$user_name.'</b></i>
            //                 <br><br>and your email : <i><b>'.$email.'</b></i>.
            //                 <br>Please change your password to proceed with below link to access.
            //                 <br><br><span>'
            //                 .$link.
            //                 '</span>
            //                 <br><br><br>Please ignore if you not requsting to forgot password.
            //                 <br><br>Yours Sincerely,<br><i>Company Web Team</i>.</p>';

            // $message .= '<br></td></tr>
            //         <tr style="background-color:#F7C8E0;">
            //             <th style="padding:1rem;border:1px solid #cc2290;">
            //                 <p style="color:#8f5137;">Copyright <i class="bx bx-copyright"></i> 2023 <a href="#" style="text-decoration:none;font-weight:600;"> Company Web ltd</a>. All rights reserved</p>
            //             </th>
            //         </tr></table>
            //         </body></html>';

            // $headers  = 'MIME-Version: 1.0' . "\r\n";
            // $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            // $headers .= "From: info@test.net\r\n"."X-Mailer: php";
            // $to_email = $to;
            // //$data = "A test mail";
            // //$to_name="rajesh";
            // $body_message =$message;
            // Mail::send([],[], function($message) use ($to_email,$body_message, $subject) {
            // $message->to($to_email);
            // $message->subject( $subject);
            // $message->html($body_message);
            // $message->from("narendrar321@gmail.com","no-reply");
            //  });
            //     //  Mail::send('resetPassword', ['token' => $token], function($message) use($request){
            //     //      $message->to($request->email);
            //     //      $message->subject('Reset Password');
            //     //  });
         
            //      return back()->with('message', 'We have e-mailed your password reset link!');
            }

            //  }
            //  /**
            //   * Write code on Method
            //   *
            //   * @return response()
            //   */
            //  public function showResetPasswordForm($token) { 
            //     return view('forgetPasswordLink', ['token' => $token]);
            //  }
         
            //  /**
            //   * Write code on Method
            //   *
            //   * @return response()
            //   */


              //************************ *//
            // reset password view load //

             public function submitResetPasswordForm(Request $request)
             {
                 // dd($request->token);
                 $user = User::where('remember_token', $request->token)->get();
                 if(isset($request->token) && count($user) > 0){
                    
                     return view('forgetPasswordLink', compact('user'));
                     
                 }
                 else{
                  return view('404');

                 }


                //  $request->validate([
                //      'email' => 'required|email|exists:user_login_tbl',
                //      'password' => 'required|string|min:6|confirmed',
                //      'password_confirmation' => 'required'
                //  ]);
         
                //  $updatePassword = DB::table('password_resets')
                //                      ->where([
                //                        'email' => $request->email, 
                //                        'token' => $request->token
                //                      ])
                //                      ->first();
         
                //  if(!$updatePassword){
                //      return back()->withInput()->with('error', 'Invalid token!');
                //  }
         
                //  $user = User::where('email', $request->email)
                //              ->update(['password' => Hash::make($request->password)]);
        
                //  DB::table('password_resets')->where(['email'=> $request->email])->delete();
         
                //  return redirect('/login')->with('message', 'Your password has been changed!');

             }
            

            //password reset functionality //

            public function resetPassword(Request $request){
                
           
              $request->validate([
                   
                     'password' => 'required|string|min:6|same:password_confirmation',
                     'password_confirmation' => 'required'  
                 ]);
                
                 $user = DB::table('user_login_tbl')
                                     ->where('remember_token', $request->remember_token)
                                     ->first();
                                     
                 if(empty($user->id)){
                   
                     return back()->withInput()->with('error', 'Invalid token!');
                 }
         
                 $user = User::where('remember_token', $request->remember_token)
                             ->update(['password' => Hash::make($request->password), 'Cpassword'=>$request->password_confirmation]);
        
                            // ,"remember_token"=>""
                //  return redirect('/login')->with('message', 'Your password has been changed!');
                //DB::enableQueryLog();
                 DB::table('user_login_tbl')->where('remember_token', $request->remember_token)->update(['remember_token'=>'']);
                 //dd(DB::getQueryLog());
                //  return back()->with('updatemessage', 'Your password has been changed successfully.');

                return redirect('/login')->with('success', 'Your password has been changed successfully.');

                 



             
            //   $request->validate([
            //            'password'=>'required|string|min:6|confirmed|required_with:password_confirmation|same:password_confirmation',
            //            'password_confirmation'=>'required',
            //   ]);

             

            //  $user = User::find($request->id);  
            //  $user->password = Hash::make($request->password);
            //  $user->save(); 
  
            //  PasswordReset::where('email',$user->email)->delete();

            //  return back()->with('resetsuccess', 'Your password has been reset successfully.Please login with your updated password!!');



            }









            // QR CODE  started from here//

            public function qrcodefunction(Request $request){
                
                   $qrcodevalidate = Validator::make($request->all(),[
                     'qrcode'=>'required|url',
                     
                   ]);
                   if($qrcodevalidate->fails()){
                       return redirect('qrcode')
                              ->withErrors($qrcodevalidate)
                              ->withInput();

                   }else{
                      $qrdata = array(
                      'urlname'=>$request->input('qrcode'),
                      'Date'=>now()
                      );

                      $qrcodedata=User::qrcodefuncdata($qrdata);
                      return view('qrcode');
                      // return back()->with('qrmessage', 'Your QR code created successfully!!');
                      
                   }
                   
            }













}

 
