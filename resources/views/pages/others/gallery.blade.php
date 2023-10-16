@extends('layout.app')

@section('title', 'Galería - IESPP JFSC Huamachuco')

@section('content')
    <x-hero image="{{ asset('images/gallery/computo.jpg') }}" text="Galería" />

    <section class="render py-16">
        <h2 class="title text-center">Educación Inicial</h2>
        <div>
            <img src="{{ asset('images/') }}" alt="">
        </div>
    </section>

    <section class="render py-16">
        <h2 class="title text-center">Idiomas: Especialidad Inglés</h2>
        <div>
            <img src="{{ asset('images/') }}" alt="">
        </div>
    </section>

    <section class="render py-16">
        <h2 class="title text-center">Educación Secundaria: Especialidad Comunicación</h2>
        <div>
            <img src="{{ asset('images/') }}" alt="">
        </div>
    </section>
@endsection
