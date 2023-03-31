<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use DB;
use Auth;

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

    public static function profileemail($staff){

        $staff = DB::table('profile')->where('id', $staff)->get();

        return $staff[0]->email;
    }


    //send notification on the system
    public static function createnotification($staff, $type, $title, $status, $location){

        $data = array();

        $data['staff'] = $staff;
        $data['type'] = $type;
        $data['title'] = $title;
        $data['status'] = $status;
        $data['location'] = $location;

        return DB::table('notifications')->insert($data);

    }

    
    //log event
    public static function logevent($action){


        //log the event

        $logs = array();

        $logs['user'] = Auth::user()->id;
        $logs['action'] = $action;
        $logs['created_at'] = date('Y-m-d H:i:s');
        $logs['updated_at'] = date('Y-m-d H:i:s');

        return $createlogs = DB::table('logs')->insert($logs);


    }


    public static function staffdesignation($staff){

        return DB::table('profile')->where('id', $staff)->value('designation');
    }

    public static function staffimage($staff){

        return DB::table('profile')->where('id', $staff)->value('image');
    }


    public static function getaction($action){

        return DB::table('actions')->where('id', $action)->value('action');
    }

    public static function checkprocess($role, $process, $action){

        if(DB::table('privileges')->where([['role', $role], ['privilege', $process], ['action', $action]])->count() == 1){

            return "found";
        }

    }


    public function checkrole($role, $process, $action){

        if(DB::table('privileges')->where([['role', $role], ['privilege', $process], ['action', $action]])->count() == 1){

            return "allow";
        }
    }

}
