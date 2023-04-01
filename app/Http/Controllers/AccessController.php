<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Auth;

class AccessController extends Controller
{
    //Access Control Backend

    //Authenticate user
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function actions(){

        $actions = DB::table('actions')->orderBy('action', 'asc')->get();

        return view('actions', ['actions' => $actions]);
    }


    public function submiaction(Request $request){

        $action = $request->action;

        //check if action already added to the database

        $check = DB::table('actions')->where('action', $action)->count();

        if($check == 1){

            
            //log the event

            $this->logevent("Attempted to add new action ".$action." to the database, but failed because the event exist");


            return response()->json([
                'message' => 'error',
                'info' => 'unable to add action to the database'
            ]);
        }

        $data = array();

        $data['action'] = $action;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        try {

        $create = DB::table('actions')->insert($data);

        } catch (\Exception $e) {
            DB::rollback();
            // something went wrong
            return response()->json([
                'message' => 'error',
                'info' => 'Error performing this action, make sure all the required fields are provided then try again, please try again'
            ]);
        }

        if($create){

            
            //log the event

            $this->logevent("Added new action ".$action." to the database");

            return response()->json([
                'message' => 'success',
                'info' => 'Action successfully added to the database'
            ]);

        }else{

            //log the event

            $logs = array();

            $logs['user'] = Auth::user()->id;
            $logs['action'] = "Attempted to add new action ".$action." to the database, but failed";
            $logs['created_at'] = date('Y-m-d H:i:s');
            $logs['updated_at'] = date('Y-m-d H:i:s');

            $createlogs = DB::table('logs')->insert($logs);


            return response()->json([
                'message' => 'error',
                'info' => 'Error adding action to the database, please try again'
            ]);

        }
    }


    public function process(){

        $actions = DB::table('actions')->orderBy('action', 'asc')->get();

        $processes = DB::table('processes')->orderBy('process', 'asc')->get();

        return view('process', ['processes' => $processes, 'actions' => $actions]);
    }


    public function submitprocess(Request $request){


        $process = $request->process;
        $action = implode($request->actions, ',');

        //check if process already added to the database

        $check = DB::table('processes')->where('process', $process)->count();

        if($check == 1){

            
            //log the event

            $this->logevent("Attempted to add new process ".$process." to the database, but failed because the event exist");


            return response()->json([
                'message' => 'error',
                'info' => 'unable to add process to the database'
            ]);
        }

        $data = array();

        $data['process'] = $process;
        $data['actions'] = $action;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        try {

        $create = DB::table('processes')->insert($data);

        } catch (\Exception $e) {
            DB::rollback();
            // something went wrong
            return response()->json([
                'message' => 'error',
                'info' => 'Error performing this action, make sure all the required fields are provided then try again, please try again'
            ]);
        }

        if($create){

            
            //log the event

            $this->logevent("Added new process ".$process." to the database");

            return response()->json([
                'message' => 'success',
                'info' => 'Process successfully added to the database'
            ]);

        }else{

            
            //log the event

            $this->logevent("Attempted to add new process ".$process." to the database, but failed");


            return response()->json([
                'message' => 'error',
                'info' => 'Error adding process to the database, please try again'
            ]);

        }

    }


    public function submitrole(Request $request){

        $role = $request->role;

        //check if bank already added to the database

        $check = DB::table('role')->where('role', $role)->count();

        if($check == 1){

            
            //log the event

            $this->logevent("Attempted to add new role ".$role." to the database, but failed because the event exist");


            return response()->json([
                'message' => 'error',
                'info' => 'unable to add role to the database'
            ]);
        }

        $data = array();

        $data['role'] = $role;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        try {

        $create = DB::table('role')->insert($data);

        } catch (\Exception $e) {
            DB::rollback();
            // something went wrong
            return response()->json([
                'message' => 'error',
                'info' => 'Error performing this action, make sure all the required fields are provided then try again, please try again'
            ]);
        }

        if($create){

            //log the event

            $this->logevent("Added new role ".$role." to the database");

            return response()->json([
                'message' => 'success',
                'info' => 'Process successfully added to the database'
            ]);

        }else{

            //log the event

            $this->logevent("Attempted to add new role ".$role." to the database, but failed");


            return response()->json([
                'message' => 'error',
                'info' => 'Error adding role to the database, please try again'
            ]);

        }

    }


    public function roles(){

        $roles = DB::table('role')->orderBy('role')->get();

        return view('roles', ['roles' => $roles]);
    }

    public function privileges(Request $request){

        $roles = DB::table('role')->orderBy('role')->get();

        $processes = DB::table('processes')->orderBy('process', 'asc')->get();


        if(isset($request->role)){

                $setactions = DB::table('privileges')->where('role', $request->role)->get();

                //dump($setactions);

                /*$setactions = array();

                foreach($setaction as $newset){

                    array_push($setactions, $newset->action);
                }*/

                return view('privileges', ['roles' => $roles, 'processes' => $processes, 'setrole' => $request->role, 'setactions' => $setactions]);

            }else{

            return view('privileges', ['roles' => $roles, 'processes' => $processes]);

        }
    }


    public function submitprivileges(Request $request){

        $role = $request->role;
        $process = $request->process;
        $actions = $request->actions;
        $countaction = $request->countaction;

        //dd($request);

        if(empty($role) || empty($actions)){

                //log the event

                $this->logevent("Attempted to creat new privileges for the role ".$role." but failed because the role or privilege was not selected");

                return response()->json([
                'message' => 'error',
                'info' => 'Error creating privileges, please make sure you select the role and atleast one action.'
            ]);

        }

        //delete role privileges if already exist

        $delete = DB::table('privileges')->where('role', $role)->delete();


        //create fresh privileges for the role

        for($i=0; $i<count($actions); $i++){

            //dd($actions);

            $result = explode("|", $actions[$i]);

            $data = array();

            $data["role"] = $role;
            $data["privilege"] = $result[0];
            $data["action"] = $result[1];
            $data["created_at"] = date('Y-m-d H:i:s');

            
            try {

            $create = DB::table('privileges')->insert($data);

            } catch (\Exception $e) {
                DB::rollback();
                // something went wrong
                return response()->json([
                    'message' => 'error',
                    'info' => 'Error performing this action, make sure all the required fields are provided then try again, please try again'
                ]);
            }


        }

        if($create){

                //log the event

                $this->logevent("Successfully created new privileges for the role ".$role);

                return response()->json([
                'message' => 'success',
                'info' => 'Privileges successfully added to the database'
            ]);

            }else{


                //log the event

                $this->logevent("Attempted to create new privileges for the role ".$role." but failed.");

                return response()->json([
                'message' => 'error',
                'info' => 'Error creating privileges, please try again.'
            ]);

            }
    }
}
