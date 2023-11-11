@extends('layout.app')

@section('title', 'Convenios - Iespp José Faustino Sánchez Carrión Huamachuco')

@section('content')
    <x-hero image="{{ asset('images/carreras/carrera_ingles.png') }}" text="Convenios" />

    <div class="timeline">

        <div class="timeline-container left-cont">
            <span class="circle">2022</span>

            <div class="text-box p-4">
                <h2 class="text-xl font-bold bg-[#fff] py-1 rounded-xl text-[#3477db] text-center mb-4">CONVENIO
                    INTERINSTITUCIONAL A FAVOR DE LA PRÁCTICA PRE PROFESIONAL</h2>
                <p class="mt-4">Firmamos convenios de apoyo inter institucional con las Instituciones Educativas del Nivel
                    de Educación Inicial: Jardín de Niños N° 100 y Cuna Jardín "Huamachuco". A fin de que nuestros
                    estudiantes realicen sus prácticas pre profesionales con la guía y acompañamiento de las docentes que
                    laboran en estas dos prestigiosas Instituciones Educativas.</p>
                <span class="left-container-arrow"></span>
            </div>
        </div>


        <div class="timeline-container right-cont">
            <span class="circle">2023</span>

            <div class="text-box p-4">
                <h2 class="text-xl font-bold bg-[#fff] py-1 rounded-xl text-[#3477db] text-center mb-4">CONVENIO
                    INTERINSTITUCIONAL</h2>
                <p class="mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora quas alias doloremque,
                    reiciendis ad aut esse laudantium sint nulla quibusdam!</p>
                <span class="right-container-arrow"></span>

            </div>
        </div>

    </div>
@endsection
