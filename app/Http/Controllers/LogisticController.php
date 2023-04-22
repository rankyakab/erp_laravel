<?php

namespace App\Http\Controllers;

use App\Models\Logistic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('logistics.index', ['logistics' => Logistic::all()]);
    }


    public function myindex()
    {
        return view('logistics.myindex', ['logistics' => Logistic::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('logistics.create', ['staffs' => DB::table('profile')->orderBy('firstname')->get()]);
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
            'title' => ['required', 'string', 'max:255'],
            'purpose' => ['required', 'string', 'max:255'],
            'amount' => 'required',
            'requested_by' => 'required',
            'sent_to' => 'required',
            'start_date' => ['required'],
            'end_date' => ['required'],
        ]);






        $formFields['status'] = 'pending';



        DB::table('logistics')->insert($formFields);
        //  dd($formFields);
        return redirect('/logistics')->with('message', 'Logistics Request created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logistic  $logistic
     * @return \Illuminate\Http\Response
     */
    public function show(Logistic $logistic)
    {
        return view('logistics.show', ['logistic' => $logistic]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logistic  $logistic
     * @return \Illuminate\Http\Response
     */
    public function edit(Logistic $logistic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logistic  $logistic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logistic $logistic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logistic  $logistic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logistic $logistic)
    {
        //
    }
}
