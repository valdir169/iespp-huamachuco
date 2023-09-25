@extends('layout.app')

@section('title', 'Galería')

@section('content')
    <x-hero image="{{ asset('images/another/computo.jpg') }}" text="Historia" />

    <section class="render py-8">
        <h2 class="uppercase font-bold py-4">Galería Institucional</h2>

        <article class="grid xl:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-4 w-full">
            <a href=""  class="min-h-[250px] flex max-w-[350px] mx-auto sm:max-w-full cursor-pointer">
                <img class="h-full w-full object-cover bg-center" src="{{ asset('images/another/pc.jpeg') }}" alt="">
            </a>

            <div class="min-h-[250px] flex max-w-[350px] mx-auto sm:max-w-full">
                <img class="h-full w-full object-cover bg-center" src="{{ asset('images/another/pc.jpeg') }}" alt="">
            </div>
            
            <div class="min-h-[250px] flex max-w-[350px] mx-auto sm:max-w-full">
                <img class="h-full w-full object-cover bg-center" src="{{ asset('images/another/pc.jpeg') }}" alt="">
            </div>
            
            <div class="min-h-[250px] flex max-w-[350px] mx-auto sm:max-w-full">
                <img class="h-full w-full object-cover bg-center" src="{{ asset('images/another/pc.jpeg') }}" alt="">
            </div>

            <div class="min-h-[250px] flex max-w-[350px] mx-auto sm:max-w-full">
                <img class="h-full w-full object-cover bg-center" src="{{ asset('images/another/pc.jpeg') }}" alt="">
            </div>


        </article>
    </section>
@endsection
