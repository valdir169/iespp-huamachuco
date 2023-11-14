@extends('layout.app')

@section('title', 'Licenciamiento - Iespp José Faustino Sánchez Carrión Huamachuco')

@section('content')
    <x-hero image="{{ asset('images/home/home.jpg') }}" text="Licenciamiento" />
    <div class="render w-full render py-8 md:py-16 flex jusify-center items-center h-auto">
        <img class="mx-auto " src="{{ asset('images/transparencia/licenciamiento.jpg') }}" alt="">
    </div>
@endsection
