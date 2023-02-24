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
   
    public static function registerdata($parameters){

        $res = DB::table('user_login_tbl')->insert($parameters);
        return $res;

    }
   public static function userinformation($userparame){
      
        $userres = DB::table('users_information')->insert($userparame);
        return $userres;

   }


}
