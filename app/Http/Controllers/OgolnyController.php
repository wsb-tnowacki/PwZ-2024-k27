<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OgolnyController extends Controller
{
    public function start()
    {
        return view('ogolny.welcome');
    }

    public function kontakt()
    {
        return view('ogolny.kontakt');
    }

    public function onas()
    {
        $zadania = [
            'Zadanie 1',
            'Zadanie 2',
            'Zadanie 3'
        ];
        return view('ogolny.onas', ['zadania' => $zadania]);
    }
}
