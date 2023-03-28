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
}
