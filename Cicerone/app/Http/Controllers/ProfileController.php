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
        if(!is_null($user->imgProfile))
            Storage::delete('public/profileImg/' . $user->imgProfile);
        $user->imgProfile = $fileNameToStore;
        $user->save();
        $request->session()->flash('success', 'Upload riuscito');

        return view('profile.index')->with('user',$user);
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
        $user->surname = $request->input('cognome');
        $user->gender = $request->input('sesso');
        $user->birthDate = $request->input('dataNascita');
        $user->phone = $request->input('telefono');
        $user->nationality = $request->input('nazionalita');
        $user->biography = $request->input('biografia');

        if($request->filled('new_password')) {
            $this->validate($request, [
                'password' => 'required',
                'new_password' => 'min:8|different:password',
                'confirm_new_password' => 'min:8|required',

            ]);
            if (Hash::check($request->password, $user->password)) {
                if($request->new_password == $request->confirm_new_password) {
                    $user->fill([
                        'password' => Hash::make($request->new_password)
                    ])->save();
                    $request->session()->flash('success', 'Password cambiata');
                }
                else{
                    $request->session()->flash('error', 'Le password non corrispondono');
                }
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

    public function destroyImg($id)
    {
        $id = auth()->user()->id;
        $user = User::find($id);
        Storage::delete('public/profileImg/' . $user->imgProfile);


        return redirect('/profile')->with('success', "Immagine cancellata");
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
        Storage::delete('public/profileImg/' . $user->imgProfile);

        User::where('id',$id)->delete();
        return redirect('/home')->with('success', "Account cancellato");
    }


}
