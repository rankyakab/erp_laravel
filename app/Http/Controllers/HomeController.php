<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;

class HomeController extends Controller
{
    //

    //Authenticate user
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){

        if($this->checkstatus(Auth::user()->id) != "Active"){

            Auth::logout();

            return redirect('login');

        }else if($this->checkprofile(Auth::user()->profileid) != "Incompleted"){

            return view('updateprofile', ["profileinfo" => "Complete Profile Update to Proceed"]);

        }else{

            $pvs = DB::table('pv')->orderBy('created_at', 'desc')->limit(6)->get();

            return view('dashboard', ['pvs' => $pvs]);

        }

    }
}
