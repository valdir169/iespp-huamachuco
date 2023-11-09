@extends('layout.app')

@section('title', 'Error 404 | Iespp José Faustino Sánchez Carrión Huamachuco')

@section('content')
    <div class="relative -mt-[100px] h-screen w-full bg-cover bg-no-repeat  bg-[black] bg-center flex justify-around items-center flex-col px-8"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.8),rgba(0, 0, 0, 0.5)),
     url('{{ asset('images/others/error.png') }}');">
        <div class="flex justify-center items-center flex-col mt-32 md:px-32">
            <lord-icon src="https://cdn.lordicon.com/wkppeqfv.json" trigger="loop" delay="2000"
                colors="primary:#3477db,secondary:#ffffff" style="width:250px;height:250px">
            </lord-icon>
            <h1 class="text-5xl text-center text-white mb-4">Oops, la página que buscas no se encuentra en esta ruta!</h1>
        </div>
        <a href="{{ route('index') }}"
            class="text-xl bg-[#3477DB] text-white cursor-pointer transition ease-in-out font-bold rounded-lg
         py-2.5 text-center no-underline  px-12 shadow-lg hover:opacity-75">Regresame
            al inicio</a>
    </div>
@endsection
