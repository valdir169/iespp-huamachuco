@extends('layout.app')

@section('title', 'Error 404 | IESPP JFSC Huamachuco')

@section('content')
    {{-- 
    <div class="render flex justify-center items-center w-full flex-col" style="height: calc(100vh - 100px)">
        <div class="h-[100px] absolute bg-[#3477db] w-full top-0"></div>
        <div class="flex flex-col justify-center items-center">
            <h1 class="text-6xl">Oops, te has perdido en la galaxia...</h1>
            <p>Parece que la página que estás buscando se ha desviado hacia un agujero negro.</p>
            <p>Pero no te preocupes, puedes volver a la <a href="{{ route('index') }}">tierra firme</a> con un simple clic.</p>
            <img src="https://i.imgur.com/LsYcBmE.png" alt="Nave espacial perdida" style="margin-top: 20px;">
        </div>
    </div>
 --}}

    <div class="relative -mt-[100px] h-screen w-full bg-cover bg-no-repeat  bg-[black] bg-center flex justify-center items-center flex-col px-8"
        style='background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.2)),
     url(images/error.png);'>
        <h1 class="text-6xl text-center text-white mb-4">Oops, te has perdido en la galaxia...</h1>
        <p>Parece que la página que estás buscando se ha desviado hacia un agujero negro.</p>
        <p>Pero no te preocupes, puedes volver a la <a href="{{ route('index') }}">tierra firme</a> con un simple clic.</p>
        <img src="https://i.imgur.com/LsYcBmE.png" alt="Nave espacial perdida" style="margin-top: 20px;">

    </div>

@endsection
