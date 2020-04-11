<?php

namespace App\Http\Controllers;

use App\Activity_Enrollments;
use App\activity_plannings;
use App\ActivityLanguages;
use App\Attivita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use Illuminate\Support\Facades\Auth;
use DB;
Use App\Evaluations;

class AttivitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attivita = new Attivita;
        return view('attivita.index')->with('attivita', $attivita);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::guest()) {
            $attivita = new Attivita;
            return view('attivita.index')->with('attivita', $attivita);
        } else
            return redirect('home')->withErrors('Devi effettuare l\'accesso per poter prenotare un\'attività');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:6000',
            'Country' => 'required',
            'State' => 'required',
            'Road' => 'required',
            'City' => 'required',
            'lat' => 'required',
            'long' => 'required',
            'postCode' => 'required',
            'languages' => ['required', 'array', 'min:1'],
            'languages.*' => ['required', 'min:1'],
        ]);

        $attivita = new Attivita;
        //Upload del file
        if ($request->hasFile('img')) {
            //Acquisisco il nome del file
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            //Prendo il nome del file senza estensione
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //Prendo solo l'estensione
            $extension = $request->file('img')->getClientOriginalExtension();

            //Creo il nome del file con il timestamp
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //Upload
            $path = $request->file('img')->storeAs('public/activityImg', $fileNameToStore);

            //Se avevo caricato un immagine, la elimino per caricare la nuova
            if (!is_null($attivita->imgActivity))
                Storage::delete('public/profileImg/' . $attivita->imgAttivita);
            $attivita->imgActivity = $fileNameToStore;
        }
        else{
            $attivita->imgActivity = 'defaultActivity.jpeg';
        }

        $user_activity = Attivita::where('user_id', Auth::user()->id)->get();

        $attivita->nameActivity = $request->input('nomeAttivita');
        foreach ($user_activity as $oldact) {
            if ($oldact->nameActivity == $request->input('nomeAttivita'))
                return redirect('attivita/create')->withErrors('Hai già creato un \'attività con questo nome');
        }


        $attivita->description = $request->input('descrizione');
        $attivita->Country = $request->input('Country');
        $attivita->State = $request->input('State');
        $attivita->Road = $request->input('Road');
        $attivita->City = $request->input('City');
        $attivita->postCode = $request->input('postCode');
        $attivita->latCoord = $request->input('lat');
        $attivita->longCoord = $request->input('long');
        $new_languages = $request->input('languages');


        $attivita->user_id = auth()->user()->id;
        $attivita->save();
        ActivityLanguages::where('Activity', $attivita->ActivityId)->delete();
        foreach ($new_languages as $new_lang) {
            ActivityLanguages::create([
                'Activity' => $attivita->ActivityId,
                'Language' => $new_lang,
            ]);
        }
        activity_plannings::create([
            'activity_id' => $attivita->ActivityId,
        ]);
        return redirect('/mieattivita')->withSuccess('Attività creata');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($ActivityId)
    {
        $attivita = Attivita::find($ActivityId);
        return view('attivita.show')->with('attivita', $attivita);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $attivita = Attivita::find($id);
        if ($attivita->user_id != Auth::user()->id)
            return redirect('/home')->withErrors('Non puoi modificare le attività che non ti appartengono');
        return view('attivita.edit')->with('attivita', $attivita);
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


        $this->validate($request, [
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:6000',
            'Country' => 'required',
            'State' => 'required',
            'Road' => 'required',
            'City' => 'required',
            'lat' => 'required',
            'long' => 'required',
            'postCode' => 'required',
            'languages' => ['required', 'array', 'min:1'],
            'languages.*' => ['required', 'min:1'],
        ]);

        $attivita = Attivita::find($id);


        //Upload del file
        if ($request->hasFile('img')) {
            //Acquisisco il nome del file
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            //Prendo il nome del file senza estensione
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //Prendo solo l'estensione
            $extension = $request->file('img')->getClientOriginalExtension();

            //Creo il nome del file con il timestamp
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //Upload
            $path = $request->file('img')->storeAs('public/activityImg', $fileNameToStore);

            //Se avevo caricato un immagine, la elimino per caricare la nuova
            if (!is_null($attivita->imgActivity))
                Storage::delete('public/profileImg/' . $attivita->imgActivity);
            $attivita->imgActivity = $fileNameToStore;
        }

        $user_activity = Attivita::where('user_id', Auth::user()->id)->get();

        $attivita->nameActivity = $request->input('nomeAttivita');
        foreach ($user_activity as $oldact) {
            if (($oldact->nameActivity == $request->input('nomeAttivita')) && $oldact->ActivityId != $attivita->ActivityId)
                return redirect('attivita/'.$attivita->ActivityId.'/edit')->withErrors('Hai già creato un \'attività con questo nome');
        }
        $attivita->description = $request->input('descrizione');
        $attivita->Country = $request->input('Country');
        $attivita->State = $request->input('State');
        $attivita->Road = $request->input('Road');
        $attivita->City = $request->input('City');
        $attivita->postCode = $request->input('postCode');
        $attivita->latCoord = $request->input('lat');
        $attivita->longCoord = $request->input('long');
        $new_languages = $request->input('languages');
        ActivityLanguages::where('Activity', $attivita->ActivityId)->delete();
        foreach ($new_languages as $new_lang) {
            ActivityLanguages::create([
                'Activity' => $attivita->ActivityId,
                'Language' => $new_lang,
            ]);
        }
        $attivita->user_id = auth()->user()->id;
        $attivita->save();
        return redirect()->route('attivita.show', $id)->withSuccess('Attività modificata');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $ActivityId
     * @return \Illuminate\Http\Response
     */
    public function destroy($ActivityId)
    {
        $attivita = Attivita::find($ActivityId);
        $plans = activity_plannings::where('activity_id', $ActivityId)->get();


        foreach ($plans as $plan) {
            $enroll = Activity_Enrollments::where('PlanningId', $plan->planningId)->value('User');
            if (!is_null($enroll)) {
                $user = User::find($enroll);

                $user->balance = $user->balance + $plan->cost;
                $user->save();
            }
        }

        Storage::delete('public/activityImg/' . $attivita->imgActivity);

        Attivita::where('ActivityId', $ActivityId)->delete();
        return redirect('/mieattivita')->with('success', "Attività cancellata ed eventuali rimborsi sono stati effettuati a tutti i Globetrotter iscritti alle pianificiazioni");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function myactivity()
    {
        $attivita = Attivita::where('user_id',auth::user()->id)->orderBy('ActivityId','DESC')->paginate(2);
        $user = User::find(Auth::user()->id);
        return view('attivita.myactivity')->with('attivita', $attivita)->with('user', $user);

    }

    public function search(Request $request)
    {
        $this->validate($request, [
            'paese' => 'required',
            'stop' => 'after:start'

        ]);
        $paese = $request->input('paese');

        $start = $request->input('start') . " 00:00";

        $stop = $request->input('stop') . " 00:00";
        $costo = $request->input('costo');

        if (is_null($costo)) {
            $attivita = DB::table('Activity')
                ->join('activity_plannings', 'Activity.ActivityId', '=', 'activity_plannings.activity_id')
                ->where('Activity.City', '=', $paese)
                ->whereDate('activity_plannings.startDate', '>=', $start)
                ->whereDate('activity_plannings.stopDate', '<=', $stop)
                ->get();
        } else {
            $attivita = DB::table('Activity')
                ->join('activity_plannings', 'Activity.ActivityId', '=', 'activity_plannings.activity_id')
                ->where('Activity.City', '=', $paese)
                ->whereDate('activity_plannings.startDate', '>=', $start)
                ->whereDate('activity_plannings.stopDate', '<=', $stop)
                ->where('activity_plannings.Cost', '<=', $costo)
                ->get();
        }


        return view('attivita.search')->with('attivita', $attivita);

    }
}
