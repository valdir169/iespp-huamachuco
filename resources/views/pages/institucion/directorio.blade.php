@extends('layout.app')

@section('title', 'Directorio Institucional - IESPP JFSC HCO')
@section('content')
    <x-hero image="{{ asset('images/slider/slider4.jpg') }}" text="Directorio Institucional" />
    <section class="render py-8 2xl:px-48 grid sm:grid-cols-2 lg:grid-cols-3 md:gap-x-6 lg:gap-x-[2vw]  gap-y-8 gap-2 ">
        @foreach ($jefaturas as $jefatura)
            <a href="{{ url('/descargar-file/' . $jefatura['fyle']) }}"
                class="border border-[#3477DB] rounded-lg max-w-[350px] mx-auto shadow-md  hover:scale-105 hover:bg-[#D9D9D9]  transition flex flex-col p-2 cursor-pointer">

                <picture class="h-[300px]">
                    <img class="mb-4 rounded-lg w-[350px] h-full mx-auto" src={{ $jefatura['image'] }} />
                </picture>

                <div class="flex flex-col flex-grow text-center">
                    <strong class=" text-xl my-2 ">{{ $jefatura['name'] }} </strong>
                    <span>{{ $jefatura['jefatura'] }}</span>
                    <span class="mt-4">{{ $jefatura['email'] }}</span>
                </div>
            </a>
        @endforeach
    </section>
@endsection
