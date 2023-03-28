<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //Staff Profile Backend

    public function createstaff(){

        return view('add-staff');
    }

    public function profilepics(){

        return view('upload-pics');
    }

    public function addsignature(){

        return view('upload-signature');
    }


    public function designations(){

        return view('designations');
    }

    public function departments(){

        return view('departments');
    }

    public function offices(){

        return view ('offices');
    }

    public function staffprofile(){

        return view('staffprofile');
    }

    
}
