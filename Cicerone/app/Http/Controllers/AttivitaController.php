<?php

namespace App\Http\Controllers;

use App\Attivita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;

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
            $path = $request->file('img')->storeAs('public/profileImg', $fileNameToStore);
        }


        $attivita = new Attivita;
        $attivita->nameActivity = $request->input('nomeAttivita');
        //Se avevo caricato un immagine, la elimino per caricare la nuova
        if (!is_null($attivita->imgActivity))
            Storage::delete('public/profileImg/' . $attivita->imgAttivita);
        $attivita->imgActivity = $fileNameToStore;
        $attivita->description = $request->input('descrizione');
        $attivita->user_id = auth()->user()->id;
        $attivita->save();
        return view('home');
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
     * @param \App\Attivita $attivita
     * @return \Illuminate\Http\Response
     */
    public function edit(Attivita $attivita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Attivita $attivita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attivita $attivita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Attivita $attivita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attivita $attivita)
    {
        //
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
        return view('attivita.myactivity')->with('attivita', $attivita);

    }
}
