<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;
use Mail;

class MemoController extends Controller
{
    //Memo backend here

    public function creatememo(){

        $staffs = DB::table('profile')->orderBy('firstname')->get();

        return view('creatememo', ['staffs' => $staffs]);
    }

    public function memodetails(){

        return view('memodetails');
    }

    public function memoinbox(){

        $memos = DB::table('memo')->where([['sendto', Auth::user()->profileid],['copies', 'LIKE', '%'.Auth::user()->profileid.'%']])->get();

        return view('memoinbox', ['memos' => $memos]);
    }

    public function sentmemo(){

        $memos = DB::table('memo')->where('sentfrom', Auth::user()->profileid)->get();

        return view('sentmemo', ['memos' => $memos]);
    }

    public function allmemo(){

        $memos = DB::table('memo')->orderBy('created_at', 'desc')->get();

        return view('allmemo', ['memos' => $memos]);
    }

    public function submitmemo(Request $request){

        $title = $request->title;
        $body = $request->memobody;
        $recipient = $request->recipient;
        $copies = $request->copies;
        $attachment = $request->attachment;
        $sender = Auth::user()->id;
        $status = 'Pending Approval';


        //check if this memo was submitted earlier incase of network failure

        $checkmemo = DB::table('memo')
                    ->where([
                            ['sentform', $sender],
                            ['title', $title],
                            ['body', $body],
                            ['status', $status],
                            ['sendto', $sender],
                            ['copies', $copies]
                    ])->count();

        if($checkmemo == 1){

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted to create new memo but failed because the memo has been created earlier";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error',
                'info' => 'Memo creation failed because the memo already exist in the database'
            ]);

        }else{


            

            //insert memo in to the database
            $data = array();

            $data['sentform'] = $sender;
            $data['title'] = $title;
            $data['body'] = $body;
            $data['status'] = $status;
            $data['sendto'] = $recipient;
            $data['copies'] = $copies;
            if(!empty($attachment)){
                $attachmenturl = $attachment->store('assets/attachments');
                $data['attachment'] = $attachmenturl;
            }
            $data['created_at'] = date('Y-m-d H:i:s');

            $create = DB::table('memo')->insert($data);

            if($create){

                //send email to actors
                $username = $this->staffname($recipient);
                $useremail = $this->profileemail($recipient);
                
                try{
                    //send email to the person concerned
                    Mail::send('emails.sentmemoemail', ['username' => $username, 'useremail' => $useremail], function ($message) use ($username, $useremail) {
                    $message->to($useremail, $username)->subject('New memo requires your attenction.');
                    $message->from('erp@reliaenergy.com', 'ERP');
                    });
                }catch(\Exception $e){
                    
                }

                //send email to copies

                $total = count($copies);

                for($i=0; $i<$total; $i++){

                //send email to actors
                $username = $this->staffname($copies[$i]);
                $useremail = $this->profileemail($copies[$i]);
                
                    try{
                        //send email to the person concerned
                        Mail::send('emails.sentmemoemail', ['username' => $username, 'useremail' => $useremail], function ($message) use ($username, $useremail) {
                        $message->to($useremail, $username)->subject('New memo requires your attenction.');
                        $message->from('erp@reliaenergy.com', 'ERP');
                        });
                    }catch(\Exception $e){
                        
                    }

                }


                //create recipient notification

                $this->createnotification($recipient, 'Memo', $title, 'Unread', 'allmemo');


                //create copies notifications
                for($j=0; $j<$total; $j++){

                    $this->createnotification($copies[$i], 'Memo', $title, 'Unread', 'allmemo');

                }


                //log the event

                $logs = array();

                $logs['user'] = Auth::user()->id;
                $logs['action'] = "Created new memo ".$title;
                $logs['created_at'] = date('Y-m-d H:i:s');
                $logs['updated_at'] = date('Y-m-d H:i:s');

                $createlogs = DB::table('logs')->insert($logs);


                return response()->json([
                    'message' => 'success',
                    'info' => 'Memo successfully created'
                ]);


                
            }
            
        }


    }



    public function memodetails(Request $request){


        $memo = DB::table('memo')->where('id', $request->id)->get();

        $memotrails = DB::table('memotrail')->where('memoid', $request->id)->get();

        return view('memodetails', ['memo' => $memo, 'memotrails' => $memotrails]);
    }


    public function memoreaction(Request $request){

        $status = $request->status;
        $remarks = $request->remarks;
        $sentfrom = $request->sentfrom;
        $title = $request->title;

        $data['status'] = $status;
        $data['remarks'] = $remarks;
        $data['updated_at'] = date('Y-m-d H:i:s');

        $update = DB::table('memo')->where('id', $request->id)->update($data);


        if($update){


        $data['actor'] = Auth::user()->profileid;
        $data['actor_type'] = 'Recipient';


        $trail = DB::table('memotrail')->insert($data);

        //send email to owner of the memo
        $username = $this->staffname($sentfrom);
        $useremail = $this->profileemail($sentfrom);
        
        try{
            //send email to the person concerned
            Mail::send('emails.memoreplyemail', ['username' => $username, 'useremail' => $useremail], function ($message) use ($username, $useremail) {
            $message->to($useremail, $username)->subject('Update on one of your memo.');
            $message->from('erp@reliaenergy.com', 'ERP');
            });
        }catch(\Exception $e){
            
        }


        //create recipient notification

        $this->createnotification($sentfrom, 'Memo', $title, 'Unread', 'allmemo');

        //log the event

        $this->logevent("Successfully updated a memo with the title ".$title);


        return response()->json([
            'message' => 'success',
            'info' => 'Memo successfully updated'
        ]);
         

        }

    }



        public function editmemo(Request $request){


            $memo = DB::table('memo')->where('id', $request->id)->get();

            return view('editmemo',['memo' => $memo]);
        }


    


    public function submiteditmemo(Request $request){


        $memodetails = DB::table('memo')->where('id', $request->id)->get();

        $olddata = array();

        $olddata['memoid'] = $request->id;
        $olddata['title'] = $memodetails[0]->title;
        $olddata['body'] = $memodetails[0]->body;
        $olddata['attachment'] = $memodetails[0]->attachment;
        $olddata['actor'] = Auth::user()->id;
        $olddata['actor_type'] = 'Sender';

        $trail = DB::table('memotrail')->insert($olddata);

        
        $data = array();

        $data['title'] = $request->title;
        $data['body'] = $request->body;
        if(!empty($request->attachment)){
            $attachment = $request->file('attachment');
            $attachmenturl = $attachment->store();
            $data['attachment'] = $attachmenturl;
        }

        $update = DB::table('memo')->where('id', $request->id)->update($data);


        if($update){

        //send email to actors
        $username = $this->staffname($memodetails[0]->sendto);
        $useremail = $this->profileemail($memodetails[0]->sendto);
        
        try{
            //send email to the person concerned
            Mail::send('emails.editmemoemail', ['username' => $username, 'useremail' => $useremail], function ($message) use ($username, $useremail) {
            $message->to($useremail, $username)->subject('A memo sent to you was updated.');
            $message->from('erp@reliaenergy.com', 'ERP');
            });
        }catch(\Exception $e){
            
        }

        //send email to copies
        $copies = $memodetails[0]->copies;

        $total = count($copies);

        for($i=0; $i<$total; $i++){

            //send email to actors
        $username = $this->staffname($copies[$i]);
        $useremail = $this->profileemail($copies[$i]);
        
            try{
                //send email to the person concerned
                Mail::send('emails.editmemoemail', ['username' => $username, 'useremail' => $useremail], function ($message) use ($username, $useremail) {
                $message->to($useremail, $username)->subject('A memo you were copied was updated.');
                $message->from('erp@reliaenergy.com', 'ERP');
                });
            }catch(\Exception $e){
                
            }

        }


        //create recipient notification

        $this->createnotification($recipient, 'Memo', $request->title, 'Unread', 'allmemo');


        //create copies notifications
        for($j=0; $j<$total; $j++){

            $this->createnotification($copies[$i], 'Memo', $request->title, 'Unread', 'allmemo');

        }

        //log the event

        $this->logevent("Successfully updated a memo with the title ".$title);


        return response()->json([
            'message' => 'success',
            'info' => 'Memo successfully updated'
        ]); 



    }
}
