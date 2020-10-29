<?php

namespace App\Http\Controllers;

use App\Noticias;

class InicioController extends Controller
{
    public function index()
    {
        $noticias = Noticias::all()->take(3);
        return view('inicio')->with(['noticias' => $noticias]);
    }
}
