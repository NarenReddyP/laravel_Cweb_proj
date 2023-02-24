<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use App\Mail\ResetPasswordEmail;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
    //  */
    protected $table='user_login_tbl';
    protected $fillable = [
        'userName',
        'email',
        'password',
    ];
    public $timestamps = false;
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

    
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function registerdata($parameters){

        $res = DB::table('user_login_tbl')->insert($parameters);
        return $res;

    }
    public static function userinformation($userparame){
      
        $userres = DB::table('users_information')->insert($userparame);
        return $userres;
    }


    public static function updatePassword($userid,$new_password)
    {
        $result = DB::table('user_login_tbl')->where('id',$userid)->update(['password' => $new_password]);
        return $result;
    }

    public static function getSessionData($session_user)
    {
        $resdata = DB::table('user_login_tbl')->where('username',$session_user)->get();
        return $resdata;
    }


    public static function glassregisterdata($glassperameters){
        $glassdata = DB::table('glassslogin_reg_tbl')->insert($glassperameters);
        return $glassdata;

    }
    // public static function glasslogindata($glassdata){
    //     $glasslgindata = DB::table('glassslogin_reg_tbl')->where('gusername', $glassdata)->get();
    //     return $glasslgindata;
    // }
    public static function qrcodefuncdata($qrdata){
        $qrdbdata= DB::table('qrcode_tbl')->insert($qrdata);
        return $qrdbdata;

    }








}
