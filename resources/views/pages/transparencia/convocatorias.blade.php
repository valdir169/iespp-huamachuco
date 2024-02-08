@extends('layout.app')

@section('title', 'Convocatorias Laborales - Iespp José Faustino Sánchez Carrión Huamachuco')

@section('content')
    <x-hero image="{{ asset('images/home/home.jpg') }}" text="Convocatorias Laborales" />

    <div class="gallery-transparencia render py-12 gap-6">
        <img src="{{ asset('images/transparencia/convocatoria_1.jpg') }}" alt="CONVOCATORIA DE PUESTOS Y DE FUNCIONES DE GESTIÓN PEDAGÓGICA 2024" class="img-transparencia">
        <img src="{{ asset('images/transparencia/convocatoria_2.jpg') }}" alt="CONVOCATORIA DE PUESTOS Y DE FUNCIONES DE GESTIÓN PEDAGÓGICA 2024" class="img-transparencia">
        <img src="{{ asset('images/transparencia/convocatoria_3.jpg') }}" alt="CONVOCATORIA DE PUESTOS Y DE FUNCIONES DE GESTIÓN PEDAGÓGICA 2024" class="img-transparencia">
        <img src="{{ asset('images/transparencia/convocatoria_4.jpg') }}" alt="CONVOCATORIA DE PUESTOS Y DE FUNCIONES DE GESTIÓN PEDAGÓGICA 2024" class="img-transparencia">
        <img src="{{ asset('images/transparencia/convocatoria_5.jpg') }}" alt="CONVOCATORIA DE PUESTOS Y DE FUNCIONES DE GESTIÓN PEDAGÓGICA 2024" class="img-transparencia">

        <div class="transparencia-img">
            <img src="" alt="" class="img-show">
            <i class='bx bx-x'></i>
            <p class="copy"></p>
        </div>
    </div>

@endsection
