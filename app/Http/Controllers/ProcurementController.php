<?php

namespace App\Http\Controllers;

use App\Models\Procurement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProcurementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('procurements.index', ['procurements' => Procurement::all()]);
    }
    public function myindex()
    {
        return view('procurements.myindex', ['procurements' => Procurement::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('procurements.create', ['staffs' => DB::table('profile')->orderBy('firstname')->get()]);
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
            'item' => ['required', 'string', 'max:255'],
            'quantity' => 'required',
            'amount' => 'required',
            'unit_price' => 'required',
            'total_price' => 'required',
            'requested_by' => 'required',
            'sent_to' => 'required',
            'date' => ['required'],
        ]);






        $formFields['status'] = 'pending';

        if ($request->hasFile('attachment')) {
            $formFields['attachment'] = $request->file('attachment')->store('image.attachment', 'local');
            $formFields['attachment_type'] =  $request->validate(['attachment_type' => 'required'])["attachment_type"];
        }

        DB::table('procurements')->insert($formFields);
        //  dd($formFields);
        return redirect('/procurements')->with('message', 'Procurement Request created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Procurement  $procurement
     * @return \Illuminate\Http\Response
     */
    public function show(Procurement $procurement)
    {
        return view('procurements.show', ['procurement' => $procurement]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Procurement  $procurement
     * @return \Illuminate\Http\Response
     */
    public function edit(Procurement $procurement)
    {
        return view('procurements.edit', ['procurement' => $procurement, 'staffs' => DB::table('profile')->orderBy('firstname')->get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Procurement  $procurement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Procurement $procurement)
    {
        $formFields = $request->validate([
            'item' => ['required', 'string', 'max:255'],
            'quantity' => 'required',
            'amount' => 'required',
            'unit_price' => 'required',
            'total_price' => 'required',
            'requested_by' => 'required',
            'sent_to' => 'required',
            'date' => ['required'],
        ]);

        $formFields['status'] = 'pending';

        if ($request->hasFile('attachment')) {
            $formFields['attachment'] = $request->file('attachment')->store('procurement.attachment', 'local');
            $formFields['attachment_type'] =  $request->validate(['attachment_type' => 'required'])["attachment_type"];
        }

        //dd($formFields);
        $procurement->update($formFields);
        $procurement->save();


        return redirect("procurements/")->with('message', 'Procurement Request updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Procurement  $procurement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Procurement $procurement)
    {
        $procurement->delete();

        return redirect("procurements/")->with('message', 'Procurement Deleted successfully!');
    }
}
