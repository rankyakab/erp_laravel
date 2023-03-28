<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemoController extends Controller
{
    //Memo backend here

    public function creatememo(){

        return view('creatememo');
    }

    public function memodetails(){

        return view('memodetails');
    }

    public function memoinbox(){

        return view('memoinbox');
    }

    public function sentmemo(){

        return view('sentmemo');
    }

    public function allmemo(){

        return view('allmemo');
    }
}
