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


    public function idiomasingles()
    {
        return view('carreras.ingles');
    }

    public function comunicacion()
    {
        return view('carreras.comunicacion');
    }

    public function modalidad()
    {
        return view('pages.modalidad_admision');
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
