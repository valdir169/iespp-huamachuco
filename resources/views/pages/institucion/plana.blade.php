@extends('layout.app')

@section('title', 'Plana Docente - IESPP JFSC Huamachuco ')

@section('content')
    <x-hero image="{{ asset('images/slider/slider4.jpg') }}" text="Plana Docente" />
    <div class="render py-16">
        <h2 class="title text-center">Plana docente por programas de estudio</h2>

        <div class=" grid gap-2 mt-8">
            <a href="https://drive.google.com/file/d/1jvNBoMIXGStIoDXwC_tVoDTLEZw4OpU6/view?usp=sharing" target="_blank"
                class="item-program flex items-center w-full justify-between bg-[#ebebeb] py-2 px-10 cursor-pointer font-bold hover:bg-[#3477DB] transition hover:text-white">
                <p> Educación Inicial </p>
                <i class='bx bx-plus'></i>
            </a>

            <a href="https://drive.google.com/file/d/1IKugTigwF56HudkFDr1gFIGScnBCkv5r/view?usp=sharing" target="_blank"
                class="item-program flex items-center w-full justify-between bg-[#ebebeb] py-2 px-10 cursor-pointer font-bold hover:bg-[#3477DB] transition hover:text-white"
                id="table-open">
                <p> Idiomas, Especialidad Inglés </p>
                <i class='bx bx-plus'></i>
            </a>

            <a href="https://drive.google.com/file/d/1kH5fSn3XsQinGugDqivlhFLrij1dD7to/view?usp=sharing" target="_blank"
                class="item-program flex items-center w-full justify-between bg-[#ebebeb] py-2 px-10 cursor-pointer font-bold hover:bg-[#3477DB] transition hover:text-white">
                <p> Educación Secundaria, Especialidad Comunicación </p>
                <i class='bx bx-plus'></i>
            </a>
        </div>
    </div>
@endsection
