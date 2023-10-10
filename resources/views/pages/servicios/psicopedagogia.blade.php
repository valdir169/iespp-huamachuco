@extends('layout.app')

@section('title', 'Psicopedagogia IESPP-JFSC-Huamachuco')

@section('content')
<x-hero image="{{ asset('images/slider/slider4.jpg') }}" text="Psicopedagogia" />
<section>
    <article>
        <div class="py-16">
            <div class="sm:border-y border-y-[#d9d9d9]  w-full">
                <div>
                    <div>
                        <div class="render w-full">
                            <ul class="w-full grid grid-cols-2 sm:flex justify-center">
                                <li class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]"><a href="#"><span>Sobre el Servicio</span></a></li>
                                <li class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]"><a href="#"><span>Horarios</span></a></li>
                                <li class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]"><a href="#"><span>Personal a cargo</span></a></li>
                                <li class="w-full h-[100px] p-1 border border-[#d9d9d9] flex items-center justify-center hover:bg-[#3477db] hover:text-white lg:w-[200px]"><a href="#"><span>Preguntas Frecuentes</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <x-services>
                <x-slot name='servicio'>Psicopedagogia</x-slot>
                <x-slot name='frase'>El secreto de la existencia humana no sólo está en vivir, sino también en saber para qué se vive.</x-slot>
                <x-slot name='img'>{{ asset('images/carreras/CarreraComunicacion.png') }}</x-slot>
                <x-slot name='altImg'>Servicio de Psicopedagogia</x-slot>
                <x-slot name='parrafo'>
                    <p class="grid sm:px-6 lg:px-22 xl:px-32">
                        <span>La lectura es un viaje donde las palabras son destinos. En cada página, se despliegan mundos desconocidos y se abren puertas a la imaginación. La magia de un buen libro es la capacidad de transportarnos más allá de las palabras impresas, hacia horizontes infinitos de descubrimiento.</span> <br>
                        <span>En la lectura, encuentro refugio entre las páginas que conforman un universo propio. Las letras se convierten en arquitectos de emociones, construyendo castillos de historias que residen en la mente mucho después de cerrar el libro. Cada palabra es un paso más profundo hacia la comprensión y la conexión con el mundo que se revela ante mis ojos. </span>
                    </p>
                </x-slot>
            </x-services>
            <div class="bg-[#d9d9d9]">
                <div class="render py-12 grid gap-8">
                    <div><span>Ofrecemos</span></div>
                    <div class="grid gap-4">
                        <div class="flex items-center gap-5">
                            <i class='bx bxs-user-check text-[30px]'></i>
                            <span>Asesoramiento Individual</span>
                        </div>
                        <div class="flex items-center gap-5">
                            <i class='bx bx-male-female text-[30px]'></i>
                            <span>Terapia Grupal</span>
                        </div>
                        <div class="flex items-center gap-5">
                            <i class='bx bxs-book-reader text-[30px]'></i>
                            <span>Talleres</span>
                        </div>
                    </div>
                    <div>
                        <span>Confidencialidad y la ética en los servicios de Psicopedagía.</span>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
@endsection