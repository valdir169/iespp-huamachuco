@extends('layout.app')

@section('title', 'Licenciamiento - IESPP JFSC Huamachuco')

@section('content')
    <x-hero image="{{ asset('images/carreras/carrera_ingles.png') }}" text="Licenciamiento" />
    <div class="render w-full render py-8 md:py-16 flex jusify-center items-center h-auto">
        <img class="mx-auto " src="{{ asset('images/licenciamiento.jpg') }}" alt="">
    </div>
@endsection
