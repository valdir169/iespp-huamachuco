@extends('layout.app')

@section('title', 'Plana Docente - IESPP JFSC ')
@section('content')
    <x-hero image="{{ asset('images/slider/slider4.jpg') }}" text="Plana Docente" />
    <div class="render py-8">
        <p class="uppercase text-xl font-bold py-4">Plana Docente por Programas de Estudio</p>

        <div class=" grid gap-2">
            <h3
                class="item-program flex items-center w-full justify-between bg-[#DDDD] py-2 px-10 cursor-pointer font-bold hover:bg-[#3477DB] transition hover:text-white">
                <p> Educación Inicial </p>
                <i class='bx bx-plus'></i>
            </h3>
            <x-teacher-table :teachers="$initialEducationTeachers" />

            <h3 class="item-program flex items-center w-full justify-between bg-[#DDDD] py-2 px-10 cursor-pointer font-bold hover:bg-[#3477DB] transition hover:text-white"
                id="table-open">
                <p> Idiomas, Especialidad Ingles </p>
                <i class='bx bx-plus'></i>
            </h3>
            <x-teacher-table :teachers="$englishTeachers" />

            <h3
                class="item-program flex items-center w-full justify-between bg-[#DDDD] py-2 px-10 cursor-pointer font-bold hover:bg-[#3477DB] transition hover:text-white">
                <p> Educación Secundaria, Especialidad Comunicación </p>
                <i class='bx bx-plus'></i>
            </h3>
            <x-teacher-table :teachers="$comunicacionTeachers" />
        </div>
    </div>
@endsection
