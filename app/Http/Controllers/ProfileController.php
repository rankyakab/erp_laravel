<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;
use Mail;
use Hash;

class ProfileController extends Controller
{
    //Staff Profile Backend

    //Authenticate user
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createstaff(){

        $offices = DB::table('offices')->orderBy('offices', 'asc')->get();

        $banks = DB::table('banks')->orderBy('banks', 'asc')->get();

        $departments = DB::table('departments')->orderBy('departments', 'asc')->get();

        $designations = DB::table('designations')->orderBy('designations', 'asc')->get();

        return view('add-staff', ['offices' => $offices, 'banks' => $banks, 'departments' => $departments, 'designations' => $designations]);

    }

    public function profilepics(){

        return view('upload-pics');
    }

    public function addsignature(){

        return view('upload-signature');
    }


    public function designations(){

        $designations = DB::table('designations')->orderBy('designations', 'asc')->get();

        return view('designations', ['designations' => $designations]);
    }

    public function departments(){

        $departments = DB::table('departments')->orderBy('departments', 'asc')->get();

        return view('departments', ['departments' => $departments]);
    }

    public function banks(){

        $banks = DB::table('banks')->orderBy('banks', 'asc')->get();

        return view('banks', ['banks' => $banks]);
    }


    public function offices(){

        $offices = DB::table('offices')->orderBy('offices', 'asc')->get();

        return view('offices', ['offices' => $offices]);
    }

    public function staffprofile(Request $request){

        $staff = DB::table('profile')->where('id', $request->id)->get();

        return view('staffprofile', ['staff' => $staff]);
    }


    //add new department to the database

