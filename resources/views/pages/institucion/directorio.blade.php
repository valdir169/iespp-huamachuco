@extends('layout.app')

@section('title', 'Directorio')
@section('content')
    <x-hero image="{{ asset('images/slider/slider4.jpg') }}" text="Directorio" />
    <section class="render py-8">
        <h3 class="text-xl uppercase font-bold py-2">Plana Jerarquica</h3>


        <article class="grid md:grid-cols-2 md:gap-x-6 lg:gap-x-16 xl:gap-x-24 gap-y-8">
            <div class="flex border rounded-lg p-4 gap-4 border border-[#3477DB] h-[200px]">
                <img class="" src="{{ asset('images/directora.png') }}" alt="">

                <div class="flex flex-col justify-evenly">
                    <strong class="uppercase text-xl">Dirección general</strong>
                    <span class="font-bold">Gladis Martha Alvares Medina </span>
                    <span>marthamedina@iespp.edu.pe</span>
                </div>
            </div>

            <div class="flex border rounded-lg p-4 gap-4 border border-[#3477DB] h-[200px]">
                <img class="" src="{{ asset('images/directora.png') }}" alt="">

                <div class="flex flex-col justify-evenly">
                    <strong class="uppercase text-xl">Dirección general</strong>
                    <span class="font-bold">Gladis Martha Alvares Medina </span>
                    <span>marthamedina@iespp.edu.pe</span>
                </div>
            </div>


            <div class="flex border rounded-lg p-4 gap-4 border border-[#3477DB] h-[200px]">
                <img class="" src="{{ asset('images/directora.png') }}" alt="">

                <div class="flex flex-col justify-evenly">
                    <strong class="uppercase text-xl">Dirección general</strong>
                    <span class="font-bold">Gladis Martha Alvares Medina </span>
                    <span>marthamedina@iespp.edu.pe</span>
                </div>
            </div>

        </article>


    </section>
@endsection
