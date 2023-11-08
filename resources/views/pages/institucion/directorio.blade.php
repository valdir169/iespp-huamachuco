@extends('layout.app')

@section('title', 'Directorio Institucional - IESPP JFSC Huamachuco')

@section('content')
    <x-hero image="{{ asset('images/slider/slider4.jpg') }}" text="Directorio Institucional" />
    <section class="py-24  ">
        <div class="render  grid sm:grid-cols-2 lg:grid-cols-3 md:gap-x-6 lg:gap-x-[2vw]  gap-y-8 gap-2 ">
            @foreach ($jefaturas as $jefatura)
                <a href="{{ url('/descargar-file/' . $jefatura['fyle']) }}"
                    class="border border-[#3477DB] rounded-lg max-w-[300px] mx-auto shadow-md  hover:scale-105 hover:bg-[#ebebeb]  transition flex flex-col p-2 cursor-pointer">

                    <picture class="h-[250px]">
                        <img class="mb-4 rounded-lg w-[200px] h-full mx-auto" src={{ $jefatura['image'] }} />
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
