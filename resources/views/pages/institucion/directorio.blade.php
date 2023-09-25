@extends('layout.app')

@section('title', 'Directorio')
@section('content')
    <x-hero image="{{ asset('images/slider/slider4.jpg') }}" text="Directorio" />
    <section class="render py-8 2xl:px-48 ">
        <h3 class="text-xl uppercase font-bold py-2">Plana Jerarquica</h3>

        <article class="grid sm:grid-cols-2 lg:grid-cols-3 md:gap-x-6 lg:gap-x-[2vw]  gap-y-8 gap-2">

            @foreach ($jefaturas as $jefatura)
                <div
                    class="border rounded-lg p-2 gap-2 border border-[#3477DB] 
                            max-w-[350px] flex  flex-col justify-center items-center mx-auto w-full text-center">
                    <img class="w-[200px] h-[200px] mx-auto"
                        src="https://cdn.icon-icons.com/icons2/2468/PNG/512/user_icon_149329.png" alt="">

                    <div class="flex flex-col justify-center gap-1">
                        <strong class=" text-xl my-2">{{ $jefatura['jefatura'] }}</strong>
                        <span class="font-bold">{{ $jefatura['name'] }} </span>
                        <a href="" class="break-words">{{ $jefatura['email'] }}</a>
                        {{-- <a href="{{ url('/descargar-file/' . $jefatura['fyle']) }}">Descargar</a> --}}
                        <x-button type="secondary" ruta="{{ url('/descargar-file/' . $jefatura['fyle']) }}">Descargar cv</x-button>

                    </div>
                </div>
            @endforeach

        </article>
    </section>
@endsection
