@extends('layout.app')

@section('title', 'Organigrama - IESPP JFSC Huamachuco')
@section('content')
    <x-hero image="{{ asset('images/institucion/hero_institucion.webp') }}" text="Organigrama Institucional" />
    <div class="render py-24">
        <img class="w-full h-full" src="{{ asset('images/institucion/organigrama.jpg') }}"
            alt="Organigrama IESPP José Faustino Sánchez Carrión">
    </div>
@endsection
