<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMailable;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response as ResponseDownload;

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
        return view('pages.institucion.presentacion');
    }

    public function historia()
    {
        return view('pages.institucion.historia');
    }

    public function nosotros()
    {
        return view('pages.institucion.nosotros');
    }

    public function organigrama()
    {
        return view('pages.institucion.organigrama');
    }



    public function directorio()
    {
        $jefaturas = [
            [
                'jefatura' => 'Dirección General',
                'name' => 'Dr. Gladis Martha Alvares Medina',
                'email'  => 'gmedina@iepphuamachuco.edu.pe',
                'fyle' => 'cvdireccion.pdf',
            ],
            [
                'jefatura' => 'Jefatura de la Unidad de Administración',
                'name' => 'CPC. Juan Angel Boñon Chavez',
                'email'  => 'jchavez@iepphuamachuco.edu.pe',
                'fyle' => 'cvdireccion.pdf',
            ],
            [
                'jefatura' => 'Jefatura de Unidad Acádemica',
                'name' => 'Mg. Marivel Santos Layza Rodriguez',
                'email'  => 'mlayza@iepphuamachuco.edu.pe',
                'fyle' => 'cvacademica.pdf',
            ],
            [
                'jefatura' => 'Jefatura de la Unidad de Investigación ',
                'name' => 'Mg. Jose Oracio Pimentel Longobarde',
                'email'  => 'jpimentel@iepphuamachuco.edu.pe',
                'fyle' => 'cvdireccion.pdf',
            ],
            [
                'jefatura' => 'Jefe de la Unidad de Bienestar y Empleabilidad',
                'name' => 'Profesor Luis Humberto Carbonell Garcia',
                'email'  => 'lcarbonell@iepphuamachuco.edu.pe',
                'fyle' => 'cvdireccion.pdf',
            ],
            [
                'jefatura' => 'Coordinador del Área de Calidad',
                'name' => 'Mg. Marita Magdalena Andrade Condori',
                'email'  => 'mandrade@iepphuamachuco.edu.pe',
                'fyle' => 'cvdireccion.pdf',
            ],
            [
                'jefatura' => 'Coordinador del Área de Práticas Pre-Profesionales',
                'name' => 'Mg. Soledad Del Carmen Garcia Martin',
                'email'  => 'sgarcia@iepphuamachuco.edu.pe',
                'fyle' => 'cvdireccion.pdf',
            ],
            [
                'jefatura' => 'Coordinador del Programas de Estudios Idiomas: Especialidad Ingles',
                'name' => 'Mg. Zulma Jannett De La Cruz Contreras',
                'email'  => 'zcontreras@iepphuamachuco.edu.pe',
                'fyle' => 'cvdireccion.pdf',
            ],
            [
                'jefatura' => 'Coordinador del Programas de Estudios Educación Secundaria: Especialidad Comunicación',
                'name' => 'Lic. Walter Felix Reyes Vasquez',
                'email'  => 'wreyes@iepphuamachuco.edu.pe',
                'fyle' => 'cvdireccion.pdf',
            ],
            [
                'jefatura' => 'Coordinador del Programas de Estudios Educación Inicial',
                'name' => 'Profesora Maria Ofelia Cobian Galvez',
                'email'  => 'wreyes@iepphuamachuco.edu.pe',
                'fyle' => 'cvdireccion.pdf',
            ]
        ];
        return view('pages.institucion.directorio', compact('jefaturas'));
    }

    // contacto
    public function contacto()
    {
        return view('pages.contacto');
    }

    // academia

    public function academia(){
        return view('pages.academia');

    //Otros
    public function galeria()
    {
        return view('pages.galeria');
    }



    public function processData(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2',
            'email' => 'email|required',
            'cellphone' => 'required|numeric|min:9',
            'message' => 'required'
        ]);

        $email = new ContactoMailable(($request->all()));
        Mail::to('contrerasvaldir06@gmail.com')->send($email);

        return redirect()->route('contacto')->with('message', 'Mensaje Enviado con áxito');

    }
}
