<?php


namespace App\Http\Controllers;
use App\User;
use App\Attivita;

class PagesController extends Controller
{
    public function whoAreWe()
{
    return view('whoAreWe');
}

    public function profile()
    {
        $user = User::find(auth()->user()->id);
        return view('profile.index')->with('user', $user);
    }

    public function FAQ()
    {
        return view('FAQ');
    }

    public function register()
    {
        return view('auth/register');
    }


}
