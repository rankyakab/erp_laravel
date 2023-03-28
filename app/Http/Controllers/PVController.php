<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PVController extends Controller
{
    //Payment Voucher Backend

    public function paymentvoucher(){

        return view('paymentvoucher');
    }

    public function pvdetails(){

        return view('pvdetails');
    }

    public function allpvs(){

        return view('allpvs');
    }
}
