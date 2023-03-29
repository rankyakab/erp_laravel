<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;
use Mail;

class CircularController extends Controller
{
    //Circular Backend

    public function createcircular(){

        $staffs = DB::table('profile')->orderBy('firstname')->get();

        return view('createcircular', ['staffs' => $staffs]);
    }

    public function circulardetails(Request $request){

        $circular = DB::table('circular')->where('id', $request->id)->get();

        return view('circulardetails', ['circular' => $circular]);
    }

    public function listcirculars(){

        $circluars = DB::table('circular')->orderBy('created_at', 'desc')->get();

        return view('listcirculars', ['circluars' => $circluars]);
    }


    public function submitcircular(Request $request){

        $title = $request->title;
        $body = $request->body;
        $recipient = $request->recipient;
        $attachment = $request->attachment;



        $data = array();

        $data['sentform'] = Auth::user()->id;
        $data['title'] = $title;
        $data['body'] = $body;
        $data['sendto'] = implode($recipient, ",");
        if(!empty($attachment)){
            $attachmenturl = $attachment->store('assets/attachment');
            $data['attachment'] = $attachmenturl;
        }
        
        $data['created_at'] = date('Y-m-d H:i:s');

        $create = DB::table('circular')->insert($data);

        if($create){

            //send email to recipients
            if($recipient == "All Staff"){

                //get all the registered staff in the database
                $staffs = DB::table('profile')->get();

                foreach($staffs as $staff){

                    //send email to actors
                    $username = $staff->firstname;
                    $useremail = $staff->email;
                    
                    try{
                        //send email to the person concerned
                        Mail::send('emails.circularemail', ['username' => $username, 'useremail' => $useremail], function ($message) use ($username, $useremail) {
                        $message->to($useremail, $username)->subject('A memo sent to you was updated.');
                        $message->from('erp@reliaenergy.com', 'ERP');
                        });
                    }catch(\Exception $e){
                        
                    }


                    //send notification message to every staff
                    $this->createnotification($staff->id, 'Circular', $title, 'Unread', 'listcirculars');
                }

            }else{

                $total = count($recipient);

                for($i=0; $i<$total; $i++){

                    //send email to actors
                    $username = $this->staffname($recipient[$i]);
                    $useremail = $this->profileemail($recipient[$i]);
                    
                    try{
                        //send email to the person concerned
                        Mail::send('emails.circularemail', ['username' => $username, 'useremail' => $useremail], function ($message) use ($username, $useremail) {
                        $message->to($useremail, $username)->subject('A memo sent to you was updated.');
                        $message->from('erp@reliaenergy.com', 'ERP');
                        });
                    }catch(\Exception $e){
                        
                    }

                    //send notification message to every staff
                    $this->createnotification($recipient[$i], 'Circular', $title, 'Unread', 'listcirculars');

                }

            }


            //log the event

            $this->logevent("Successfully created new circular ".$title);

            return response()->json([
                'message' => 'success',
                'info' => 'Circular successfully created'
            ]);

        }else{


            //log the event

            $this->logevent("Attempted to create new circular ".$title." but failed.");

            return response()->json([
                'message' => 'error',
                'info' => 'Unable to create circular at the moment, please try again'
            ]);

        }

    }
}
