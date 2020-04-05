<?php

namespace App\Http\Controllers;

use App\activity_plannings;
use App\Attivita;
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
        return redirect('mieattivita')->with('Success','Pianificazione creata');
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
        $plan->notes = $request->input('note');
        $plan->save();
        return redirect('/mieattivita')->with('Success','Pianificazione salvata');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plan = activity_plannings::find($id);
        $act_id = $plan->activity_id;
        $plan->delete();
        return redirect('/attivita/'.$act_id.'/showplans')->with('success', "Pianificazione cancellata");
    }

    /**
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function controlplans(Request $request, $id)
    {
        $act_id = $request->route('activitum');
        $plans = activity_plannings::all();
        $attivita = Attivita::find($act_id);

        return view('plannings.index')->with('plans', $plans)->with('attivita',$attivita);
    }
}
