<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('profile.index')->with('user', $user);
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

        $id = auth()->user()->id;
        $user = User::find($id);
        //Se avevo caricato un immagine, la elimino per caricare la nuova
        if($user->imgProfilo != NULL)
            Storage::delete('public/profileImg/' . $user->imgProfilo);
        $user->imgProfilo = $fileNameToStore;
        $user->save();
        return view('profile.index')->with('success', 'Immagine caricata')->with('user',$user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
