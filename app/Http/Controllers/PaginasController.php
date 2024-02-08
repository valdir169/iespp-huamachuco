<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMailable;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class PaginasController extends Controller
{
    //controller for index
    public function main()
    {
        return view('pages.index');
    }


    public function admision()
    {
        return view('pages.admision.admision');
    }

    public function programas()
    {
        return view('pages.programas.programas');
    }


    public function educacioninicial()
    {
        return view('pages.programas.educacionInicial');
    }


    public function idiomasingles()
    {
        return view('pages.programas.ingles');
    }

    public function comunicacion()
    {
        return view('pages.programas.comunicacion');
    }

    public function modalidad()
    {
        return view('pages.admision.modalidad_admision');
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
        return view('pages.institucion.mision_vision');
    }

    public function organigrama()
    {
        return view('pages.institucion.organigrama');
    }

    public function planaDocente()
    {
        return view('pages.institucion.plana');
    }

    public function directorio()
    {
        $jefaturas = [
            [
                'image' => './images/institucion/directorio/directora.webp',
                'name' => 'Dra. Gladys Martha Alvarez Medina',
                'jefatura' => 'Directora General',
                'email'  => 'maestramartha1@hotmail.com',
                'fyle' => '',
            ],
            [
                'jefatura' => 'Secretario Académico',
                'image' => './images/institucion/directorio/images.png',
                'name' => 'Mg. Rodolfo Eleuterio Cruz Avalos',
                'email'  => 'rodolfocruzavalos@gmail.com',
                'fyle' => '#',
            ],
            [
                'jefatura' => 'Jefe de la Unidad de Bienestar y Empleabilidad',
                'image' => './images/institucion/directorio/images.png',
                'name' => 'Prof. Luis Humberto Carbonell García',
                'email'  => 'brujito110267@gmail.com',
                'fyle' => '#',
            ],
            [
                'jefatura' => 'Jefe de la Unidad de Investigación',
                'image' => './images/institucion/directorio/images.png',
                'name' => 'Mg. José Horacio Pimentel Longobardi',
                'email'  => 'pimentellongobardi05@gmail.com',
                'fyle' => '#',
            ],
            [
                'jefatura' => 'Jefe de Unidad Académica',
                'image' => './images/institucion/directorio/marivel.jpg',
                'name' => 'Mg. Marivel Santos Layza Rodríguez',
                'email'  => 'Mlayzar1213@gmail.com',
                'fyle' => 'https://drive.google.com/file/d/1actBIkCv8CKPrwRboptiynE4RMk3Hfmh/view?usp=sharing',
            ],
            [
                'jefatura' => 'Coordinadora del área de Calidad',
                'image' => './images/institucion/directorio/marita.jpg',
                'name' => 'Mg. Marita Magdalena Andrade Condori',
                'email'  => 'mmand9@hotmail.com',
                'fyle' => 'https://drive.google.com/file/d/1IQ664RFiM3CyH5Q476RYiP4CgoB52Bfd/view?usp=sharing',
            ],
            [
                'jefatura' => 'Coordinadora del área de Práctica',
                'image' => './images/institucion/directorio/images.png',
                'name' => 'Mg. Soledad del Carmen García Martín',
                'email'  => 'solfer0102@gmail.com',
                'fyle' => '#',
            ],
            [
                'jefatura' => 'Coordinadora del Programa de Estudios de Idiomas, Inglés',
                'image' => './images/institucion/directorio/images.png',
                'name' => 'Mg. Zulma Janett de la Cruz Contreras',
                'email'  => 'zulma_770@hotmail.com',
                'fyle' => '#',
            ],
            [
                'jefatura' => 'Coordinador del Programa de Estudios de Educación Secundaria, especialidad Comunicación',
                'image' => './images/institucion/directorio/images.png',
                'name' => 'Lic. Walter Felix Reyes Vásquez',
                'email'  => 'walterrv79@gmail.com',
                'fyle' => 'https://drive.google.com/file/d/1I96IwuGHmEQZsOPpQXPgKyJvMDYSuDZT/view?usp=drive_link',
            ],
            [
                'jefatura' => 'Coordinadora del Programa de Educación Inicial',
                'image' => './images/institucion/directorio/images.png',
                'name' => 'Prof. María Ofelia Cobian Galvez',
                'email'  => 'wreyes@iesppjfschco.edu.pe',
                'fyle' => '#',
            ],
        ];
        return view('pages.institucion.directorio', compact('jefaturas'));
    }

    //links for transparencia
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

    public function convenios()
    {
        return view('pages.transparencia.convenios');
    }

    public function convocatorias()
    {
        return view('pages.transparencia.convocatorias');
    }

    public function inversionesDonaciones()
    {
        return view('pages.transparencia.inversiones');
    }

    public function documentosTransparencia()
    {
        return view('pages.transparencia.documentos-transparencia');
    }

    public function estadisticas()
    {
        return view('pages.transparencia.estadisticas');
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

    public function brigadistas()
    {
        return view('pages.servicios.brigadistas');
    }
    public function talleres()
    {
        return view('pages.servicios.talleres');
    }


    // trámites
    public function contacto()
    {
        return view('pages.tramites.contacto');
    }

    public function matricula()
    {
        return view('pages.tramites.matricula');
    }


    // academia
    public function academia()
    {
        return view('pages.admision.academia');
    }

    //Otros
    public function gallery()
    {
        return view('pages.others.gallery');
    }


    public function error()
    {
        return view('pages.others.404');
    }

    public function processData(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|min:2',
                'email' => 'email|required',
                'cellphone' => 'required|numeric|min:9',
                'message' => 'required'
            ]);

            $email = new ContactoMailable(($request->all()));
            Mail::to('raulbaldeonsoto14@gmail.com')->send($email);

            return redirect()->route('contacto')->with('message_type', 'success')->with('message', 'Mensaje Enviado con áxito');
        } catch (ValidationException $e) {
            return redirect()->route('contacto')->withErrors($e->errors())->withInput();
            //throw $th;
        } catch (\Exception $e) {
            return redirect()->route('contacto')->with('message_type', 'error')->with('message', 'Ha ocurrido un error al enviar el mensaje.');
        }
    }
}
