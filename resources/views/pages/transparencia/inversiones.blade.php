@extends('layout.app')

@section('title', 'Inversiones y Donaciones - Iespp José Faustino Sánchez Carrión Huamachuco')

@section('content')
    <x-hero image="{{ asset('images/home/home.jpg') }}" text="Inversiones y Donaciones" />
    <div class="render py-16">
        <p class="title mb-8">Documentos de inversiones y donaciones</p>

        <div class=" grid gap-8 md:gap-16 lg:grid-cols-3 max-w-[500px] mx-auto lg:max-w-full">
            <div>
                <h3 class="flex items-center w-full bg-[#DDDD] py-2 px-10 font-bold ">
                    <p> Presupuestos </p>
                </h3>

                <div class="mt-4 flex justify-between items-center px-1">
                    <p class="font-bold">LIsta de archivos</p>
                    <a class="bg-[#3477DB] text-white cursor-pointer hover:bg-[#ffffff] text-center
                     outline-none  font-bold rounded-lg hover:text-black hover:border-[#3477DB] hover:border
                     py-2.5 no-underline  px-10 duration-200 ease-in-out"
                        href="">Descargar</a>
                </div>
            </div>

            <div>
                <h3 class="flex items-center w-full bg-[#DDDD] py-2 px-10 font-bold ">
                    <p> Informes Económicos </p>
                </h3>

                <div class="mt-4 flex justify-between items-center px-1">
                    <p class="font-bold">Informes Económicos 2021 - 2022</p>
                    <a class="bg-[#3477DB] text-white cursor-pointer hover:bg-[#ffffff] text-center
                     outline-none  font-bold rounded-lg hover:text-black hover:border-[#3477DB] hover:border
                     py-2.5  no-underline  px-10 duration-200 ease-in-out"
                        href="">Descargar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
