@extends('layout.app')

@section('title', 'Estadísticas - Iespp José Faustino Sánchez Carrión Huamachuco')

@section('content')
    <x-hero image="{{ asset('images/home/home.jpg') }}" text="Estadísticas" />

    <div class="render py-16">
        <div class=" grid gap-8 ">
            <div class="flex gap-4 justify-center items-center md:gap-8">
                <a href="https://drive.google.com/file/d/1ARIyRLL4I4OH9Schw0pi-XF7ZWeNXISt/view?usp=sharing" target="_blank"
                    class="item-program flex items-center w-full justify-between bg-[#ebebeb] py-2.5 px-10 cursor-pointer font-bold hover:bg-[#3477DB] transition hover:text-white">
                    <p> Lista de ingresantes 2022 </p>
                    <i class='bx bx-plus'></i>
                </a>

                <a href="https://drive.google.com/file/d/1ARIyRLL4I4OH9Schw0pi-XF7ZWeNXISt/view?usp=sharingkw" target="_blank"
                    class="bg-[#3477DB] text-white cursor-pointer hover:bg-[#ffffff] 
                outline-none font-bold rounded-lg  hover:text-black border-[#3477DB] border-2
                 py-2 text-center no-underline  px-12  transition-all duration-200 opacity-90 hover:opacity-100">Ver</a>
            </div>

        </div>
    </div>
@endsection
