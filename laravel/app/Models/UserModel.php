<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class UserModel extends Model
{

    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
    //  */
    protected $table='jsonuser_login_tbl';
    protected $fillable = [
        'userName',
        'email',
        'password',
        'usertype',
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

   //JSON USER REGISTER AND LOGIN DATA

   public static function jsonregisterdata($jsonparameters){

    $jsonres = DB::table('jsonuser_login_tbl')->insert($jsonparameters);
    return $jsonres;
}


}
