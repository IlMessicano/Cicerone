<?php

namespace App\Http\Controllers;

use App\activity_plannings;
use Illuminate\Http\Request;

class ActivityPlanningsController extends Controller
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
     * @param  \App\activity_plannings  $activity_plannings
     * @return \Illuminate\Http\Response
     */
    public function show(activity_plannings $activity_plannings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\activity_plannings  $activity_plannings
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,activity_plannings $activity_plannings)
    {
        $idPlan = $request->route('activityplanning');
        $plan = activity_plannings::find($idPlan);
        //return $plan;
        return view('plannings.create')->with('plan',$plan);
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
        $idPlan = $request->route('activityplanning');
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
