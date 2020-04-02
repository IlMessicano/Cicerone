<?php

namespace App\Http\Controllers;

use App\activity_plannings;
use Illuminate\Http\Request;
use View;
class ActivityPlanningsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plan = activity_plannings::all();
        return view('plannings.index')->with('plan',$plan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $activityID = $request->route('activitum');

        activity_plannings::create([
            'activity_id' => $activityID,
        ]);
        return redirect('mieattivita');
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
     * @param  \App\activity_plannings  $activity_plannings
     * @return \Illuminate\Http\Response
     */
    public function show(activity_plannings $activity_plannings)
    {
        //
    }

    public function edit(Request $request, $id)
    {
        $plan = activity_plannings::find($id);
        return view('plannings.edit')->with('plan',$plan);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $plan = activity_plannings::find($id);
        $plan->startDate = $request->input('start');
        $plan->stopDate = $request->input('stop');
        $plan->cost = $request->input('cost');
        $plan->maxPartecipants = $request->input('maxpart');
        $plan->save();
        return redirect('/mieattivita')->with('Success','Pianificazione salvata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\activity_plannings  $activity_plannings
     * @return \Illuminate\Http\Response
     */
    public function destroy(activity_plannings $activity_plannings)
    {
        //
    }


}
