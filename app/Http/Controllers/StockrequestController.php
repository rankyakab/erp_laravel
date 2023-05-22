<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Stockrequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class StockrequestController extends Controller
{
    //Authenticate user
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stockrequests.index', ['stockrequests' => Stockrequest::all()]);
    }

    public function myindex()
    {
        return view('stockrequests.myindex', ['stockrequests' => Stockrequest::all()]);
    }
    public function stockrequestlisttreat()
    {

        return view('stockrequests.stockrequestlisttreat', ['stockrequests' => Stockrequest::all()->filter(function ($item) {
            if ($item->recipient_id == Auth::user()->profileid) {
                return $item;
            }

            $copy_id = explode(",", $item->copy_id);
            if (in_array(Auth::user()->profileid, $copy_id)) {
                return $item;
            }
            return "";
        })]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('stockrequests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'qty_requested' => 'required',
            'stock_id' => 'required',
            'recipient_id' => 'required',

        ]);
        $formFields['requested_by'] = Auth::user()->profileid;
        $formFields['status'] = "pending";
        $data = $request->all();
        $qty_requested = $data['qty_requested'];
        $stock_id = $data['stock_id'];



        $stock = Stock::find($stock_id);
        // $user = User::find($data["recipient_id"]);

        // dd($user->profile);
        if ($stock->qty_in_stock < $qty_requested) {
            $errorMessage = 'You Request is more than the number of that particular Item in Stock';
            return view('stockrequests.create', compact('errorMessage'));
        }


        DB::table('stockrequests')->insert($formFields);


        //send email to recipients
        $username = $this->staffname($data["recipient_id"]);
        $useremail = $this->staffemail($data["recipient_id"]);

        try {
            //send email to the person concerned
            Mail::send('emails.stockrequest', ['username' => $username, 'useremail' => $useremail], function ($message) use ($username, $useremail) {
                $message->to($useremail, $username)->subject('New Stock Request has been created at Relia Energy ERP.');
                $message->from('erp@reliaenergy.com', 'ERP');
            });
        } catch (\Exception $e) {
        }


        //send notification message to every staff
        $this->createnotification($data["recipient_id"], 'Stock Request', "You have a Stock Request is awaiting your action", 'Unread', 'stockrequestlisttreat');


        if (!is_null($data['copy_id'])) {
            $formFields['copy_id'] =
                implode(", ", $data['copy_id']);
            foreach ($data['copy_id'] as $value) {
                // $user = User::find($value);
                //send email to recipients
                $username = $this->staffname($value);
                $useremail = $this->staffemail($value);

                try {
                    //send email to the person concerned
                    Mail::send('emails.stockrequest', ['username' => $username, 'useremail' => $useremail], function ($message) use ($username, $useremail) {
                        $message->to($useremail, $username)->subject('New Stock Request has been created at Relia Energy ERP.');
                        $message->from('erp@reliaenergy.com', 'ERP');
                    });
                } catch (\Exception $e) {
                }


                //send notification message to every staff
                $this->createnotification($value, 'Stock Request', "You have a Stock Request is awaiting your action", 'Unread', 'stockrequestlisttreat');
            }
        }


        return redirect('/mystockrequest')->with('message', 'Request made  successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stockrequest  $stockrequest
     * @return \Illuminate\Http\Response
     */
    public function show($stockrequest)
    {

        return  view('stockrequests.show', ['stockrequest' => Stockrequest::find($stockrequest)]);
    }
    public function myshow($stockrequest)
    {

        return  view('stockrequests.myshow', ['stockrequest' => Stockrequest::find($stockrequest)]);
    }

    public function treat($stockrequest)
    {

        return  view('stockrequests.treat', ['stockrequest' => Stockrequest::find($stockrequest)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stockrequest  $stockrequest
     * @return \Illuminate\Http\Response
     */
    public function edit($stockrequest)
    {
        return  view('stockrequests.edit', ['stockrequest' => Stockrequest::find($stockrequest)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stockrequest  $stockrequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $stockrequest)
    {

        $srequest = Stockrequest::find($stockrequest);




        $formFields = $request->validate([
            'qty_requested' => 'required',
            'stock_id' => 'required',
            'recipient_id' => 'required',


        ]);
        $data = $request->all();
        $qty_requested = $data['qty_requested'];
        $stock_id = $data['stock_id'];
        $copy_id = "";
        if (array_key_exists("copy_id", $data)) {
            $copy_id =
                implode(", ", $data['copy_id']);
        }

        // $stock = Stock::find($stock_id);

        if ($srequest->stock->qty_in_stock < $qty_requested) {
            $errorMessage = 'You Request is more than the number of that particular Item in Stock';
            return view("stockrequests.edit", compact('errorMessage'), ['stockrequest' => $srequest]);
        }


        $user = User::find($data['recipient_id']);
        $this->createnotification($user->profile->id, 'Stock Request', "You have a Stock Request awaiting your action", 'Unread', 'stockrequestlisttreat');


        $srequest->qty_requested = $qty_requested;
        $srequest->copy_id = $copy_id;
        $srequest->recipient_id = $data['recipient_id'];
        //  dd($formFields);
        //$srequest->update($formFields);
        //dd($srequest);
        $srequest->save($formFields);
        // dd($srequest);

        return redirect("/mystockrequestedit{$stockrequest}")->with('message', 'Approval Action Executed  successfully!');
    }

    public function updatetreat(Request $request,  $stockrequest)
    {
        // dd($stockrequest);

        $srequest = Stockrequest::find($stockrequest);




        $formFields = $request->validate([
            'treat_comment' => 'nullable|string',
            'status' => 'required',
            'treated_by' => 'required',

        ]);
        //$name = if($stock->name == )

        $requester_id = 0;
        if (is_null($srequest->requester) || is_null($srequest->requester->profile)) {
        } else {

            $requester_id = $srequest->requester->profile->id;
        }


        $name = '';
        if ($request->validate(['status' => 'required'])["status"] == "approved") {
            $name = "approval_date";

            $this->createnotification($requester_id, 'Stock Request Approved', "You have an Approved Stock Request", 'Unread', 'mystockrequest');
        } else {
            $name = 'decline_date';
            $this->createnotification($requester_id, 'Stock Request Rejected', "You have a Rejected Stock Request", 'Unread', 'mystockrequest');
        }

        $formFields[$name] = now();





        // dd($srequest);
        $srequest->update($formFields);
        $srequest->save();
        $username = $this->staffname($requester_id);
        $useremail = $this->staffemail($requester_id);

        try {
            //send email to the person concerned
            Mail::send('emails.treatstock', ['username' => $username, 'useremail' => $useremail], function ($message) use ($username, $useremail) {
                $message->to($useremail, $username)->subject('New Stock Request has been acted on at Relia Energy ERP.');
                $message->from('erp@reliaenergy.com', 'ERP');
            });
        } catch (\Exception $e) {
        }


        //send notification message to every staff
        //   $this->createnotification($requester_id, 'Stock Request', "Your Stock request has been acted on", 'Unread', 'mystockrequest');



        return redirect("/stockrequestlisttreat{$stockrequest}")->with('message', 'Approval Action Executed  successfully!');
    }



    public function disburse(Request $request,  $stockrequest)
    {

        $srequest = Stockrequest::find($stockrequest);





        if ($srequest->stock->qty_in_stock < $srequest->qty_requested) {
            $errorMessage = 'You Request is more than the number of that particular Item in Stock';
            return view("stockrequests.edit", [compact('errorMessage'), 'stockrequest' => $srequest]);
        }


        //  dd($formFields);
        $srequest->disburse_date = now();
        $srequest->status = "disbursed";
        $stock = $srequest->stock;
        $stock->qty_in_stock = $stock->qty_in_stock - $srequest->qty_requested;
        $stock->save();

        $srequest->save();


        // dd($srequest);
        DB::table('stores')->insert(["stock_id" => $stock->id, "actor_id" => Auth::user()->profileid, "request_id" => $srequest->id, "qty" => $srequest->qty_requested, "action" => "disburse"]);

        $username = $this->staffname($srequest->requested_by);
        $useremail = $this->staffemail($srequest->requested_by);

        try {
            //send email to the person concerned
            Mail::send('emails.disbursestock', ['username' => $username, 'useremail' => $useremail], function ($message) use ($username, $useremail) {
                $message->to($useremail, $username)->subject('New Stock Request has been acted on at Relia Energy ERP.');
                $message->from('erp@reliaenergy.com', 'ERP');
            });
        } catch (\Exception $e) {
        }


        //send notification message to every staff
        $this->createnotification($srequest->requested_by, 'Stock Request', "Your Stock request has been Disbursed", 'Unread', 'mystockrequest');



        return redirect("/mystockrequest{$srequest->id}")->with('message', 'Disbursed Action Executed  successfully!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stockrequest  $stockrequest
     * @return \Illuminate\Http\Response
     */
    public function destroy($stockrequest)
    {
        $srequest = Stockrequest::find($stockrequest)->delete();

        return redirect("mystockrequest/")->with('message', 'Stock Request Deleted successfully!');
    }
}