    public function submitdepartment(Request $request){

        $departments = $request->departments;

        //check if department already added to the database

        $check = DB::table('departments')->where('departments', $departments)->count();

        if($check == 1){

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted to add new department ".$departments." to the database, but failed because the event exist";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error'
            ]);
        }

        $data = array();

        $data['departments'] = $departments;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        $create = DB::table('departments')->insert($data);

        if($create){

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Added new department ".$departments." to the database";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);

            return response()->json([
                'message' => 'success'
            ]);

        }else{

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted to add new department ".$departments." to the database, but failed";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error'
            ]);

        }

    }




    //add new designation to the database

    public function submitdesignation(Request $request){

        $designations = $request->designations;

        //check if designation already added to the database

        $check = DB::table('designations')->where('designations', $designations)->count();

        if($check == 1){

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted to add new designation ".$designations." to the database, but failed because the event exist";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error'
            ]);
        }

        $data = array();

        $data['designations'] = $designations;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        $create = DB::table('designations')->insert($data);

        if($create){

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Added new designation ".$designations." to the database";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);

            return response()->json([
                'message' => 'success'
            ]);

        }else{

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted to add new designation ".$designations." to the database, but failed";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error'
            ]);

        }

    }




    //add new office to the database

    public function submitoffices(Request $request){

        $offices = $request->offices;

        //check if office already added to the database

        $check = DB::table('offices')->where('offices', $offices)->count();

        if($check == 1){

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted to add new office ".$offices." to the database, but failed because the event exist";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error'
            ]);
        }

        $data = array();

        $data['offices'] = $offices;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        $create = DB::table('offices')->insert($data);

        if($create){

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Added new office ".$offices." to the database";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);

            return response()->json([
                'message' => 'success'
            ]);

        }else{

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted to add new office ".$offices." to the database, but failed";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error'
            ]);

        }

    }




    //add new office to the database

    public function submitbank(Request $request){

        $banks = $request->banks;

        //check if bank already added to the database

        $check = DB::table('banks')->where('banks', $banks)->count();

        if($check == 1){

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted to add new bank ".$banks." to the database, but failed because the event exist";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error'
            ]);
        }

        $data = array();

        $data['banks'] = $banks;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        $create = DB::table('banks')->insert($data);

        if($create){

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Added new bank ".$banks." to the database";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);

            return response()->json([
                'message' => 'success'
            ]);

        }else{

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted to add new bank ".$banks." to the database, but failed";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error'
            ]);

        }

    }


    public function submitstaff(Request $request){

        $fname = $request->fname;
        $staffid = $request->staffid;
        $onames = $request->onames;
        $sname = $request->sname;
        $doe = $request->doe;
        $department = $request->department;
        $gender = $request->gender;
        $designation = $request->designation;
        $dob = $request->dob;
        $office = $request->office;
        $email = $request->email;
        $accountno = $request->accountno;
        $phone = $request->phone;
        $bank = $request->bank;


        //check if the email provided is already in use
        $checkemail = DB::table('profile')->where('email', $email)->count();

        if($checkemail == 1){

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted to add new staff with email ".$email." to the database, but failed because the email is already in use";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error',
                'info' => 'Email address provided already in use by another staff'
            ]);

        }else{

            //check if the staff already exist using staff id
            $checkemail = DB::table('profile')->where('staffid', $staffid)->count();


            if($checkemail == 1){

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted to add new staff with staff id ".$staffid." to the database, but failed because the staff id is already in use";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error',
                'info' => 'Staff already registered or staff id is in use by another staff'
            ]);
            
            }

        }


        $data = array();

        $data['staffid'] = $staffid;
        $data['surname'] = $sname;
        $data['firstname'] = $fname;
        $data['othername'] = $onames;
        $data['email'] = $email;
        $data['phone'] = $phone;
        $data['dob'] = $dob;
        $data['doe'] = $doe;
        $data['department'] = $department;
        $data['designation'] = $designation;
        $data['office'] = $office;
        $data['gender'] = $gender;
        $data['accountno'] = $accountno;
        $data['bankname'] = $bank;
        $data['employmentstatus'] = 'Active Employment';
        $data['datechanged'] = $doe;
        $data['created_at'] = date('Y-m-d H:i:s');


        $create = DB::table('profile')->insertGetId($data);


        if($create){

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Added new staff with ".$staffid." and email ".$email." to the database";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            //send email to the staff

            //send password and public key to admin email
            $username = $fname;
            $useremail = $email;
            
            try{
                //send email to the person concerned
                Mail::send('emails.newprofileemail', ['username' => $username, 'useremail' => $useremail], function ($message) use ($username, $useremail) {
                $message->to($useremail, $username)->subject('New profile created for you at Relia Energy ERP');
                $message->from('erp@reliaenergy.com', 'ERP');
                });
            }catch(\Exception $e){
                
            }

            return response()->json([
                'message' => 'success',
                'id' => $create,
                'info' => 'New staff account successfully created'
            ]);

        }else{

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted to add new staff with ".$staffid." and email ".$email." to the database, but failed";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error',
                'info' => 'Could not create staff account at the moment, please try again.'
            ]);

        }




    }



    //upload staff profile pics

    public function submitpics(Request $request){

        $pics = $request->file('pics');
        $user = $request->user;

        $email = DB::table('profile')->where('id', $user)->value('email');

        $picsurl = $pics->store('assets/profile');

        $update = DB::table('profile')->where('id', $user)->update(['image' => $picsurl]);

        if($update){

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Successfully updated the profile image of the staff  with the email ".$email." in the database";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);

            return response()->json([
                'message' => 'success',
                'id' => $user
            ]);

        }else{

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted to update the profile image of the staff with the email ".$email." to the database, but failed";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error'
            ]);

        }
    }


    //upload staff signature

    public function submitsignature(Request $request){

        $pics = $request->file('pics');
        $user = $request->user;

        $email = DB::table('profile')->where('id', $user)->value('email');

        $picsurl = $pics->store('assets/profile');

        $update = DB::table('profile')->where('id', $user)->update(['signature' => $picsurl]);

        if($update){

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Successfully updated the signature of the staff  with the email ".$email." in the database";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);

            return response()->json([
                'message' => 'success',
                'id' => $user
            ]);

        }else{

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted to update the signature of the staff with the email ".$email." to the database, but failed";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error'
            ]);

        }
    }


    public function editstaff(Request $request){


        $staff = DB::table('profile')->where('id', $request->id)->get();


        $offices = DB::table('offices')->orderBy('offices', 'asc')->get();

        $banks = DB::table('banks')->orderBy('banks', 'asc')->get();

        $departments = DB::table('departments')->orderBy('departments', 'asc')->get();

        $designations = DB::table('designations')->orderBy('designations', 'asc')->get();


        return view('edit-staff', ['staff' => $staff, 'offices' => $offices, 'banks' => $banks, 'departments' => $departments, 'designations' => $designations]);

    }


    public function convertuser(Request $request){

        $staff = DB::table('profile')->where('id', $request->id)->get();

        $password = $this->getToken(10);

        $data = array();

        $data['profileid'] = $staff[0]->id;
        $data['name'] = $staff[0]->firstname.' '.$staff[0]->surname.'  '.$staff[0]->othername;
        $data['email'] = $staff[0]->email;
        $data['role'] = DB::table('role')->where('role', 'Staff')->value('id');
        $data['status'] = 'Active';
        $data['password'] = Hash::make($password);
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        $convert = DB::table('users')->insertGetId($data);


        if($convert){

            //update staff profile with user id
            $update = DB::table('profile')->where('id', $staff[0]->id)->update(['userid' => $convert]);


            //Email user login credentials
            $username = $staff[0]->firstname;
            $useremail = $staff[0]->email;
            
            try{
                //send email to the person concerned
                Mail::send('emails.newuseremail', ['username' => $username, 'useremail' => $useremail, 'password' => $password], function ($message) use ($username, $useremail, $password) {
                $message->to($useremail, $username)->subject('Login Credentials for Relia Energy ERP');
                $message->from('erp@reliaenergy.com', 'ERP');
                });
            }catch(\Exception $e){
                
            }


            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Successfully converted the staff with the email ".$useremail." to a user";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);

            return response()->json([
                'message' => 'success',
                'info' => 'Staff successfully converted to user'
            ]);

        }else{

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted to convert the staff with the email ".$email." to a user, but failed";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error',
                'info' => 'Staff successfully converted to user'
            ]);
        }
        

    }


    public function submiteditstaff(Request $request){

        $fname = $request->fname;
        $staffid = $request->staffid;
        $onames = $request->onames;
        $sname = $request->sname;
        $doe = $request->doe;
        $department = $request->department;
        $gender = $request->gender;
        $designation = $request->designation;
        $dob = $request->dob;
        $office = $request->office;
        $email = $request->email;
        $accountno = $request->accountno;
        $phone = $request->phone;
        $bank = $request->bank;
        $employmentstatus = $request->employmentstatus;
        $datechanged = $request->datechanged;

        //check if the email provided is already in use
        $checkemail = DB::table('profile')->where([['email', $email],['id', '!=', $request->id]])->count();

        if($checkemail == 1){

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted update staff with email ".$email." to the database, but failed because the email is already in use by another staff";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error',
                'info' => 'Email address provided is currently in use by another staff'
            ]);

            }else{

            //check if the staff already exist using staff id
            $checkemail = DB::table('profile')->where([['staffid', $staffid],['id', '!=', $request->id]])->count();


            if($checkemail == 1){

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted to update staff with staff id ".$staffid." to the database, but failed because the staff id is already in use by another staff";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error',
                'info' => 'Staff ID provided is currently in use by another staff'
            ]);
            
            }

        }


        $data = array();

        $data['staffid'] = $staffid;
        $data['surname'] = $sname;
        $data['firstname'] = $fname;
        $data['othername'] = $onames;
        $data['email'] = $email;
        $data['phone'] = $phone;
        $data['dob'] = $dob;
        $data['doe'] = $doe;
        $data['department'] = $department;
        $data['designation'] = $designation;
        $data['office'] = $office;
        $data['gender'] = $gender;
        $data['accountno'] = $accountno;
        $data['bankname'] = $bank;
        $data['employmentstatus'] = $employmentstatus;
        $data['datechanged'] = $datechanged;
        $data['updated_at'] = date('Y-m-d H:i:s');

        $update = DB::table('profile')->where('id', $request->id)->update($data);


        if($update){

            //update user table name and email incase it changed

            $userdata = array();

            $userdata['name'] = $fname.' '.$sname.' '.$onames;
            $userdata['email'] = $email;

            $updateuser = DB::table('users')->where('profileid', $request->id)->update($userdata);

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Updated staff data of staff with staff id ".$staffid." and email ".$email." to the database";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            //send email to the staff

            //send password and public key to admin email
            $username = $fname;
            $useremail = $email;
            
            try{
                //send email to the person concerned
                Mail::send('emails.editprofileemail', ['username' => $username, 'useremail' => $useremail], function ($message) use ($username, $useremail) {
                $message->to($useremail, $username)->subject('Your profile was updated at Relia Energy ERP');
                $message->from('erp@reliaenergy.com', 'ERP');
                });
            }catch(\Exception $e){
                
            }

            return response()->json([
                'message' => 'success',
                'id' => $request->id,
                'info' => 'Staff profile successfully updated'
            ]);

        }else{

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted to update staff profile for staff with ".$staffid." and email ".$email." to the database, but failed";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error',
                'info' => 'Staff update could not be completed at the moment, please try again'
            ]);

        }

    }


    public function stafftable(){

        $staffs = DB::table('profile')->orderBy('firstname')->get();
        //dd($staffs);

        return view('stafftable', ['staffs' => $staffs]);
    }


    public function usertable(){

        $users = DB::table('users')->orderBy('name')->get();

        return view('usertable', ['users' => $users]);
    }


    public function userprofile(Request $request){


        $user = DB::table('users')->where('id', $request->id)->get();

        $roles = DB::table('role')->orderBy('role', 'asc')->get();

        return view('edit-user', ['user' => $user, 'roles' => $roles]);

    }


    public function submitedituser(Request $request){

        $role = $request->role;
        $status = $request->status;

        $data = array();

        $data['role'] = $role;
        $data['status'] = $status;
        $data['updated_at'] = date('Y-m-d H:i:s');

        $update = DB::table('users')->where('id', $request->id)->update($data);

        if($update){

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Updated user data of user with user id ".$request->id;
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'success',
                'info' => 'User data successfully updated'
            ]);

        }else{

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted to update user data for user with user id ".$staffid." to the database, but failed";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error',
                'info' => 'User update could not be completed at the moment, please try again'
            ]);

        }
    }


    public function updateprofile(){

        $staff = DB::table('profile')->where('id', Auth::user()->profileid)->get();

        $banks = DB::table('banks')->orderBy('banks', 'asc')->get();

        return view('update-profile', ['banks' => $banks, 'staff' => $staff]);
    }


    public function submitupdateprofile(Request $request){


        $fname = $request->fname;
        $staffid = $request->staffid;
        $onames = $request->onames;
        $sname = $request->sname;
        $doe = $request->doe;
        $department = $request->department;
        $gender = $request->gender;
        $designation = $request->designation;
        $dob = $request->dob;
        $office = $request->office;
        $email = $request->email;
        $accountno = $request->accountno;
        $phone = $request->phone;
        $bank = $request->bank;
        $employmentstatus = $request->employmentstatus;
        $datechanged = $request->datechanged;

        //check if the email provided is already in use
        $checkemail = DB::table('profile')->where([['email', $email],['id', '!=', Auth::user()->profileid]])->count();

        if($checkemail == 1){

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted update staff profile with email ".$email." to the database, but failed because the email is already in use by another staff";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error',
                'info' => 'Email address provided is currently in use by another staff'
            ]);

            }else{

            //check if the staff already exist using staff id
            $checkemail = DB::table('profile')->where([['staffid', $staffid],['id', '!=', Auth::user()->profileid]])->count();


            if($checkemail == 1){

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted to update staff with staff id ".$staffid." to the database, but failed because the staff id is already in use by another staff";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error',
                'info' => 'Staff ID provided is currently in use by another staff'
            ]);
            
            }

        }


        $data = array();

        $data['staffid'] = $staffid;
        $data['surname'] = $sname;
        $data['firstname'] = $fname;
        $data['othername'] = $onames;
        $data['email'] = $email;
        $data['phone'] = $phone;
        $data['dob'] = $dob;
        $data['doe'] = $doe;
        $data['department'] = $department;
        $data['designation'] = $designation;
        $data['office'] = $office;
        $data['gender'] = $gender;
        $data['accountno'] = $accountno;
        $data['bankname'] = $bank;
        $data['employmentstatus'] = $employmentstatus;
        $data['datechanged'] = $datechanged;
        $data['updated_at'] = date('Y-m-d H:i:s');

        $update = DB::table('profile')->where('id', Auth::user()->profileid)->update($data);


        if($update){

            //update user table name and email incase it changed

            $userdata = array();

            $userdata['name'] = $fname.' '.$sname.' '.$onames;
            $userdata['email'] = $email;

            $updateuser = DB::table('users')->where('profileid', Auth::user()->profileid)->update($userdata);

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Updated staff data of staff with staff id ".$staffid." and email ".$email." to the database";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            //send email to the staff

            //send password and public key to admin email
            $username = $fname;
            $useremail = $email;
            
            try{
                //send email to the person concerned
                Mail::send('emails.editprofileemail', ['username' => $username, 'useremail' => $useremail], function ($message) use ($username, $useremail) {
                $message->to($useremail, $username)->subject('Your profile was updated at Relia Energy ERP');
                $message->from('erp@reliaenergy.com', 'ERP');
                });
            }catch(\Exception $e){
                
            }

            return response()->json([
                'message' => 'success',
                'id' => $request->id,
                'info' => 'Staff profile successfully updated'
            ]);

        }else{

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted to update staff profile for staff with ".$staffid." and email ".$email." to the database, but failed";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error',
                'info' => 'Staff update could not be completed at the moment, please try again'
            ]);

        }

    }


    //upload staff profile pics

    public function submitmypics(Request $request){

        $pics = $request->file('pics');
        $user = Auth::user()->profileid;

        $email = DB::table('profile')->where('id', $user)->value('email');

        $picsurl = $pics->store('assets/profile');

        $update = DB::table('profile')->where('id', $user)->update(['image' => $picsurl]);

        if($update){

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Successfully updated the profile image of the staff  with the email ".$email." in the database";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);

            return response()->json([
                'message' => 'success',
                'id' => $user
            ]);

        }else{

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted to update the profile image of the staff with the email ".$email." to the database, but failed";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error'
            ]);

        }
    }


    //upload staff signature

    public function submitmysignature(Request $request){

        $pics = $request->file('pics');
        $user = Auth::user()->profileid;

        $email = DB::table('profile')->where('id', $user)->value('email');

        $picsurl = $pics->store('assets/profile');

        $update = DB::table('profile')->where('id', $user)->update(['signature' => $picsurl]);

        if($update){

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Successfully updated the signature of the staff  with the email ".$email." in the database";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);

            return response()->json([
                'message' => 'success',
                'id' => $user
            ]);

        }else{

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted to update the signature of the staff with the email ".$email." to the database, but failed";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error'
            ]);

        }
    }


    public function uploadmysignature(){

        return view('upload-mysignature');
    }


    public function uploadmypics(){

        return view('upload-mypics');
    }

    public function changepassword(){

        return view('changepassword');
    }


    public function submitpassword(Request $request){

        $currentpassword = $request->currentpassword;
        $newpasswrod = $request->newpassword;
        $newpasswordagain = $request->newpasswordagain;

        $systempassword = DB::table('users')->where('id', Auth::user()->id)->value('password');

        if($newpasswrod != $newpasswordagain){

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted to change password but could not complete the process because new password did not match";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error',
                'info' => 'New password did not match'
            ]);

        }else if(!Hash::check($currentpassword, $systempassword)){

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted to change password but could not complete the process because the current password provided did not match the database password";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error',
                'info' => 'Current password provided did not match the password stored for this user in the database'
            ]);

        }else{

            $update = DB::table('users')->where('id', Auth::user()->id)->update(['password' => Hash::make($newpasswrod), 'updated_at' => date('Y-m-d H:i:s')]);


            if($update){

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "User successfully updated their password";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            //send email to the staff
            $username = Auth::user()->name;
            $useremail = Auth::user()->email;
            
            try{
                //send email to the person concerned
                Mail::send('emails.passwordchangeemail', ['username' => $username, 'useremail' => $useremail], function ($message) use ($username, $useremail) {
                $message->to($useremail, $username)->subject('Your password at the Relia Energy ERP was successly chaged.');
                $message->from('erp@reliaenergy.com', 'ERP');
                });
            }catch(\Exception $e){
                
            }

            return response()->json([
                'message' => 'success',
                'info' => 'Password successfully changed'
            ]);
            }

        }
    }

    
}
