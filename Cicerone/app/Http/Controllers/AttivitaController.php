<?php

namespace App\Http\Controllers;

use App\activity_plannings;
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
        $attivita = new Attivita;
        return view('attivita.index')->with('attivita', $attivita);
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
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6000',
            'Country' => 'required',
            'State' => 'required',
            'Road' => 'required',
            'City' => 'required',
            'lat' => 'required',
            'long' => 'required',
            'postCode' => 'required',
        ]);


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
        }


        $attivita = new Attivita;
        $attivita->nameActivity = $request->input('nomeAttivita');
        //Se avevo caricato un immagine, la elimino per caricare la nuova
        if (!is_null($attivita->imgActivity))
            Storage::delete('public/profileImg/' . $attivita->imgAttivita);
        $attivita->imgActivity = $fileNameToStore;
        $attivita->description = $request->input('descrizione');
        $attivita->Country = $request->input('Country');
        $attivita->State = $request->input('State');
        $attivita->Road = $request->input('Road');
        $attivita->City = $request->input('City');
        $attivita->postCode = $request->input('postCode');
        $attivita->latCoord = $request->input('lat');
        $attivita->longCoord = $request->input('long');

        $attivita->user_id = auth()->user()->id;
        $attivita->save();
        activity_plannings::create([
            'activity_id' => $attivita->ActivityId,
        ]);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ActivityId)
    {
        $attivita = Attivita::find($ActivityId);
        return view('attivita.show')->with('attivita',$attivita);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $attivita = Attivita::find($id);
        return view('attivita.edit')->with('attivita',$attivita);
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



        $attivita->nameActivity = $request->input('nomeAttivita');

        $attivita->description = $request->input('descrizione');
        $attivita->Country = $request->input('Country');
        $attivita->State = $request->input('State');
        $attivita->Road = $request->input('Road');
        $attivita->City = $request->input('City');
        $attivita->postCode = $request->input('postCode');
        $attivita->latCoord = $request->input('lat');
        $attivita->longCoord = $request->input('long');

        $attivita->user_id = auth()->user()->id;
        $attivita->save();
        return redirect()->route('attivita.show', $id)->withSuccess('S-a modificat cu success!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $ActivityId
     * @return \Illuminate\Http\Response
     */
    public function destroy($ActivityId)
    {
        $attivita = User::find($ActivityId);
        Storage::delete('public/activityImg/' . $attivita->imgActivity);

        Attivita::where('ActivityId', $ActivityId)->delete();
        return redirect('/home')->with('success', "Attività cancellata");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function myactivity()
    {
        $attivita = Attivita::all();
        $user = User::find(Auth::user()->id);
        return view('attivita.myactivity')->with('attivita', $attivita)->with('user',$user);

    }

    public function search(Request $request)
    {
        $this->validate($request, [
            'paese' => 'required',

        ]);
        $paese = $request->input('paese');
        $start = $request->input('start'). " 00:00";

        $stop = $request->input('stop') ;
        $costo = $request->input('costo');
        if(is_null($costo))
            $costo = 0;
        $attivita = DB::table('Activity')
            ->join('activity_plannings', 'Activity.ActivityId', '=', 'activity_plannings.activity_id')
            ->where('City','=',$paese)
            ->whereDate('startDate', '>=', $start)
            ->whereDate('stopDate', '<=', $stop)
            ->where('Cost','<=',$costo)
            ->get();


        return view('attivita.search')->with('attivita', $attivita);

    }
}
