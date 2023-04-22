<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Stockrequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StockrequestController extends Controller
{
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

        if (!is_null($data['copy_id'])) {
            $formFields['copy_id'] =
                implode(", ", $data['copy_id']);
        }

        $stock = Stock::find($stock_id);

        if ($stock->qty_in_stock < $qty_requested) {
            $errorMessage = 'You Request is more than the number of that particular Item in Stock';
            return view('stockrequests.create', compact('errorMessage'));
        }



        DB::table('stockrequests')->insert($formFields);
        return redirect('/stockrequest')->with('message', 'Stock created successfully!');
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

        $stock = Stock::find($stock_id);

        if ($stock->qty_in_stock < $qty_requested) {
            $errorMessage = 'You Request is more than the number of that particular Item in Stock';
            return view("stockrequests.edit", [compact('errorMessage'), 'stockrequest' => $srequest]);
        }





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


        //$name = if($stock->name == )
        $name = '';
        if ($request->validate(['status' => 'required'])["status"] == "approved") {
            $name = "approval_date";
        } else {
            $name = 'decline_date';
        }

        $formFields = $request->validate([
            'treat_comment' => 'required',

            'status' => 'required',
            'treated_by' => 'required',

        ]);


        $formFields[$name] = now();





        // dd($srequest);
        $srequest->update($formFields);
        $srequest->save();


        return redirect("/stockrequestlisttreat{$stockrequest}")->with('message', 'Approval Action Executed  successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stockrequest  $stockrequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stockrequest $stockrequest)
    {
        //
    }
}
