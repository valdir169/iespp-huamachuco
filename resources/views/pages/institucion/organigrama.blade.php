@extends('layout.app')

@section('title', 'Organigrama')
@section('content')
    <x-hero image="{{ asset('images/slider/slider4.jpg') }}" text="Organigrama Institucional" />
    <div class="render py-8">
        <img class="w-full h-full" src="{{ asset('images/institucion/organigrama.jpg') }}"
            alt="Organigrama IESPP José Faustino Sánchez Carrión">
    </div>
@endsection
