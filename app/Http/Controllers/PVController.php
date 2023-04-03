<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;

class PVController extends Controller
{
    //Payment Voucher Backend

    //Authenticate user
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function paymentvoucher(){

        $staffs = DB::table('profile')->orderBy('firstname')->get();

        return view('paymentvoucher', ['staffs' => $staffs]);
    }

    public function pvdetails(Request $reqtuest){

        $pvs = DB::table('pv')->orderBy('created_at', 'desc')->get();

        $vsheets = DB::table('vouchersheet')->where('pvid', $pvs[0]->id)->get();

        $pvtrails = DB::table('pvtrail')->where('pvid', $pvs[0]->id)->get();

        return view('pvdetails', ['pvs' => $pvs, 'vsheets' => $vsheets, 'pvtrails' => $pvtrails]);
    }

    public function allpvs(Request $reqtuest){

        $pvs = DB::table('pv')->orderBy('created_at', 'desc')->get();


        return view('allpvs', ['pvs' => $pvs]);
    }


    public function editpv(Request $reqtuest){

        $pvs = DB::table('pv')->orderBy('created_at', 'desc')->get();

        $vsheets = DB::table('vouchersheet')->where('pvid', $pvs[0]->id)->get();

    }


    public function submitpv(Request $request){

        $title = $request->title;
        $sendto = $request->sendto;
        $copies = $request->copies;
        $body = $request->body;
        $attachment = $request->attachment;
        $bankname = $request->bankname;
        $accountnumber = $request->accountnumber;
        $accountname = $request->accountname;
        $amountinwords = $request->amountinwords;
        $project = $request->project;

        $data = array();

        $data['sentform'] = Auth::user()->id;
        $data['title'] = $title;
        $data['sendto'] = $sendto;
        $data['copies'] = $copies;
        $data['body'] = $body;
        $data['status'] = 'Pending Approval';

        if(!empty($attachment)){
            $$attachmenturl = $$attachment->store('assets/attachment');
            $data['attachment'] = $attachmenturl;
        }
        $data['bankname'] = $bankname;
        $data['accountnumber'] = $accountnumber;
        $data['accountname'] = $accountname;

        $data['totalprices'] = $totalprices;
        $data['totalamounts'] = $totalamounts;
        $data['totalvats'] = $totalvats;
        $data['totalgrosses'] = $totalgrosses;
        $data['totalwhts'] = $totalwhts;
        $data['totalnets'] = $totalnets;
        $data['amountinwords'] = $amountinwords;
        $data['project'] = $project;
        $data['created_at'] = date('Y-m-d H:i:s');


        
        try {

            $create = DB::table('pv')->insertGetId($data);

            } catch (\Exception $e) {
                DB::rollback();
                // something went wrong
                return response()->json([
                    'message' => 'error',
                    'info' => 'Error performing this action, make sure all the required fields are provided then try again, please try again'
                ]);
            }

        if($create){

            $count = count($request->description);

            for($i=0; $i<count; $i++){

                $description = $request->description[$i];
                $qty = $request->qty[$i];
                $price = $request->price[$i];
                $amounts = $request->amounts[$i];
                $vatp = $request->vatp[$i];
                $vata = $request->vata[$i];
                $gross = $request->gross[$i];
                $whtp = $request->whtp[$i];
                $whta = $request->whta[$i];
                $net = $request->net[$i];

                $sdata = array();

                $sdata['pvid'] = $create;
                $sdata['description'] = $description;
                $sdata['qty'] = $qty;
                $sdata['unitprice'] = $price;
                $sdata['amount'] = $amounts;
                $sdata['vatpercent'] = $vatp;
                $sdata['vatamount'] = $vata;
                $sdata['grossamount'] = $gross;
                $sdata['whtpercent'] = $whtp;
                $sdata['whtamount'] = $whta;
                $sdata['netamount'] = $net;
                $sdata['created_at'] = date('Y-m-d H:i:s');

                
                try {

                $addsheet = DB::table('vouchersheet')->insert($sdata);

                } catch (\Exception $e) {
                    DB::rollback();
                    // something went wrong
                    return response()->json([
                        'message' => 'error',
                        'info' => 'Error performing this action, make sure all the required fields are provided then try again, please try again'
                    ]);
                }

            }


            //send email to actors
            $username = $this->staffname($sendto);
            $useremail = $this->profileemail($sendto);


            try{
                    //send email to the person concerned
                    Mail::send('emails.sentpvemail', ['username' => $username, 'useremail' => $useremail], function ($message) use ($username, $useremail) {
                    $message->to($useremail, $username)->subject('New payment voucher requires your attention.');
                    $message->from('erp@reliaenergy.com', 'ERP');
                    });
                }catch(\Exception $e){
                    
                }

            $total = count($copies);

            for($i=0; $i<$total; $i++){

                //send email to actors
                $username = $this->staffname($copies[$i]);
                $useremail = $this->profileemail($copies[$i]);

                try{
                        //send email to the person concerned
                        Mail::send('emails.sentpvemail', ['username' => $username, 'useremail' => $useremail], function ($message) use ($username, $useremail) {
                        $message->to($useremail, $username)->subject('New payment voucher requires your attenction.');
                        $message->from('erp@reliaenergy.com', 'ERP');
                        });
                    }catch(\Exception $e){
                        
                    }

            }


            //send notification to the actors on the system

            //create recipient notification

            $this->createnotification($sendto, 'Payment Voucher', $title, 'Unread', 'allpvs');


            //create copies notifications
            for($j=0; $j<$total; $j++){

                $this->createnotification($copies[$i], 'Payment Voucher', $title, 'Unread', 'allpvs');

            }


            //log the event

            $this->logevent("Successfully created new payment voucher with the title ".$title);


            return response()->json([
                'message' => 'success',
                'info' => 'Payment Voucher successfully created'
            ]); 


        }else{


            //log the event

            $this->logevent("Attempted to create new payment voucher ".$title." but failed ");


            return response()->json([
                'message' => 'error',
                'info' => 'Payment voucher creation failed, please try again.'
            ]); 


        }
        
    }


