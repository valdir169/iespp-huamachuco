@extends('layout.app')

@section('title', 'Directorio Institucional - Iespp José Faustino Sánchez Carrión Huamachuco')

@section('content')
    <x-hero image="{{ asset('images/institucion/hero_institucion.webp') }}" text="Directorio Institucional" />
    <section class="py-24  ">
        <div class="render pb-4">
            <p class="font-bold text-xl text-[#3477db] font-[Roboto-Thin]">Haz click sobre la imagen para descargar la hoja de vida.</p>

        </div>
        <div class="render  grid sm:grid-cols-2 lg:grid-cols-3 md:gap-x-6 lg:gap-x-[2vw]  gap-y-8 gap-2 ">
            @foreach ($jefaturas as $jefatura)
                <a href="{{ url($jefatura['fyle']) }}" target="_blank"
                    class="border border-[#3477DB] rounded-lg max-w-[300px] mx-auto shadow-md  hover:scale-105 hover:bg-[#ebebeb]  transition flex flex-col p-2 cursor-pointer">
                    <picture class="h-[250px]">
                        <img class="mb-4 rounded-lg w-[230px] h-full mx-auto" src={{ $jefatura['image'] }} />
                    </picture>

                    <div class="flex flex-col flex-grow text-center">
                        <strong class=" text-xl my-2 ">{{ $jefatura['name'] }} </strong>
                        <span>{{ $jefatura['jefatura'] }}</span>
                        <span class="mt-4">{{ $jefatura['email'] }}</span>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection
