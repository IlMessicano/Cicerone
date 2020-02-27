<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\User;
use Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('profile.index');
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
        if(!is_null($user->imgProfilo))
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
        $id = auth()->user()->id;
        $user = User::find($id);
        return view('profile.edit')->with('user', $user);

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
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'cognome' => ['required', 'string', 'max:255'],
            'sesso' => ['required', 'string', 'max:1'],
            'dataNascita' => ['required', 'date','before:-18years'],
            'nazionalita' => ['required', 'string', 'max:30'],
            'telefono' => ['required', 'numeric'],


        ]);

        $id = auth()->user()->id;
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->cognome = $request->input('cognome');
        $user->sesso = $request->input('sesso');
        $user->dataNascita = $request->input('dataNascita');
        $user->telefono = $request->input('telefono');
        $user->cittaResidenza = $request->input('cittaResidenza');
        $user->nazioneResidenza = $request->input('nazioneResidenza');
        $user->nazionalita = $request->input('nazionalita');
        $user->biografia = $request->input('biografia');

        if($request->filled('new_password')) {
            $this->validate($request, [
                'password' => 'required',
                'new_password' => 'min:8|different:password',

            ]);
            if (Hash::check($request->password, $user->password)) {
                $user->fill([
                    'password' => Hash::make($request->new_password)
                ])->save();
                $request->session()->flash('success', 'Password cambiata');
            } else {
                $request->session()->flash('error', 'La vecchia password non corrisponde');
            }
        }

        $user->save();
        return view('profile.index')->with('user',$user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = auth()->user()->id;
        $user = User::find($id);
        Storage::delete('public/profileImg/' . $user->imgProfilo);

        User::where('id',$id)->delete();
        return redirect('/home')->with('success', "Account cancellato");
    }
}
