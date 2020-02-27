<?php


namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function whoAreWe()
    {
        return view('whoAreWe');
    }

    public function FAQ()
    {
        return view('FAQ');
    }
}
