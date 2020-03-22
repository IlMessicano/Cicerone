<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'gender' => ['required', 'string', 'max:1'],
            'birthDate' => ['required', 'date','before:-18years','before:now','after:-125 years'],
            'nationality' => ['required', 'string', 'max:30'],
            'phone' => ['required','unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'prefix' => ['required'],
            'imgProfile' => ['mimes:jpeg,png,jpg,gif,svg|max:6000'],
            'biography' => ['nullable','string','max:256'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $request = request();
        if ($request->hasFile('imgProfile')) {
            $profileImage = $request->file('imgProfile');
            $filenameWithExt = $request->file('imgProfile')->getClientOriginalName();
            //Prendo il nome del file senza estensione
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //Prendo solo l'estensione
            $extension = $request->file('imgProfile')->getClientOriginalExtension();

            //Creo il nome del file con il timestamp
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            $upload_path = 'public/profileImg/';
            $path = $request->file('imgProfile')->storeAs('public/profileImg', $fileNameToStore);
            $success = $profileImage->move($upload_path, $fileNameToStore);

            return User::create([
                'name' => $data['name'],
                'surname' => $data['surname'],
                'email' => $data['email'],
                'birthDate' => $data['birthDate'],
                'gender' => $data['gender'],
                'nationality' => $data['nationality'],
                'phone' => $data['prefix'] . '' . $data['phone'],
                'password' => Hash::make($data['password']),
                'imgProfile' => $fileNameToStore,
                'biography' => $data['biography'],
            ]);
        }
        else{
            return User::create([
                'name' => $data['name'],
                'surname' => $data['surname'],
                'email' => $data['email'],
                'birthDate' => $data['birthDate'],
                'gender' => $data['gender'],
                'nationality' => $data['nationality'],
                'phone' => $data['prefix'] . '' . $data['phone'],
                'password' => Hash::make($data['password']),
                'biography' => $data['biography'],
            ]);

        }
    }
}
