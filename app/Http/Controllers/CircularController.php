<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CircularController extends Controller
{
    //Circular Backend

    public function createcircular(){

        return view('createcircular');
    }

    public function circulardetails(){

        return view('circulardetails');
    }

    public function listcirculars(){

        return view('listcirculars');
    }
}