    public function submiteditpv(Request $request){


        $title = $request->title;
        $sendto = $request->sendto;
        $copies = $request->copies;
        $body = $request->body;
        $attachment = $request->attachment;
        $bankname = $request->bankname;
        $accountnumber = $request->accountnumber;
        $accountname = $request->accountname;
        $amountinwords = $request->amountinwords;
        $project = $request->project;

        $data = array();

        $data['sentform'] = Auth::user()->id;
        $data['title'] = $title;
        $data['sendto'] = $sendto;
        $data['copies'] = $copies;
        $data['body'] = $body;

        if(!empty($attachment)){
            $$attachmenturl = $$attachment->store('assets/attachment');
            $data['attachment'] = $attachmenturl;
        }
        $data['bankname'] = $bankname;
        $data['accountnumber'] = $accountnumber;
        $data['accountname'] = $accountname;

        $data['totalprices'] = $totalprices;
        $data['totalamounts'] = $totalamounts;
        $data['totalvats'] = $totalvats;
        $data['totalgrosses'] = $totalgrosses;
        $data['totalwhts'] = $totalwhts;
        $data['totalnets'] = $totalnets;
        $data['amountinwords'] = $amountinwords;
        $data['project'] = $project;
        $data['updated_at'] = date('Y-m-d H:i:s');


        
        try {

                $update = DB::table('pv')->where('id', $request->id)->update($data);

                } catch (\Exception $e) {
                    DB::rollback();
                    // something went wrong
                    return response()->json([
                        'message' => 'error',
                        'info' => 'Error performing this action, make sure all the required fields are provided then try again, please try again'
                    ]);
                }

        if($update){

            $delete = DB::table('vouchersheet')->where('pvid', $request->id)->delete();

            $count = count($request->description);

            for($i=0; $i<count; $i++){

                $description = $request->description[$i];
                $qty = $request->qty[$i];
                $price = $request->price[$i];
                $amounts = $request->amounts[$i];
                $vatp = $request->vatp[$i];
                $vata = $request->vata[$i];
                $gross = $request->gross[$i];
                $whtp = $request->whtp[$i];
                $whta = $request->whta[$i];
                $net = $request->net[$i];

                $sdata = array();

                $sdata['pvid'] = $create;
                $sdata['description'] = $description;
                $sdata['qty'] = $qty;
                $sdata['unitprice'] = $price;
                $sdata['amount'] = $amounts;
                $sdata['vatpercent'] = $vatp;
                $sdata['vatamount'] = $vata;
                $sdata['grossamount'] = $gross;
                $sdata['whtpercent'] = $whtp;
                $sdata['whtamount'] = $whta;
                $sdata['netamount'] = $net;
                $sdata['created_at'] = date('Y-m-d H:i:s');

                
                try {

                $addsheet = DB::table('vouchersheet')->insert($sdata);

                } catch (\Exception $e) {
                    DB::rollback();
                    // something went wrong
                    return response()->json([
                        'message' => 'error',
                        'info' => 'Error performing this action, make sure all the required fields are provided then try again, please try again'
                    ]);
                }

            }


            //send email to actors
            $username = $this->staffname($sendto);
            $useremail = $this->profileemail($sendto);


            try{
                    //send email to the person concerned
                    Mail::send('emails.editpvemail', ['username' => $username, 'useremail' => $useremail], function ($message) use ($username, $useremail) {
                    $message->to($useremail, $username)->subject('One of the payment voucher addressed to you have been updated.');
                    $message->from('erp@reliaenergy.com', 'ERP');
                    });
                }catch(\Exception $e){
                    
                }

            $total = count($copies);

            for($i=0; $i<$total; $i++){

                //send email to actors
                $username = $this->staffname($copies[$i]);
                $useremail = $this->profileemail($copies[$i]);

                try{
                        //send email to the person concerned
                        Mail::send('emails.editpvemail', ['username' => $username, 'useremail' => $useremail], function ($message) use ($username, $useremail) {
                        $message->to($useremail, $username)->subject('One of the payment voucher addressed to you have been updated.');
                        $message->from('erp@reliaenergy.com', 'ERP');
                        });
                    }catch(\Exception $e){
                        
                    }

            }


            //send notification to the actors on the system

            //create recipient notification

            $this->createnotification($sendto, 'Payment Voucher', $title, 'Unread', 'allpvs');


            //create copies notifications
            for($j=0; $j<$total; $j++){

                $this->createnotification($copies[$i], 'Payment Voucher', $title, 'Unread', 'allpvs');

            }


            //log the event

            $this->logevent("Successfully updated existing payment voucher with the title ".$title);


            return response()->json([
                'message' => 'success',
                'info' => 'Payment Voucher successfully updated.'
            ]); 


        }else{


            //log the event

            $this->logevent("Attempted to update existing payment voucher with ".$title." but failed ");


            return response()->json([
                'message' => 'error',
                'info' => 'Payment voucher update failed.'
            ]); 


        }

    }


