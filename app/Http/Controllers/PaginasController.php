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

    public function planaDocente()
    {

        $initialEducationTeachers = [
            [
                'name' => 'Gladis Martha Alvares Medina',
                'units' => ['Gestión y Organización de Instituciones'],
                'cv'  => 'https://drive.google.com/file/d/1LlzIzf4hc3paZBRmFKOTr2LrjNGat2c6/view',
            ],
            [
                'name' => 'Profesor de Educacion Inicial',
                'units' => ['Unidad 1', 'Unidad 2'],
                'cv'  => 'https://drive.google.com/file/d/1LlzIzf4hc3paZBRmFKOTr2LrjNGat2c6/view',
            ]
        ];

        $englishTeachers = [
            [
                'name' => 'Profesor de Educacion Ingles',
                'units' => ['Desarrollo Personal I', 'Englisj I'],
                'cv'  => 'https://drive.google.com/file/d/1LlzIzf4hc3paZBRmFKOTr2LrjNGat2c6/view',
            ]
        ];

        $comunicacionTeachers = [
            [
                'name' => 'Profesor de Educacion Inicial',
                'units' => ['Unidad 1'],
                'cv'  => 'https://drive.google.com/file/d/1LlzIzf4hc3paZBRmFKOTr2LrjNGat2c6/view',
            ]
        ];

        return view('pages.institucion.plana', compact('initialEducationTeachers', 'englishTeachers',  'comunicacionTeachers'));
    }

    public function directorio()
    {
        $jefaturas = [
            [
                'image' => './images/institucion/direccion_general.png',
                'name' => 'Dr. Gladis Martha Alvares Medina',
                'jefatura' => 'Dirección General',
                'email'  => 'galvares@iesppjfschco.edu.pe',
                'fyle' => 'cvdireccion.pdf',
            ],
            [
                'jefatura' => 'Jefatura de la Unidad de Administración',
                'image' => './images/institucion/asertividad.png',
                'name' => 'CPC. Juan Angel Boñon Chavez',
                'email'  => 'gchavez@iesppjfschco.edu.pe',
                'fyle' => 'cvdireccion.pdf',
            ],
            [
                'jefatura' => 'Jefatura de Unidad Acádemica',
                'image' => './images/institucion/asertividad.png',
                'name' => 'Mg. Marivel Santos Layza Rodriguez',
                'email'  => 'mlayza@iesppjfschco.edu.pe',
                'fyle' => 'cvacademica.pdf',
            ],
            [
                'jefatura' => 'Jefatura de la Unidad de Investigación ',
                'image' => './images/institucion/asertividad.png',
                'name' => 'Mg. Jose Oracio Pimentel Longobarde',
                'email'  => 'jpimentel@iesppjfschco.edu.pe',
                'fyle' => 'cvdireccion.pdf',
            ],
            [
                'jefatura' => 'Jefe de la Unidad de Bienestar y Empleabilidad',
                'image' => './images/institucion/asertividad.png',
                'name' => 'Prof. Luis Humberto Carbonell Garcia',
                'email'  => 'lcarbonell@iesppjfschco.edu.pe',
                'fyle' => 'cvdireccion.pdf',
            ],
            [
                'jefatura' => 'Coordinador del Área de Calidad',
                'image' => './images/institucion/asertividad.png',
                'name' => 'Mg. Marita Magdalena Andrade Condori',
                'email'  => 'mandrade@iesppjfschco.edu.pe',
                'fyle' => 'cvdireccion.pdf',
            ],
            [
                'jefatura' => 'Coordinador del Área de Práticas Pre-Profesionales',
                'image' => './images/institucion/asertividad.png',
                'name' => 'Mg. Soledad Del Carmen Garcia Martin',
                'email'  => 'sgarcia@iesppjfschco.edu.pe',
                'fyle' => 'cvdireccion.pdf',
            ],
            [
                'jefatura' => 'Coordinador del Programas de Estudios Idiomas: Especialidad Ingles',
                'image' => './images/institucion/asertividad.png',
                'name' => 'Mg. Zulma Jannett De La Cruz Contreras',
                'email'  => 'zcontreras@iesppjfschco.edu.pe',
                'fyle' => 'cvdireccion.pdf',
            ],
            [
                'jefatura' => 'Coordinador del Programas de Estudios Educación Secundaria: Especialidad Comunicación',
                'image' => './images/institucion/asertividad.png',
                'name' => 'Lic. Walter Felix Reyes Vasquez',
                'email'  => 'wreyes@iesppjfschco.edu.pe',
                'fyle' => 'cvdireccion.pdf',
            ],
            [
                'jefatura' => 'Coordinador del Programas de Estudios Educación Inicial',
                'image' => './images/institucion/asertividad.png',
                'name' => 'Profesora Maria Ofelia Cobian Galvez',
                'email'  => 'wreyes@iesppjfschco.edu.pe',
                'fyle' => 'cvdireccion.pdf',
            ],
            [
                'jefatura' => 'Secretaría Académica',
                'image' => './images/institucion/asertividad.png',
                'name' => 'Mg. Rodolfo Eleuterio Cruz Avalo',
                'email'  => 'wreyes@iesppjfschco.edu.pe',
                'fyle' => 'cvdireccion.pdf',
            ]
        ];
        return view('pages.institucion.directorio', compact('jefaturas'));
    }

    //links for licenciamiento
    public function licenciamiento()
    {
        return view('pages.transparencia.licenciamiento');
    }

    public function documentosGestion()
    {
        return view('pages.transparencia.documentos-gestion');
    }

    public function calendarioAcademico()
    {
        return view('pages.transparencia.calendario-academico');
    }

    public function inversionesDonaciones()
    {
        return view('pages.transparencia.inversiones');
    }

    public function documentosTransparencia()
    {
        return view('pages.transparencia.documentos-transparencia');
    }



    //servicios

    public function biblioteca()
    {
        return view('pages.servicios.biblioteca');
    }

    public function psicopedagogia()
    {
        return view('pages.servicios.psicopedagogia');
    }

    public function topico()
    {
        return view('pages.servicios.topico');
    }

    // contacto
    public function contacto()
    {
        return view('pages.contacto');
    }

    // academia

    public function academia()
    {
        return view('pages.academia');
    }


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
