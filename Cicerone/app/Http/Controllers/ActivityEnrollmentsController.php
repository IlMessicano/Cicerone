<?php

namespace App\Http\Controllers;

use App\Activity_Enrollments;
use App\activity_plannings;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Carbon;

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Activity_Enrollments $activity_Enrollments
     * @return \Illuminate\Http\Response
     */
    public function show(Activity_Enrollments $activity_Enrollments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Activity_Enrollments $activity_Enrollments
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity_Enrollments $activity_Enrollments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Activity_Enrollments $activity_Enrollments
     * @param int $planId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity_Enrollments $activity_Enrollments, $planId)
    {
        $plan = activity_plannings::find($planId);
        $user = User::find(Auth::user()->id);
        if ($user->balance >= $plan->cost) {
            $user->balance =   $user->balance - $plan->cost;
            Activity_Enrollments::create([
                'PlanningId' => $plan->planningId,
                'User' => Auth::user()->id,
                'enrollmentDate' => Carbon\Carbon::now(),
            ]);
            $user->save();

            return redirect('/attivita/' . $plan->activity_id)->with('success', 'Attività prenotata');


        } else {
            return redirect('/attivita/' . $plan->activity_id)->with('error', 'Saldo insufficiente per prenotare questa attività');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Activity_Enrollments $activity_Enrollments
     * @return \Illuminate\Http\Response
     * @param int $id
     */
    public function destroy(Activity_Enrollments $activity_Enrollments, $id)
    {
        $enroll = Activity_Enrollments::find($id);
        $activity_id = $enroll->plan->activity_id;
        $costo = $enroll->plan->cost;
        $user = User::find($enroll->User);
        $user->balance = $user->balance + $costo;
        $enroll->delete();
        return redirect('/attivita/' . $activity_id)->with('success', 'Prenotazione cancellata e rimborso effettuato');

    }
}
