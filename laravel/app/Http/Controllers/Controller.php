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
use Illuminate\Contracts\Auth\Authenticatable;
// use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Input;
// use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Mail\SendMail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Mail\ResetPasswordEmail;

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



      
            // FORGET PASSWORD START code here//

             public function submitForgetPasswordForm(Request $request)
             {
                 $request->validate([
                     'email' => 'required|email|exists:user_login_tbl',
                 ]);
         
                 $token = Str::random(64);
         
                 DB::table('password_resets')->insert([
                     'email' => $request->email, 
                     'token' => $token, 
                     'created_at' => Carbon::now()
                   ]);
         
                 Mail::send('forgetPassword', ['token' => $token], function($message) use($request){
                     $message->to($request->email);
                     $message->subject('Reset Password');
                 });
         
                 return back()->with('message', 'We have e-mailed your password reset link!');
             }
             /**
              * Write code on Method
              *
              * @return response()
              */
             public function showResetPasswordForm($token) { 
                return view('forgetPasswordLink', ['token' => $token]);
             }
         
             /**
              * Write code on Method
              *
              * @return response()
              */
             public function submitResetPasswordForm(Request $request)
             {
                 $request->validate([
                     'email' => 'required|email|exists:user_login_tbl',
                     'password' => 'required|string|min:6|confirmed',
                     'password_confirmation' => 'required'
                 ]);
         
                 $updatePassword = DB::table('password_resets')
                                     ->where([
                                       'email' => $request->email, 
                                       'token' => $request->token
                                     ])
                                     ->first();
         
                 if(!$updatePassword){
                     return back()->withInput()->with('error', 'Invalid token!');
                 }
         
                 $user = User::where('email', $request->email)
                             ->update(['password' => Hash::make($request->password)]);
        
                 DB::table('password_resets')->where(['email'=> $request->email])->delete();
         
                 return redirect('/login')->with('message', 'Your password has been changed!');
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

 
