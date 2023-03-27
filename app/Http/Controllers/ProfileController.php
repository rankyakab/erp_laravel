<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //Staff Profile Backend

    public function createstaff(){

        return view('add-staff');
    }
}
