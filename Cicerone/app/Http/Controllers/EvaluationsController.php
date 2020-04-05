<?php

namespace App\Http\Controllers;

use App\Evaluations;
use Illuminate\Http\Request;
use Auth;
use Carbon;

class EvaluationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evaluations  $evaluations
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluations $evaluations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evaluations  $evaluations
     * @return \Illuminate\Http\Response
     */
    public function edit(Evaluations $evaluations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evaluations  $evaluations
     * @return \Illuminate\Http\Response
     *  * @param  int  $id
     */
    public function update(Request $request, Evaluations $evaluations,$id)
    {

         Evaluations::create([
             'vote' => $request->input('rating'),

             'comment' => $request->input('comment'),
             'User' => Auth::user()->id,
             'Activity' => $id,
             'evaluationDate' => Carbon\Carbon::now(),
        ]);

        return view('home')->with('Success','Attività votata');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evaluations  $evaluations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evaluations $evaluations)
    {
        //
    }
}