    public function submitpvstatus(Request $request){

        $pvid = $request->pvid;
        $status = $request->status;
        $remarl = $request->remark;
        $sentfrom = $request->sentfrom;

        $data = array();

        $sdata['pvid'] = $pvid;
        $data['status'] = $status;
        $data['remark'] = $remark;
        $data['actor'] = Auth::user()->id;
        $data['created_at'] = date('Y-m-d H:i:s');

        
        try {

                $update = DB::table('pvtrail')->insert($data);

                } catch (\Exception $e) {
                    DB::rollback();
                    // something went wrong
                    return response()->json([
                        'message' => 'error',
                        'info' => 'Error performing this action, make sure all the required fields are provided then try again, please try again'
                    ]);
                }

        if($update){

            //update pv status
            $pv = DB::table('pv')->where('id', $pvid)->update(['status' => $status]);

            //send email to the owner of the pv
            $username = $this->staffname($sentfrom);
            $useremail = $this->profileemail($sentfrom);

            try{
                    //send email to the person concerned
                    Mail::send('emails.statuspvemail', ['username' => $username, 'useremail' => $useremail], function ($message) use ($username, $useremail) {
                    $message->to($useremail, $username)->subject('Your Payment voucher has an update.');
                    $message->from('erp@reliaenergy.com', 'ERP');
                    });
                }catch(\Exception $e){
                    
                }


            //create recipient notification

            $this->createnotification($sentfrom, 'Payment Voucher', $title, 'Unread', 'allpvs');

            //log the event

            $this->logevent("successfully update existing payment voucher with ".$title);


            return response()->json([
                'message' => 'success',
                'info' => 'Payment voucher update successful.'
            ]);

        }else{

            //log the event

            $this->logevent("Attempted to update payment voucher with title ".$title." but failed");


            return response()->json([
                'message' => 'error',
                'info' => 'Payment voucher update failed, please try again.'
            ]);
        }
    }


    public function sentpvs(){

        $pvs = DB::table('pv')->orderBy('created_at', 'desc')->where('sentform', Auth::user()->profileid)->get();

        return view('sentpvs', ['pvs' => $pvs]);
    }
}
