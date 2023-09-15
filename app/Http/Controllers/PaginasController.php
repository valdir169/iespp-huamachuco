<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    //controller for index
    public function main()
    {
        return view('pages.index');
    }


    public function admision()
    {
        return view('pages.admision');
    }

    public function carreras()
    {
        return view('pages.carreras');
    }


    public function educacioninicial()
    {
        return view('carreras.educacionInicial');
    }



    // institucion

    public function presentacion()
    {
        return view('institucion.presentacion');
    }

    public function historia()
    {
        return view('institucion.historia');
    }

    public function nosotros()
    {
        return view('institucion.nosotros');
    }
}
