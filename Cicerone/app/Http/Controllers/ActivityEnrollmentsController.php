<?php

namespace App\Http\Controllers;

use App\Activity_Enrollments;
use Illuminate\Http\Request;

class ActivityEnrollmentsController extends Controller
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
     * @param  \App\Activity_Enrollments  $activity_Enrollments
     * @return \Illuminate\Http\Response
     */
    public function show(Activity_Enrollments $activity_Enrollments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activity_Enrollments  $activity_Enrollments
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity_Enrollments $activity_Enrollments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activity_Enrollments  $activity_Enrollments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity_Enrollments $activity_Enrollments)
    {
        /*Activity_Enrollments::create([
             'activity_id' => $activityID,
         ]);*/

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activity_Enrollments  $activity_Enrollments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity_Enrollments $activity_Enrollments)
    {
        //
    }
}
