<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function staffname($user){

        $staff = DB::table('profile')->where('id', $user)->get();

        return $staff[0]->firstname." ".$staff[0]->surname." ".$staff[0]->othername;
    }

    public static function staffpics($user){

        return DB::table('profile')->where('id', $user)->value('image');

    }


    public static function staffsignature($user){

        return DB::table('profile')->where('id', $user)->value('signature');

    }


    //generate password token for new user
    public static function getToken($length){
     $token = "";
     $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
     $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
     $codeAlphabet.= "0123456789";
     $max = strlen($codeAlphabet); // edited

        for ($i=0; $i < $length; $i++) {
            $token .= $codeAlphabet[random_int(0, $max-1)];
        }
    
        return $token;
    }


    public static function checkuser($user){

        return DB::table('users')->where('profileid', $user)->get();
    }

}
